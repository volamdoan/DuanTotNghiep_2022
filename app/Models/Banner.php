<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'image_l',
        'image_n',
        'image_t',
        'updated_at',
        'created_at'
    ];
    use HasFactory;
}
