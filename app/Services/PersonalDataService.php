<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PersonalDataService
{
	public function changeName(Request $request){
		$request->validate([
			'name' => 'required|string|min:2'
		]);

		User::find(Auth::user()->id)->update([
			'name' => $request->input('name')
		]);
	}

	public function changeEmail(Request $request){
		$request->validate([
			'email' => 'required|email'
		]);

		User::find(Auth::user()->id)->update([
			'email' => $request->input('email')
		]);
	}

	public function changePassword(Request $request){
		$request->validate([
			'password' => 'required|string|min:8'
		]);

		User::find(Auth::user()->id)->update([
			'password' => Hash::make($request->input('password'))
		]);
	}
}