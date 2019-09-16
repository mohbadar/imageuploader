<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploaderController extends Controller
{
    //upload images

    public function upload(Request $request)
    {

    	$this->validate($request, [
    		'image' => 'required|image'
    	]);

    	// dd($request->file('image'));


    	$file = $request->file('image');
       
        $fileExtension = $file->getClientOriginalExtension();
        $dbPath = "/files/".substr($request->title,0,10).'_'.time().'.'.$fileExtension;
        $file->move(public_path("/files/"), $dbPath);
        

       return back()->with('successMsg', 'Thanks for your contribution.');
    }
}
