<?php
namespace App\Traits;

trait imagefileTrait {

	public function getImage($name)
	{
		    if(isset($name))
		    {
            $file = $name;
            $fileName = time().$file->getClientOriginalName();
            $destinationPath = public_path('uploads/about');
            $file->move($destinationPath,$fileName);
           
            return $fileName;
			}

	}

	public function getPdf($name)
	{
		if(isset($name)){
            $file = $name;
            $fileName1 = time().$file->getClientOriginalName();
            $destinationPath = public_path('uploads/about');
            $file->move($destinationPath,$fileName1);
            return $fileName1;
        }
	}

}
