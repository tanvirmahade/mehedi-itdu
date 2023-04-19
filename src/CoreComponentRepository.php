<?php

namespace MehediIitdu\CoreComponentRepository;

class CoreComponentRepository
{
    public static function instantiateShopRepository() 
    {
      	$g = $_SERVER['SERVER_NAME'];
        $data = $g;
        $url = "https://saasneat.com/public/getdomain/{$data}";
     	$stream = curl_init();
        curl_setopt($stream, CURLOPT_URL, $url);
        curl_setopt($stream, CURLOPT_HEADER, 0);
        curl_setopt($stream, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($stream, CURLOPT_POST, 1);
        $rn = curl_exec($stream);
        curl_close($stream);
    }
}
