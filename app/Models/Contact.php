<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'FIO',
        'company',
        'phone',
        'email',
        'birthDate',
        'img',
    ];

    protected function phone(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => '+' . $value,
        );
    }

    protected function img(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value !== null ? 'http://127.0.0.1:8000/storage' . $value : null,
        );
    }
}
