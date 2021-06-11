<?php


namespace App\Services;


use App\Http\Requests\TeacherRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherService
{
	public function storeTeacher(TeacherRequest $request){
		$user = User::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'password' => Hash::make($request->input('password')),
			'role' => User::ROLE_TEACHER
		]);
		(new UserService())->addDisciplineToTeacherAndStudents($user, $request->input('groups'));
	}
	public function updateTeacher(Request $request, $id){
		$user = User::find($id);
		$updateArr = [
			'name' => $request->input('name'),
			'email' => $request->input('email')
		];
		if($request->input('password')){
			$updateArr['password'] = Hash::make($request->input('password'));
		}
		$user->update($updateArr);

		$userService = new UserService();

		$userService->removeDisciplinesFromTeacherStudents($user);
		$userService->addDisciplineToTeacherAndStudents($user, $request->input('groups'));
	}

	private function prepareGroupsForAttach(array $groupsData): array {
		$result = [];
		foreach($groupsData as $group){
			$result[] = $group['group'];
		}
		return $result;
	}
	private function prepareDisciplinesForAttach(array $disciplinesData): array {
		$result = [];
		foreach($disciplinesData as $discipline){
			$result[$discipline['discipline']] = [
				'formControl' => (int)$discipline['formControl'],
				'group' => $discipline['group']
			];
		}
		return $result;
	}

	public function prepareTeacherDataToEdit(int $id): array {
		$teacher = User::with(['groups'])->find($id);
		$teacherDisciplines = $teacher->disciplines;
		$teacherData = [
			'id' => $teacher->id,
			'name' => $teacher->name,
			'email' => $teacher->email,
			'password' => ''
		];
		$dataGroups = [];
		foreach($teacher->groups as $group){
			$teacherStudents = $group->users()->where('user_id', '<>', $teacher->id)->get();
			foreach($teacherStudents as $student){
				foreach($student->disciplines as $discipline){
					if($this->checkStudentDisciplineInTeacherDisciplines($discipline->id, $teacherDisciplines)
						&& !$this->checkGroupInListGroups($group, $dataGroups)){
						$dataGroups[] = [
							'group' => $group->id,
							'courseWork' => $discipline->pivot->has_course_work,
							'discipline' => $discipline->id,
							'formControl' => $discipline->pivot->control_form,
							'groupName' => $group->title,
							'attestations' => json_decode($discipline->pivot->attestations, true)
						];
					}
				}
			}
		}
		$teacherData['groups'] = $dataGroups;
		return $teacherData;
	}
	private function checkGroupInListGroups($group, $listGroups): bool {
		foreach($listGroups as $oneGroup){
			if($oneGroup['group'] == $group->id){
				return true;
			}
		}
		return false;
	}
	private function checkStudentDisciplineInTeacherDisciplines($studentDisciplineId, $teacherDisciplines): bool {
		foreach($teacherDisciplines as $teacherDiscipline){
			if($teacherDiscipline->id == $studentDisciplineId){
				return true;
			}
		}
		return false;
	}
}