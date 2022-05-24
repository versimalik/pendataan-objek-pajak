<?php

function baseUrl($baseUrl=""){

    if (empty($baseUrl)) {
        if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }
        else{
            $protocol = 'http';
        }

    $URIexplode = explode('/', $_SERVER['REQUEST_URI']);
    $baseUrl =  $protocol . "://" . $_SERVER['HTTP_HOST'] . "/" .$URIexplode[1]."/";
    }
    
    return $baseUrl;
}

 ?>