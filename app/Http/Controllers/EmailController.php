<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\EmailRequest;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function submit(EmailRequest $request){
        $nome = $request->input('nome');  
        $email = $request->input('email');  
        $age = $request->input('age');  
        $allergie = $request->input('allergie');  
        $textArea = $request->input('textArea');     
        $budget = $request->input('budget');  
        $city = $request->input('city');  
        $appointment = $request->input('appointment');
 
        $primaImg = $request->file('primaImg');  
        $secondaImg = $request->file('secondaImg');  
      

      $contactEmail = new ContactMail($nome, $email, $age, $allergie, $textArea, $primaImg, $secondaImg, $budget, $city, $appointment);

      // Mail::to('mancustattooemail@gmail.com')->send($contactEmail);

     Mail::to('mancustattooemail@gmail.com')->send($contactEmail->from($email, $nome));

       

      return redirect()->back()->with('message', 'L\'email è stata inviata correttamente!');
  }


}
