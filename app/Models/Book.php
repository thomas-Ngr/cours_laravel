<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // avoid Eloquent using created_at and updated_at
    public $timestamps = false;

    use HasFactory;
    
}
