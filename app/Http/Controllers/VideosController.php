<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
    /**
    *Pobieramy liste filmow
    */
    public function index()
    {
    	$videos = video::latest()->get();
    	return view ('videos.index')->with ('videos', $videos);
    }
}
