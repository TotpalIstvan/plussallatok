<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plussallat extends Model
{
    use HasFactory;
    protected $fillable = ['név'];

    protected $visible = ['név'];
}
