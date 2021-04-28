<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'testi';
    protected $fillable = ['nama', 'picture', 'isi'];
}
