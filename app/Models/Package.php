<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStates\HasStates;

class Package extends Model
{
    use HasFactory, HasStates;

    protected $casts = [
        'state' => PaymentState::class,
    ];

    protected $table = 'package';
    protected $fillable = ['name', 'description', 'price', 'duration'];
}
