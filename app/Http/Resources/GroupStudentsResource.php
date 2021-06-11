<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroupStudentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
		$group = $this->resource;
		return [
			'id' => $group->id,
			'created_at' => $group->created_at->timestamp,
			'title' => $group->title,
			'link' => route('account.group-students.edit', $group)
		];
    }
}
