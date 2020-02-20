<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Http\Requests\CreateVideoRequest;

class VideosController extends Controller
{
    /**
    *Download video list
    */
    public function index()
    {
    	$videos = video::latest()->get();
    	return view ('videos.index')->with ('videos', $videos);
    }

    /**
    *One video
    */
    public function show($id)
    {
    	$video = video::findOrFail($id);
    	return view ('videos.show')->with ('video', $video);
    }

    /**
    *Add video form
    */
    public function create()
    {
    	return view('videos.create');
    }

    
    /**
    *Saving video in database
    */

    public function store(CreateVideoRequest $request)
    {
        Video::create($request->all());
        return redirect('videos');
    }
}
