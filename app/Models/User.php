<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public const ROLE_STUDENT = 'student';
    public const ROLE_TEACHER = 'teacher';
    public const ROLE_ADMIN = 'admin';

    public const FORM_CREDIT = 'Зачет';
    public const FORM_DIF_CREDIT = 'Дифференциальный зачет';
    public const FORM_EXAM = 'Экзамен';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
		'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lessons(): BelongsToMany {
    	return $this->belongsToMany(Lesson::class, 'student_to_lesson');
	}

	public function disciplines(): BelongsToMany {
    	return $this->belongsToMany(Discipline::class, 'discipline_user')
					->withPivot('has_course_work', 'attestations', 'control_form');
	}

	public function groups(): BelongsToMany {
    	return $this->belongsToMany(GroupStudent::class, 'group_to_user');
	}

	public function attachment(): MorphOne {
    	return $this->morphOne(Attachment::class, 'attachable');
	}
}
