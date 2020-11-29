<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    use HasFactory;
    protected $fillable = [
        'sign',
        'description',
    ];
    
    /**
     * Get the posts for the blog category.
     */
   
}

