<?php

use App\Mail\MailRequest;
use Illuminate\Support\Facades\Mail;

function sendEmail($to,$ref_com,$fullName,$ville,$email,$contact,$photo,$prix,$desc,$nom_prod,$qty){
    $mailData = [
        'ref_com' => $ref_com,
        'fullName' => $fullName,
        'ville' => $ville,
        'email' => $email,
        'contact' => $contact,
        'photo' => $photo,
        'prix' => $prix,
        'desc' => $desc,
        'qty' => $qty,
        'nom_prod' => $nom_prod,
        'logo' => env('APP_URL')."/assets/img/logo.png",
        'url_prod' => env('APP_URL')."/assets/img/produits",
        'app_url' => env('APP_URL'),
    ];
    $email = Mail::to($to)->send(new MailRequest($mailData));
    return $email;
}
