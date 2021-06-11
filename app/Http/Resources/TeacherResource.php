<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
    	$teacher = $this->resource;
        return [
			'id' => $teacher->id,
			'created_at' => $teacher->created_at->timestamp,
			'name' => $teacher->name,
			'group' => count($teacher->groups) > 0 ? $teacher->groups[0]['title'] : '',
			'link' => route('account.teachers.edit', $teacher)
		];
    }
}
