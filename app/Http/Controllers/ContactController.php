<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function save(Request $request){
        // saving to the database
        $data = Contact:: create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'subject'=>$request->input('subject'),
            'message'=>$request->input('message'),
        ]);

             // Redirect to WhatsApp link
             return redirect()->route('send-whatsapp-contact', ['id' => $data->id]);
    }

    public function sendWhatsapp($id){

        // Retrieve the form submission from the database
        $data = Contact::find($id);

        if (!$data) {
          return redirect('/form')->with('error', 'No data found.');
      }
       // Create WhatsApp URL with the form data from the database
      $whatsappUrl = "https://api.whatsapp.com/send?phone=+26662296327&text=" . urlencode(
          "
          LIPOTSO
          \nName: {$data->name}
          \nEmail: {$data->email}
          \nPhone: {$data->phone}
          \nSubject: {$data->subject}
          \nMessage is: {$data->message}");

          return redirect($whatsappUrl);

  }
}
