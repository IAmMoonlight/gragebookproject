<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DisciplineRequest;
use App\Http\Resources\DiscipliesListResource;
use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplinesController extends Controller
{
    public function index()
    {
        return view('admin.disciplines.index');
    }

    public function create()
    {
        return view('admin.disciplines.create');
    }

    public function store(DisciplineRequest $request)
    {
        Discipline::create([
        	'title' => $request->input('title')
		]);
        return redirect()->route('account.disciplines.index');
    }

    public function edit($id)
    {
    	$discipline = Discipline::find($id);
        return view('admin.disciplines.edit', compact('discipline'));
    }

    public function update(DisciplineRequest $request, $id)
    {
        Discipline::find($id)->update([
        	'title' => $request->input('title')
		]);
        return redirect()->route('account.disciplines.index');
    }


    public function destroy($id)
    {
        Discipline::find($id)->delete();
		return redirect()->route('account.disciplines.index');
    }

    public function getListDisciplines(Request $request){
    	$result = Discipline::orderBy('created_at', 'DESC')->paginate(30);
    	return DiscipliesListResource::collection($result);
	}

	public function getListAllDisciplines(){
    	return Discipline::orderBy('created_at', 'DESC')->get();
	}

	public function search(Request $request){
    	$search = $request->input('search');
    	$result = Discipline::where('title', 'like', "%$search%")
								->orderBy('created_at', 'DESC')
								->paginate(5);
    	return DiscipliesListResource::collection($result);
	}
}
