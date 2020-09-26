<?php


namespace App\Traits;

Trait BookTrait{
    function SaveFile($file,$folder){
        $file_extention = $file->getClientOriginalExtension();
        $file_name = time().'.'.$file_extention;
        //$path = 'images/offers';
        $path =$folder;
        $file->move($path,$file_name);
        return $file_name;
    }
}
