<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy; 
use App\Models\sms;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\New_;

class ContactController extends Controller
{
    // définition de la methode create
    public function create()
    {
        return view('contacts.create');
    }

    // définition de la methode store
    public function store(ContactRequest $request)
    {
        // pause de 03 secondes
        sleep(3);
        // enregistrement d'un sms
        $sms = sms::create($request->only('nom','prenom','email','sms'));
        // récupération des données passées en paramètres
        //$sms->nom = $request->nom;
        //$sms->prenom = $request->prenom;
        //$sms->email = $request->email;
        //$sms->sms = $request->sms;
        // sauvegarde du sms
        //$sms->save();
        // on passe une instance du message
        //$mailable = new ContactMessageCreated($sms);

        // envoie du mail
        Mail::to(config('ecmts.admin_support_email'))
              ->queue(new ContactMessageCreated($sms));
        // Message de reception
        flashy('Nous vous repondrons dans les plus brefs délais');
        return redirect()->route('root_path');
    }
}
