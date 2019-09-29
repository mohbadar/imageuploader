<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploaderController extends Controller
{
    //upload images

    public function upload(Request $request)
    {

    	// $this->validate($request, [
    	// 	'files' => 'required|image'
    	// ]);

    	// dd($request->file('files'));

         foreach($request->file('files') as $file)
         {
            if($file)
            {
                 $fileExtension = $file->getClientOriginalExtension();
                 $dbPath = "/files/".time().'.'.$fileExtension;
                 // $file->move(public_path("/files/"), $dbPath);
                 $file->store('/files/' . $dbPath); 
            }

         }
        
       return back()->with('successMsg', 'Thanks for your contribution.');
    }
}
