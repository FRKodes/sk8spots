<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	public function index()
	{   
    	return view('pages.index');
	}

    public function acercade()
    {
    	return view('pages.acerca-de');
    }
    
    public function contacto()
    {
    	return view('pages.contacto');
    }
    
}
