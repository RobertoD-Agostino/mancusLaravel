<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function submit(Request $request){
          $nome = $request->input('nome');  
          $email = $request->input('email');  
          $age = $request->input('age');  
          $allergie = $request->input('allergie');  
          $textArea = $request->input('textArea');  
          $primaImg = $request->input('primaImg');  
          $secondaImg = $request->input('secondaImg');  
          $budget = $request->input('budget');  
          $city = $request->input('city');  
          $appointment = $request->input('appointment');
        
          $contactEmail = new ContactMail($nome, $email, $age, $allergie, $textArea, $primaImg, $secondaImg, $budget, $city, $appointment);

          Mail::to('mancustattooemail@gmail.com')->send($contactEmail);  

        //   Mail::send([], [], function ($message) use ($email) {
        //     $message->from($email);
        // });

    }
}
