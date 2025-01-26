<?php

namespace App\Http\Controllers;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send_edm_email(Request $request)
    {
        Mail::to($request->email)->send(new TestEmail());
        // return (new TestEmail($data))->render();
        toastr()->success('Email berhasil terkirim ke ' . $request->email);
        return redirect()->back();
    }
}
