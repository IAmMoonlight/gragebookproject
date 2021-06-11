<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\GroupStudentsResource;
use App\Models\GroupStudent;
use Illuminate\Http\Request;

class GroupStudentsController extends Controller
{

    public function index()
    {
        return view('admin.groupStudents.index');
    }

    public function create()
    {
        return view('admin.groupStudents.create');
    }

    public function store(Request $request)
    {
		GroupStudent::create([
			'title' => $request->input('title')
		]);
		return redirect()->route('account.group-students.index');
    }

    public function edit($id)
    {
		$group = GroupStudent::find($id);
		return view('admin.groupStudents.edit', compact('group'));
    }

    public function update(Request $request, $id)
    {
		GroupStudent::find($id)->update([
			'title' => $request->input('title')
		]);
		return redirect()->route('account.group-students.index');
    }

    public function destroy($id)
    {
		GroupStudent::find($id)->delete();
		return redirect()->route('account.group-students.index');
    }

	public function getListGroupStudents(Request $request){
		$result = GroupStudent::orderBy('created_at', 'DESC')->paginate(30);
		return GroupStudentsResource::collection($result);
	}

	public function getAllGroups(){
    	return GroupStudent::orderBy('created_at', 'DESC')->get();
	}

	public function search(Request $request){
		$search = $request->input('search');
		$result = GroupStudent::where('title', 'like', "%$search%")
			->orderBy('created_at', 'DESC')
			->paginate(5);
		return GroupStudentsResource::collection($result);
	}
}
