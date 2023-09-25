<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Souscategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function accueil(Request $request){
        return view('home.index');
    }

    public function publish_question(){
        return view('home.publish');
    }
    public function publish_post(){
        return redirect()->route('index');
    }

}
