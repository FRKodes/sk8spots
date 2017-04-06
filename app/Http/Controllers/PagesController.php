<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spot;
use App\Http\Requests;

class PagesController extends Controller
{
	public function index()
	{   
        $lastOnes = Spot::where('status', '=', 1)->orderBy('id')->take(10)->get();
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
        return 'ok';
    }
    
}
