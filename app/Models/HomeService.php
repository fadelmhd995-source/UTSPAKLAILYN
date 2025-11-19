<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeService extends Model
{
    use HasFactory;

    protected $table = 'homeservice';
    
    protected $fillable = [
        'service_name',
        'description',
        'price',
        'duration',
        'category',
        'is_available'
    ];

    protected $casts = [
        'is_available' => 'boolean',
        'price' => 'decimal:2'
    ];
}