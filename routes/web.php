<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/register', function(){
	return redirect('/');
});

Route::middleware(['auth'])->group(function(){
	Route::group(['prefix' => 'account', 'as' => 'account.'], function(){
		Route::get('/', [\App\Http\Controllers\PersonalDataController::class, 'index'])->name('index');
		Route::group(['prefix' => 'personal', 'as' => 'personal.'], function(){
			Route::post('/change-name', [\App\Http\Controllers\PersonalDataController::class, 'changeName'])->name('change-name');
			Route::post('/change-email', [\App\Http\Controllers\PersonalDataController::class, 'changeEmail'])->name('change-email');
			Route::post('/change-password', [\App\Http\Controllers\PersonalDataController::class, 'changePassword'])->name('change-password');
		});

		Route::group(['prefix' => 'disciplines', 'as' => 'disciplines.'], function(){
			Route::get('/', [\App\Http\Controllers\Admin\DisciplinesController::class, 'index'])->name('index');
			Route::get('/create', [\App\Http\Controllers\Admin\DisciplinesController::class, 'create'])->name('create');
			Route::get('/edit/{discipline}', [\App\Http\Controllers\Admin\DisciplinesController::class, 'edit'])->name('edit');
			Route::post('/store', [\App\Http\Controllers\Admin\DisciplinesController::class, 'store'])->name('store');
			Route::post('/update/{discipline}', [\App\Http\Controllers\Admin\DisciplinesController::class, 'update'])->name('update');
			Route::post('/destroy/{discipline}', [\App\Http\Controllers\Admin\DisciplinesController::class, 'destroy'])->name('destroy');
			Route::post('/get-list-disciplines', [\App\Http\Controllers\Admin\DisciplinesController::class, 'getListDisciplines'])->name('get-list');
			Route::get('/get-list-disciplines-all', [\App\Http\Controllers\Admin\DisciplinesController::class, 'getListAllDisciplines'])->name('get-list-all');
			Route::post('/search', [\App\Http\Controllers\Admin\DisciplinesController::class, 'search'])->name('search');
		});

		Route::group(['prefix' => 'group-students', 'as' => 'group-students.'], function(){
			Route::get('/', [\App\Http\Controllers\Admin\GroupStudentsController::class, 'index'])->name('index');
			Route::get('/create', [\App\Http\Controllers\Admin\GroupStudentsController::class, 'create'])->name('create');
			Route::get('/edit/{group}', [\App\Http\Controllers\Admin\GroupStudentsController::class, 'edit'])->name('edit');
			Route::post('/store', [\App\Http\Controllers\Admin\GroupStudentsController::class, 'store'])->name('store');
			Route::post('/update/{group}', [\App\Http\Controllers\Admin\GroupStudentsController::class, 'update'])->name('update');
			Route::post('/destroy/{group}', [\App\Http\Controllers\Admin\GroupStudentsController::class, 'destroy'])->name('destroy');
			Route::post('/get-list-group-students', [\App\Http\Controllers\Admin\GroupStudentsController::class, 'getListGroupStudents'])->name('get-list');
			Route::get('/get-list-all-group-students', [\App\Http\Controllers\Admin\GroupStudentsController::class, 'getAllGroups'])->name('get-list-all');
			Route::post('/search', [\App\Http\Controllers\Admin\GroupStudentsController::class, 'search'])->name('search');
		});

		Route::group(['prefix' => 'banners', 'as' => 'banners.'], function(){
			Route::get('/', [\App\Http\Controllers\Admin\BannersController::class, 'index'])->name('index');
			Route::get('/create', [\App\Http\Controllers\Admin\BannersController::class, 'create'])->name('create');
			Route::get('/edit/{banner}', [\App\Http\Controllers\Admin\BannersController::class, 'edit'])->name('edit');
			Route::post('/store', [\App\Http\Controllers\Admin\BannersController::class, 'store'])->name('store');
			Route::post('/update/{banner}', [\App\Http\Controllers\Admin\BannersController::class, 'update'])->name('update');
			Route::post('/destroy/{banner}', [\App\Http\Controllers\Admin\BannersController::class, 'destroy'])->name('destroy');
		});

		Route::group(['prefix' => 'students', 'as' => 'students.'], function(){
			Route::get('/', [\App\Http\Controllers\Admin\StudentsController::class, 'index'])->name('index');
			Route::get('/create', [\App\Http\Controllers\Admin\StudentsController::class, 'create'])->name('create');
			Route::get('/edit/{student}', [\App\Http\Controllers\Admin\StudentsController::class, 'edit'])->name('edit');
			Route::post('/store', [\App\Http\Controllers\Admin\StudentsController::class, 'store'])->name('store');
			Route::post('/update/{student}', [\App\Http\Controllers\Admin\StudentsController::class, 'update'])->name('update');
			Route::post('/destroy/{student}', [\App\Http\Controllers\Admin\StudentsController::class, 'destroy'])->name('destroy');
			Route::post('/get-list-students', [\App\Http\Controllers\Admin\StudentsController::class, 'getListStudents'])->name('get-list');
			Route::post('/search', [\App\Http\Controllers\Admin\StudentsController::class, 'search'])->name('search');
		});

		Route::group(['prefix' => 'teachers', 'as' => 'teachers.'], function(){
			Route::get('/', [\App\Http\Controllers\Admin\TeachersController::class, 'index'])->name('index');
			Route::get('/create', [\App\Http\Controllers\Admin\TeachersController::class, 'create'])->name('create');
			Route::get('/edit/{teacher}', [\App\Http\Controllers\Admin\TeachersController::class, 'edit'])->name('edit');
			Route::post('/store', [\App\Http\Controllers\Admin\TeachersController::class, 'store'])->name('store');
			Route::post('/update/{teacher}', [\App\Http\Controllers\Admin\TeachersController::class, 'update'])->name('update');
			Route::post('/destroy/{teacher}', [\App\Http\Controllers\Admin\TeachersController::class, 'destroy'])->name('destroy');
			Route::post('/get-list-teachers', [\App\Http\Controllers\Admin\TeachersController::class, 'getListTeachers'])->name('get-list');
			Route::post('/search', [\App\Http\Controllers\Admin\TeachersController::class, 'search'])->name('search');
		});

	});
});

Route::get('test', function(){
	dd(\Illuminate\Support\Facades\Hash::make('qweqweqwe'));
});
Route::get('/exit', function(){
	\Illuminate\Support\Facades\Auth::logout();
	return redirect()->route('index');
})->name('exit');

//Route::get('/test', function(){
//	$user = \App\Models\User::find(1);
//	$discipline = \App\Models\Discipline::find(1);
//	$group = \App\Models\GroupStudent::find(1);
//
//	$userAdmin = \App\Models\User::find(2);
//	//$user->disciplines()->attach(1);
//	//$user->groups()->attach($group);
//
//	$userGroup = $user->groups[0];
//	$test = $discipline->users()->where('role','=', \App\Models\User::ROLE_TEACHER)->get();
//	$showTeacher = null;
//	foreach($test as $teacher){
//		if(!is_null($teacher->groups()->where('title', '=', $userGroup->title)->first())){
//			$showTeacher = $teacher->name;
//			break;
//		}
//	}
//	dd($showTeacher);
//
//})->middleware(['auth']);
