<?php

namespace App\Models;

use Database\Factories\CertificateFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certificate extends Model
{

    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function newFactory(): CertificateFactory|Factory
    {
        return CertificateFactory::new();
    }
}
