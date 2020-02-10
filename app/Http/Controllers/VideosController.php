<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
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
    	$video = video::findOrFail($id);
    	return view ('videos.show')->with ('video', $video);
    }

    /**
    *Formularz dodawania filmu
    */
    public function create()
    {
    	return view('videos.create');
    }

    
    /**
    *Zapisanie filmu do bazy
    */

    public function store()
    {
        $input = Request::all();
        Video::create($input);
        return redirect('videos');
    }
}
