<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spot;
use App\Http\Requests;
use Vinkla\Instagram\Instagram;
use Mail;

class PagesController extends Controller
{
	public function index()
	{   
		$instagram = new Instagram(env('IG_TOKEN'));
		$posts = array_slice($instagram->get(), 0, 12);

		$lastOnes = Spot::where('status', '=', 1)->orderBy('id', 'desc')->take(12)->get();
		return view('pages.index', compact('lastOnes', 'posts'));
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

	public function php()
	{
		return phpinfo();
	}

	public function spots()
	{
		$lastOnes = Spot::where('status', '=', 1)->orderBy('id', 'desc')->take(12)->get();
		return view('pages.spots', compact('lastOnes'));
	}
	
}
