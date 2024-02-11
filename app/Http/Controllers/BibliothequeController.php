<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;
use App\Models\Auteur; 
use Illuminate\Support\Facades\Redirect;


class BibliothequeController extends Controller
{
    public function Rechercher($id_auteur = null) {
        if (empty($id_auteur)) {
            $livres = Livre::paginate(10);
        } else {
            $livres = Livre::where('id_auteur', $id_auteur)->paginate(10);
        }
        return view('Rechercher', compact('livres'));
    }
    public function editer(Livre $livre) {
        $auteurs = Auteur::all();
        return view('Editer', compact('livre', 'auteurs'));
    }
    public function Modifier(Request $request, Livre $livre) {
        // Afficher les données reçues depuis le formulaire
        dd($request->all());
    
        $request->validate([
            'at_pub' => ['required', 'integer', 'min:2001', 'max:'.date('Y')],
            'titre' => ['required', 'string', 'starts_with:t:']
        ]);
        
        event(new livreHistory($livre));
    
        $livre->update($request->all());
    
        return back()->with('success', 'Le livre a bien été modifié');
    }
    
}
