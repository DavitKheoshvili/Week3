<?php


function img_download($name, $url) {
    $name = 'dodo.png';
    $url = 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png';
    if($name && $url){
        define('DIRECTORY', 'downloads/');

        $content = file_get_contents($url);
        file_put_contents(DIRECTORY . '/'. $name, $content);
        return true;
    }
    return false;   
}

