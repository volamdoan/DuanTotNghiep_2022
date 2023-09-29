<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug',
        'sumary',
        'content',
        'date',
        'view',
        'thumnail_url',
        'status',
        'user_id',
        'category_id',
        'tags',
        'updated_at',
        'created_at'
    ];

    use HasFactory;
}
