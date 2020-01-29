<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {	
    	$header = 'To jest nagłówek strony kontakt';
    	$date = '26/01/2020';
    	$visited = 21058;
    	return view('pages.contact', compact('header', 'date','visited'));

    }
    public function about()
    {	
    	$header = 'To jest nagłówek strony O nas';
    	$date = '26/01/2020';
    	$vistied = 356;
       	return view('pages.about');

    }
}