<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Requests\DemandeRequest;
use App\Http\Service\MailAPi;

class DemandeController extends Controller
{
    public function create(DemandeRequest $request)  {

        

        
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $telephone = $request->input('telephone');
        $accord = $request->input('accord')=="1" ? true : false ;
        $enfant = $request->input('enfant') == "1" ? true : false;
        $bien = $request->input('bien') == "1" ? true : false;  
        $ville = $request->input('ville');
        $code = $request->input('code');

        $produit = Produit::findOrFail(1);

        //dd($produit->id);

        $demande = Demande::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'telephone' => $telephone,
            'accord' => $accord,
            'enfant' => $enfant,
            'bien' => $bien,
            'ville' => $ville,
            'code' => $code,
            'produit_id' => $produit->id,
        ]);


        $mail = new MailAPi();
        $mail->sendMail($email, sprintf("%s %s", $prenom, $nom), "Votre demande a été bien enregistrée");
        

        return view('client.devis', compact('demande'));

    }

    public function list(){
        $demandes = Demande::all();
        return view('demandes.list', compact('demandes'));
    }
}
