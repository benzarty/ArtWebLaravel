<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Velo extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'marque',
        'description',
        'image',
        'couleur',
        'tarif',
    ];
}
