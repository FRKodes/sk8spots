<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spot;
use App\Http\Requests;
use Mail;

class PagesController extends Controller
{
	public function index()
	{   
		$lastOnes = Spot::where('status', '=', 1)->orderBy('id', 'desc')->take(6)->get();
		return view('pages.index', compact('lastOnes'));
	}

	public function acercade()
	{
		return view('pages.acerca-de');
	}
	
	public function contacto()
	{
		return view('pages.contacto');
	}

	public function sendContactMail()
	{
		Mail::send('emails.contact-email', [], function ($message){
			$message->to('sk8spotsmx@gmail.com')->subject('SK8SPOTSMX Contact');
		});

		return ';)';
	}
	
}
