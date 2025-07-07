<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instructor extends Model
{

    protected $fillable = [
        'name',
        'photo_url'
    ];

    public function courses(): HasMany {
        return $this->hasMany(Course::class);
    }
}
