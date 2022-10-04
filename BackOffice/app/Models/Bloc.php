<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloc extends Model
{
    protected $table = 'bloc';
    protected $primaryKey = 'id';
    protected $fillable = ['Title', 'Description', 'Picture'];}
