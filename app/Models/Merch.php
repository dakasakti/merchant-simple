<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'nama penulis',
        'kategori',
        'review'
    ];
}
