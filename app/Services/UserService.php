<?php


namespace App\Services;


use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentsResource;
use App\Http\Resources\TeacherResource;
use App\Models\GroupStudent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserService
{
	public function storeUser(StudentRequest $request){
		$user = User::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'password' => Hash::make($request->input('password'))
		]);
		$groups = $request->input('groups');
		$this->addGroupsToUser($user, $groups);
	}

	public function updateUser(Request $request, int $id){
		$user = User::find($id);
		$updateArr = [
			'name' => $request->input('name'),
			'email' => $request->input('email')
		];
		if($request->input('password')){
			$updateArr['password'] = Hash::make($request->input('password'));
		}
		$user->update($updateArr);


		$this->removeUserGroups($user);
		$this->addGroupsToUser($user, $request->input('groups'));
	}

	public function removeUser(int $id){
		$user = User::find($id);
		$this->removeUserGroups($user);
		$user->delete();
	}

	public function search(Request $request, $userType = USER::ROLE_STUDENT){
		$search = $request->input('search');
		$group = (int)$request->input('group');

		$users = User::where('role','=', $userType);
		if(strlen($search) > 0){
			$users->where('name', 'like', "%$search%");
		}
		if(!is_null($group) && $group != 0){
			$users->select('users.name', 'users.email', 'users.created_at', 'users.id')
				->join('group_to_user', 'users.id','=','group_to_user.user_id')
				->where('group_to_user.group_student_id','=',$group)
				->orderBy('users.created_at', 'DESC');
		}else{
			$users->orderBy('created_at', 'DESC');
		}
		switch ($userType){
			case User::ROLE_STUDENT:
				return StudentsResource::collection($users->paginate(5));
			case User::ROLE_TEACHER:
				return TeacherResource::collection($users->paginate(5));
		}

	}

	public function removeUserGroups(User $user){
		if(count($user->groups) > 0){
			foreach($user->groups as $group){
				$user->groups()->detach($group);
			}
		}
	}
	public function addGroupsToUser(User $user, array $groups){
		$attachedGroups = [];
		if(count($groups) > 0){
			foreach($groups as $group){
				if(!in_array($group, $attachedGroups)) {
					$attachedGroups[] = $group;
					$user->groups()->attach($group);
				}
			}
		}
	}
	public function addDisciplineToTeacherAndStudents(User $user, array $groupsData){
		$attachedDisciplines = [];
		if(count($groupsData) > 0){
			foreach($groupsData as $groupData){
				if(!in_array($groupData['discipline'], $attachedDisciplines)) {
					$attachedDisciplines[] = $groupData['discipline'];
					$user->disciplines()->attach($groupData['discipline'], [
						'control_form' => $groupData['formControl'],
						'has_course_work' => $groupData['courseWork'],
						'attestations' => json_encode($groupData['attestations'])
					]);
					$user->groups()->attach($groupData['group']);

					$group = GroupStudent::find($groupData['group']);
					foreach($group->users as $user){
						if(!$this->hasDiscipline($groupData['discipline'], $user->disciplines)){
							$user->disciplines()->attach($groupData['discipline'], [
								'control_form' => $groupData['formControl'],
								'has_course_work' => $groupData['courseWork'],
								'attestations' => json_encode($groupData['attestations'])
							]);
						}
					}
				}
			}
		}
	}
	public function removeDisciplinesFromTeacherStudents($teacher){
		$teacherDisciplines = $teacher->disciplines;
		$groups = $teacher->groups;
		$students = [];
		foreach($groups as $group){
			foreach($group->users as $user){
				if($user->id !== $teacher->id){
					$students[] = $user;
				}
			}
			$teacher->groups()->detach($group);
		}

		foreach($teacherDisciplines as $discipline){
			foreach($students as $student){
				if($this->hasDiscipline($discipline->id, $student->disciplines)){
					$student->disciplines()->detach($discipline->id);
				}
			}
			$teacher->disciplines()->detach($discipline->id);
		}
	}

	private function hasDiscipline(int $disciplineId, $studentDisciplines){
		foreach($studentDisciplines as $discipline){
			if($discipline->id == $disciplineId){
				return true;
			}
		}
		return false;
	}
}