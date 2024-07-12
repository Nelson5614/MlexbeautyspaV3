<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function save(Request $request){

        $apdata = Appointment::create([

            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'guests'=>$request->input('guests'),
            'date'=>$request->input('date'),
            'time'=>$request->input('time'),
            'message'=>$request->input('message'),
        ]); 

          // Redirect to WhatsApp link
          return redirect()->route('send-whatsapp-appointment', ['id' => $apdata->id]);
    }

    public function sendWhatsapp($id){

        // Retrieve the form submission from the database
        $apdata = Appointment::find($id);

        if (!$apdata) {
          return redirect('/form')->with('error', 'No data found.');
      }
       // Create WhatsApp URL with the form data from the database
      $whatsappUrl = "https://api.whatsapp.com/send?phone=+26662296327&text=" . urlencode(

          "Appointment Booking
          \nName: {$apdata->name}
          \nEmail: {$apdata->email}
          \nPhone: {$apdata->phone}
          \nNumber_of_guests: {$apdata->guests}
          \nDate: {$apdata->date}
          \nTime: {$apdata->time}
          \nService is: {$apdata->message}");

          return redirect($whatsappUrl);

  }
}
