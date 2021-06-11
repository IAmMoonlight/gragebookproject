<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
    	'disk',
		'path',
		'original_name',
		'mimetype',
		'extension',
		'size',
		'url',
		'tag'
	];

    public function attachable(): MorphTo {
    	return $this->morphTo();
	}
}
