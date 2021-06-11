<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Http\Resources\StudentsResource;
use App\Http\Resources\TeacherEditResource;
use App\Http\Resources\TeacherResource;
use App\Models\User;
use App\Services\TeacherService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeachersController extends Controller
{

    public function index()
    {
        return view('admin.teachers.index');
    }


    public function create()
    {
        return view('admin.teachers.create');
    }


    public function store(TeacherRequest $request)
    {
		(new TeacherService())->storeTeacher($request);
    }

    public function edit($id)
    {
		$teacherData = (new TeacherService())->prepareTeacherDataToEdit($id);
        return view('admin.teachers.edit', compact('teacherData'));
    }


    public function update(Request $request, $id)
    {
		$validator = $request->validate([
			'name' => 'required|string',
			'password' => 'nullable|string|min:8',
			'email' => [
				'required',
				Rule::unique('users')->ignore($id)
			],
			'groups' => 'array'
		]);
		(new TeacherService())->updateTeacher($request, $id);
    }

    public function destroy($id)
    {
        User::find($id)->delete();
    }

    public function getListTeachers(){
		$result = User::where('role','=',User::ROLE_TEACHER)->orderBy('created_at', 'DESC')->paginate(30);
		return TeacherResource::collection($result);
	}
	public function search(Request $request){
		return (new UserService())->search($request, User::ROLE_TEACHER);
	}
}
