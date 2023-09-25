<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}