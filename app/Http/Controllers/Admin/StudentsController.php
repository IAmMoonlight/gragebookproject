<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentsResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentsController extends Controller
{
    public function index()
    {
        return view('admin.students.index');
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(StudentRequest $request)
    {
		(new UserService())->storeUser($request);
    }

    public function edit($id)
    {
    	$student = User::with(['groups'])->find($id);
        return view('admin.students.edit', compact('student'));
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
		(new UserService())->updateUser($request, $id);
    }

    public function destroy($id)
    {
		(new UserService())->removeUser($id);
    }

	public function getListStudents(Request $request){
		$result = User::where('role','=',User::ROLE_STUDENT)->orderBy('created_at', 'DESC')->paginate(30);
		return StudentsResource::collection($result);
	}

	public function search(Request $request){
		return (new UserService())->search($request);
	}
}
