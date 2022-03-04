<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendForm;
use App\Mail\SendFormOficina;

class FormController extends Controller
{
    public function sendMail(Request $request){

        Mail::to("universidadempresarial@socasesores.com")->send(new SendForm($request));
        return view('asesor-empresarial', ['confirm'=>true]);
    }

    public function sendMail2(Request $request){
        Mail::to("universidadempresarial@socasesores.com")->send(new SendFormOficina($request));
        return view('oficina-empresarial', ['confirm'=>true]);
    }
}
