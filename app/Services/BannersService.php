<?php

namespace App\Services;

use App\Http\Requests\BannersRequest;
use App\Models\Attachment;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannersService
{
	public function store(BannersRequest $request){
//		$request->validate([
//			'file' => function ($attribute, $value, $fail) {
//				$fail( $value);
////				if () {
////					$fail('Символьный код проекта должен быть уникален');
////				}
//			},
//		]);

		$banner = Banner::create($request->all());

		if(!is_null($request->file('file'))){
			(new AttachmentService())->createAttachment($request, $banner, Banner::TAG_BANNER);
		}
	}

	public function update(BannersRequest $request, int $id){
		$banner = Banner::find($id);

		Banner::find($id)->update($request->all());
		if(!is_null($request->file('file'))){
			if(!is_null($banner->attachment)){
				(new AttachmentService())->removeAttachment($banner);
			}
			(new AttachmentService())->createAttachment($request, $banner, Banner::TAG_BANNER);
		}
	}
	public function remove(int $id){
		$banner = Banner::find($id);
		if(!is_null($banner->attachment)){
			(new AttachmentService())->removeAttachment($banner);
		}
		$banner->delete();
	}
}