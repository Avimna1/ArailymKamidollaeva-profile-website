<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index(){
   $form = Form::all();

   return view('form.index')->with(['form' => $form]);
    }

    public function store(Request $request){
      
        Form::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'image' => $request->image
        ]);

        return "Upload Successfully";
    }
}
