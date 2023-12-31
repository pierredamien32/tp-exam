<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Option;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{

    public function info(){
        return view('infoDEC');
    }

    public function menu(){
        return view('menuDEC');
    }
    public function index(){
        $options = Option::all();
        return view('inscriptionDEC', compact('options'));
    }

    public function store(Request $request){
        // dd($request->all());
        $reponse=$request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'option' => 'required'
        ]);

        $etudiant= new Etudiant;

        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->datnaiss = $request->datnaiss;
        $etudiant->ville = $request->ville;
        $etudiant->sexe = $request->sexe;
        $etudiant->option_id = $request->option;

        $etudiant->save();
        return 'Enregistrement effectué avec succès';
    }

    public function recherche(Request $request){

        // $reponse=$request->validate([
        //     'search' => 'required'
        // ]);

        $options = Option::all();
        $search = $request->search;
        $etudiants = Etudiant::query()
                ->where('option_id', 'LIKE', '%' . $search . '%')
                ->get();
        // dd('Ok '.$etudiants);
        return view('rechercheDEC', compact('options','etudiants'));
    }
}
