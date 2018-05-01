<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Storage, Auth;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
    	return view('images.create');
    }

    public function store(Request $request)
    {
    	$image = new Image;
    	$image->user_id = Auth::user()->id;
    	$image->image = upload('images/', $request->image);
    	$image->save();

    	return redirect()->route('home');
    }	
}
