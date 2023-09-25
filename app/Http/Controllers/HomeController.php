<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Souscategorie;
use App\Models\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil(Request $request){
        $recup= Question::all();
        return view('home.index', compact('recup'));
    }

    public function publish_question(){
        return view('home.publish');
    }
    public function ajouter()
    {
        $categorie = Categorie::all();
        $souscategorie = souscategorie::all();
        return view('home.ajouter', compact('categorie','souscategorie' ));
    }
}