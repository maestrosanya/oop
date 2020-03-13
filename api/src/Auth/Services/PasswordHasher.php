<?php

declare(strict_types=1);

namespace App\Auth\Services;


interface PasswordHasher
{
    public function hash() : string;
}