<?php

function UploadeFiles($image_key,$folder,$size1,$size2){
    $filename1    = date('Y-m-d').'_'.$image_key->getClientOriginalName();

    $image_resize = \Image::make($image_key->getRealPath());
    $image_resize->resize($size1, $size2,function ($constraint){
        //$constraint->aspectRatio();
    })->save($folder.'/'.$filename1);
    return $filename1;
}
