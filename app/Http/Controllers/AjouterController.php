<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Souscategorie;
use App\Models\Users_sous_categorie;
use Illuminate\Support\Facades\Auth;

class AjouterController extends Controller
{
    // public function ajouter_get(Request $request)
    // {
    //     $request->validate([
    //         'nom_sous_categorie'=>'required',
    //     ]);

    //     $insert= new Users_sous_categorie ();
    //     $insert-> id_users=Auth::id();
    //     $insert-> id_sous_categorie = $request->id_sous_categorie;
    //     $insert->save();
    //     return view('home.publish');
    // }

    public function publish_post( Request $request){

        $id_user = Auth::id();
        $data=$request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $publish= new Question ();
        $publish-> title=$request->title;
        $publish-> content=$request->content;
        $publish->id_users = $id_user;

        $sous_categorie_id = $request->id_sous_categorie;
        $publish->id_sous_categorie = $sous_categorie_id;
        $publish->save();

        // Récupérez la question avec les informations de la sous-catégorie associée
        $question = Question::with('Souscategorie')->find($publish->id);

        // Accédez au nom de la sous-catégorie
        $nom_sous_categorie = $question->Souscategorie->nom;

        // Insérez l'ID de l'utilisateur et de la sous-catégorie dans la table users_sous_categorie
        $usersSousCategorie = new Users_sous_categorie();
        $usersSousCategorie->id_users = $id_user;
        $usersSousCategorie->id_sous_categorie = $sous_categorie_id;
        $usersSousCategorie->save();

         return redirect('liste')->with('status', 'Question publié.');

        // return to_route('publish');
    }

    public function edit( Question $question ){
        $categorie = Categorie::all();
        $souscategorie = Souscategorie::all() ;
        return view('home.edit', [
            'question'=> $question,
            'categorie'=> $categorie,
            'souscategorie'=> $souscategorie,
        ]);
    }

    public function update(Request $request, Question $question)
    {
        $data = $request->validate([
            'id_categorie' => 'required',
            'id_sous_categorie' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        $ancienneIdSousCategorie = $question->id_sous_categorie;
        $nouvelleIdSousCategorie = $request->input('id_sous_categorie');

        $question->update($data);

        // Mettez à jour l'ID de sous-catégorie dans la table users_sous_categorie
        Users_sous_categorie::where('id_sous_categorie', $ancienneIdSousCategorie)
            ->update(['id_sous_categorie' => $nouvelleIdSousCategorie]);

        return redirect()->route('liste')->with('success', 'Question modifiée avec succès');
    }

    // public function supprimer(Question $question){
    //     return view('home.supprimer',[
    //         'question'=> $question,
    //     ]);
    // }

    public function destroy(Request $request,  Question $question){
        $question->delete();
        // Récupérez les IDs de l'utilisateur et de la sous-catégorie associés à la question
        $userId = $request->input('id_users');
        $sousCategorieId = $request->input('id_sous_categorie');

        Users_sous_categorie::where('id_users', $userId)
        ->where('id_sous_categorie', $sousCategorieId)
        ->delete();

        return to_route('liste')->with('success', 'Question supprimer avec success');
    }
}
