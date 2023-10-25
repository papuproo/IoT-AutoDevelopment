<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class iotcontroller extends Controller
{
    public function form(){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        return 'Datos validados';
    }
}
