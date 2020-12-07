<?php

$uri = explode('/', $_SERVER['REQUEST_URI']);

if(!empty($uri[1])){
    if($uri[1] == "news"){
        if(!empty($uri[2])){
            $teststring = "Dunia tidak bersatu lagi";
            $requeststring = str_replace('-', ' ', $uri[2]);
            if($teststring == $requeststring){
                echo 'Dunia tidak bersatu lagi';
            }else{
                echo 'berita tidak ditemukan';
            }
        }else{
            echo 'all news';
        }
    }else{
        echo 'notfound page';
    }
}else{
    echo 'home';
}

?>
