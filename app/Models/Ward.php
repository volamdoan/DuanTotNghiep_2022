<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'ward';
    protected $primaryKey = 'xaid';
    protected $fillable = [
        'name',
        'type',
        'maqh'
    ];
    use HasFactory;
}
