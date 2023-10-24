<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_sous_categorie extends Model
{
    protected $table = 'users_sous_categorie';
    protected $fillable = [
        'id',
        'id_users',
        'id_sous_categorie',
    ];

    public function souscategorie() {
        return $this->belongsTo(Souscategorie::class, 'id_sous_categorie', 'id');
    }


}