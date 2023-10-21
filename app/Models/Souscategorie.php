<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Souscategorie extends Model
{
    protected $table = 'sous_categorie';
    protected $fillable = [
        'id',
        'nom',
        'id_categorie',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_categorie', 'id');
    }
}