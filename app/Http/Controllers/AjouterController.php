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
            'id_sous'=>'required',
        ]);

        $insert= new Users_sous_categorie ();
        $insert-> id_users=Auth::id();
        $insert-> id_sous_categorie=$request->id_sous;
        $insert->save();
        return view('home.publish');
    }

    public function publish_post( Request $request){

        $id_user = Auth::id();
        $data=$request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $sous_cat = Users_sous_categorie::where('id_users',$id_user)->get();
        $publish= new Question ();
        $publish-> title=$request->title;
        $publish-> content=$request->content;
        $publish-> id_users=$id_user;
        $publish-> id_sous_categorie=$sous_cat->last()->id;
        $publish->save();

         return redirect('liste')->with('status', 'Question publié.');

        // return to_route('publish');
    }


}