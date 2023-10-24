<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    protected $table = "questions";

    protected $fillable = [
        'id',
        'title',
        'content',
        'id_users',
        'id_sous_categorie',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // Dans le modèle Question
    public function souscategorie()
    {
        return $this->belongsTo(Souscategorie::class, 'id_sous_categorie', 'id');
    }


}