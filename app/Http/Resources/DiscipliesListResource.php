<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscipliesListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
		$discipline = $this->resource;
		return [
			'id' => $discipline->id,
			'created_at' => $discipline->created_at->timestamp,
			'title' => $discipline->title,
			'link' => route('account.disciplines.edit', $discipline)
		];
    }
}
