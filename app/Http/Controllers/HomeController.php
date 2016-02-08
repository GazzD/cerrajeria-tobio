<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Mail;


class HomeController extends Controller
{
    public function index() {
    	return view('home.index');
    }
    
    public function contact(Request $request){
    	
    	$this->validate($request, [
    			'contact_name' => 'required|alpha_dash|max:255',
    			'contact_email' => 'required|email',
    			'message' => 'required',
    			'g-recaptcha-response' => 'required|recaptcha',
    	]);
    	
    	$data['contact_name'] = $request->input('contact_name');
    	$data['contact_email'] = $request->input('contact_email');
    	$data['messages'] = (string)$request->input('message');
    	
    	Mail::send('emails.contact', $data, function ($m) {
            $m->from(env('MAIL_USERNAME'), 'Your Application');

            $m->to('bigtor.cardozo@gmail.com', 'Cerrajería Tobio')->subject('[Cerrajería Tobio] Contacto');
        });
    	
    	return redirect('/');
    }
}
