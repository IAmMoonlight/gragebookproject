<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
		$student = $this->resource;
		return [
			'id' => $student->id,
			'created_at' => $student->created_at->timestamp,
			'name' => $student->name,
			'group' => count($student->groups) > 0 ? $student->groups[0]['title'] : '',
			'link' => route('account.students.edit', $student)
		];
    }
}
