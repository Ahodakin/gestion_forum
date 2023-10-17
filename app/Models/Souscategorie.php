<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Souscategorie extends Model
{
    protected $table = 'sous_categorie';
    protected $fillable = [
        'id',
        'nom'
    ];
}