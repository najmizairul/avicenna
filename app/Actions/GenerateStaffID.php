<?php

namespace App\Actions;

use Illuminate\Support\Str;

class GenerateStaffID
{
    public static function run(): string
    {
        return 'STA-' .Str::of(Str::random(3) . '-')->upper() . rand(10, 99);
    }
}
