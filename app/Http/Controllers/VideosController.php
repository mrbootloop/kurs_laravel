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

    /**
    *Jeden film
    */
    public function show($id)
    {
    	$video = video::find($id);
    	return view ('videos.show')->with ('video', $video);
    }
}
