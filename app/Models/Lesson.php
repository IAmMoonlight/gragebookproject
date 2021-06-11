<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lesson extends Model
{
    use HasFactory;

    public const TYPES = [
    	'lesson' => 'lesson',
		'laboratory work' => 'laboratory work'
	];

    public function discipline(): BelongsTo {
    	return $this->belongsTo(Discipline::class);
	}

	public function students(): BelongsToMany {
    	return $this->belongsToMany(User::class, 'student_to_lesson');
	}
}
