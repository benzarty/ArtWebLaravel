<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessoire extends Model
{ use HasFactory;
    protected $fillable = [

        'nom',
        'prix_sup',
        'image',
    ];
    public function velos()
    {
        return $this->belongsToMany(Velo::class);
    }

}
