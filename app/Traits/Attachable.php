<?php


namespace App\Traits;


use App\Models\Attachment;
use Illuminate\Database\Eloquent\Relations\{MorphMany, MorphOne};

trait Attachable
{
    public function attachments(): MorphMany
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }

    public function attachment(): MorphOne
    {
        return $this->morphOne(Attachment::class, 'attachable');
    }
}
