<?php

namespace App\Models;

use App\Traits\Attachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    use Attachable;

    public const TAG_BANNER = 'banner';

    protected $fillable = [
    	'title',
		'description',
		'link',
		'link_title'
	];
}
