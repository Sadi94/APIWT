<?php

namespace App\Http\Controllers;

use PDF;
use Mail;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function invoiceMail()
    {
        $data["email"] = "isop667@gmail.com";
        $data["title"] = "From ISOPharma.com";
        $data["body"] = "Test mail";
  
        $pdf = PDF::loadView('emails.invoice', $data);
  
        Mail::send('emails.invoice', $data, function($message)use($data, $pdf) {
            $message->to($data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "invoice.pdf");
        });
  
        //dd('Mail sent successfully');
        return redirect("/");
    }
}