<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\PersonalDataService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalDataController extends Controller
{
    public function index(){
		$user = Auth::user();
    	return view('personal-data', compact('user'));
	}

	public function changeName(Request $request){
    	(new PersonalDataService())->changeName($request);
	}

	public function changeEmail(Request $request){
		(new PersonalDataService())->changeEmail($request);
	}

	public function changePassword(Request $request){
		(new PersonalDataService())->changePassword($request);
	}
}
