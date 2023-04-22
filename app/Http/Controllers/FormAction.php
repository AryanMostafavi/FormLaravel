<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormAction extends Controller
{
    public function StoreForm (Request $request){
        // $form = new
        $form->name = $request->name;
        $form->fatherName = $request->fatherName;
        $form-> passportNumber= $request->passportNumber;
        
        $form-> = $request->name;
        $form->name = $request->name;
    }
}
