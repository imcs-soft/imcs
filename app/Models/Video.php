<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{

    protected $fillable = [
        'title',
        'description',
        'video_url',
        'module_id',
        'position',
    ];

    public function module(): BelongsTo {
        return $this->belongsTo(Module::class);
    }
}
