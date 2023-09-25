<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajouter extends Model
{
    protected $table = "users_sous_categorie";
    
    protected $fillable = [
        'nom',
    ];

}
