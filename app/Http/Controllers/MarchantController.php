<?php

namespace App\Http\Controllers;
use App\Models\Marchant;
use Illuminate\Http\Request;

class MarchantController extends Controller
{
    public function save(Request $request){

        $data = Marchant::create([

            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'district'=>$request->input('district'),
            'service'=>$request->input('service'),
            'message'=>$request->input('message'),

        ]);

           // Redirect to WhatsApp link
           return redirect()->route('send-whatsapp-marchant', ['id' => $data->id]);
    }

    
    public function sendWhatsapp($id){

        // Retrieve the form submission from the database
        $data = Marchant::find($id);

        if (!$data) {
          return redirect('/form')->with('error', 'No data found.');
      }
       // Create WhatsApp URL with the form data from the database
      $whatsappUrl = "https://api.whatsapp.com/send?phone=+26662296327&text=" . urlencode(
            
          "
           Become A marchant 
          \nName: {$data->name}
          \nEmail: {$data->email}
          \nPhone: {$data->phone}
          \nDistrict: {$data->district}
          \nBecome a marchant of: {$data->service}
          \nMessage: {$data->message}");

          return redirect($whatsappUrl);

  }
}
