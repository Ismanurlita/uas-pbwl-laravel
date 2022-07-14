<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    protected $table = "harga";
    protected $fillable = ['nama', 'harga'];
    use HasFactory;
}
