<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
    	'title'
	];

    public function lessons(): HasMany {
    	return $this->hasMany(Lesson::class);
	}

	public function users(): BelongsToMany {
    	return $this->belongsToMany(User::class, 'discipline_user');
	}
}
