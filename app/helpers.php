<?php 

if (! function_exists('upload')) {


	function upload($path, $file) 
	{

	    $filename = basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension());
	    $filename_counter = 1;

	    while (Storage::disk('public')->exists($path.$filename.'.'.$file->getClientOriginalExtension())) {

	       $filename = basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension()).(string) ($filename_counter++);
	    }

	   $fullPath = $path.$filename.'.'.$file->getClientOriginalExtension();

	   Storage::disk('public')->put($fullPath, file_get_contents($file), 'public');

	   return $fullPath;
	}
}
