<?php
    $url = 'http://www.myapifilms.com/imdb/comingSoon?format=JSON&lang=en-us&date=';
    $url .=$_POST['action'];
    $json = @file_get_contents($url);
    echo $json;
    
?>