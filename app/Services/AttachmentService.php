<?php

namespace App\Services;

use App\Models\Attachment;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class AttachmentService
{
	public function createAttachment($request, $model, $tag){
		$requestFile = $request->file('file');
		$path        = Storage::putFile('uploads', $requestFile);
		$attachment = Attachment::create([
			'path'      => $path,
			'original_name' => '',
			'size'      => $requestFile->getSize(),
			'extension' => $requestFile->extension(),
			'disk'      => config('filesystems.default'),
			'mimetype'  => $requestFile->getMimeType(),
			'url'       => Storage::url($path),
			'tag'       => $tag,
		]);

		$attachment->attachable()->associate($model)->save();
	}

	public function removeAttachment($model){
		Storage::delete($model->attachment->path);
		$model->attachment->delete();
	}
}