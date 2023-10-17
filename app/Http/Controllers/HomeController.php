<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Models\Categorie;
use App\Models\Souscategorie;
use App\Models\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil(Request $request){
        // $recup= Question::all();
        // $recup= Question::orderBy('create_at', 'desc')->paginate(3);
        return view('home.index');
    }

    public function publish_question(){
        $categorie = Categorie::all();
        $souscategorie = souscategorie::all();
        return view('home.publish', compact('categorie','souscategorie' ));
    }
    public function liste()
    {
        $recup= Question::orderBy('id', 'desc')->get();
        $categorie = Categorie::all();
        $souscategorie = souscategorie::all();
        return view('home.liste', compact('categorie','souscategorie', 'recup' ));
    }
    public function categorie()
    {
        return view('home.categorie');
    }
    public function categorie_post(CategorieRequest $request)
    {
        $category = new Categorie();
        $category->nom= $request->nom;
        $category->save();
        return to_route('liste_categorie')->with('success', 'Catégorie enregristrée avec success');
    }
    public function sous_categorie()
    {
        $categorie = Categorie::all();
        return view('home.sous_categorie', compact('categorie'));
    }
    public function reponse()
    {
        return view('home.reponse');
    }
    public function liste_categorie()
    {
        $categorie = Categorie::orderBy('id', 'desc')->get();
        $souscategorie = souscategorie::orderBy('id', 'desc')->get();
        return view('home.liste_categorie', compact('categorie','souscategorie' ));
    }
}