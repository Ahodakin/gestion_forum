<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Souscategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjouterController extends Controller
{
    public function ajouter()
    {
        // dd(Auth::user());
        $cat = Categorie::all();
        $souscat = souscategorie::all();
        return view('home.ajouter', compact('cat','souscat' ));
    }

    public function ajouter_get(Request $request)
    {

        return view('home.publish');
    }


}
