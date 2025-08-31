<?php

namespace App\Enums;

use App\Filament\Resources\UserResource;

use function Livewire\Volt\on;
use function Pest\Laravel\getJson;

enum CourseModality: string
{
    case ONLINE = "online";

    case PRESENCIAL = "presencial";
}
