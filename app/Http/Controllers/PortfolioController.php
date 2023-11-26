<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function contactus(Request $request){

       $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:250',
        ];
    
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
    
        $this->validate($request, $rules, $customMessages);

        $data = $request->all();
        //print_r($data);
       
        return redirect('/contact')->with('success','We will contact you soon, thank you.');
    }
}
