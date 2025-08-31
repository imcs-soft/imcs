<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{

    public function myCertificates(Request $request){
        $certificates = $request->user()->certificates()->paginate(10);
        return view('my-certificates')->with('certificates', $certificates);
    }
}
