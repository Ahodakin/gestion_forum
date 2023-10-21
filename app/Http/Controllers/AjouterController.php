<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Souscategorie;
use App\Models\Users_sous_categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjouterController extends Controller
{
    public function ajouter_get(Request $request)
    {
        $request->validate([
            'nom_sous_categorie'=>'required',
        ]);

        $insert= new Users_sous_categorie ();
        $insert-> id_users=Auth::id();
        $insert-> id_sous_categorie = $request->nom_sous_categorie;
        $insert->save();
        return view('home.publish');
    }

    public function publish_post( Request $request){

        $id_user = Auth::id();
        $data=$request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        // $sous_cat = Users_sous_categorie::where('id_users',$id_user)->get();
        $publish= new Question ();
        $publish-> title=$request->title;
        $publish-> content=$request->content;
        $publish-> id_users=Auth::id();
        $publish->nom_sous_categorie = $request->nom_sous_categorie;
        $publish->save();

         return redirect('liste')->with('status', 'Question publié.');

        // return to_route('publish');
    }


}