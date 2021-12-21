<?php
    $cityname ="";
    $cloud = "";
    $today = "";
    $temp = "";
    $wind = "";
    $humidity = "";
    $location = "Dhaka";
    $url1 ="https://api.openweathermap.org/data/2.5/forecast?q=" . $location. "&units=metric&appid=8f9df4fbc8c56c32e6d5fd8db0b90c83";
    $contents1 = file_get_contents($url1);
    $clima1 = json_decode($contents1);
    $list = $clima1->list;
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $location = $_POST['location'];
    $url = "https://api.openweathermap.org/data/2.5/weather?q=" . $location. "&units=metric&appid=8f9df4fbc8c56c32e6d5fd8db0b90c83";
    $url1 ="https://api.openweathermap.org/data/2.5/forecast?q=" . $location. "&units=metric&appid=8f9df4fbc8c56c32e6d5fd8db0b90c83";
    $contents = file_get_contents($url);
    $contents1 = file_get_contents($url1);
    $clima = json_decode($contents);
    $clima1 = json_decode($contents1);
    $list = $clima1->list;
    $cityname = $clima->name;
    $cloud = $clima-> weather[0] ->description;
    $today = date(" F j, Y");
    
    
    $temp = $clima->main->temp;
    $wind = $clima->wind->speed;
    $humidity = $clima->main->humidity;
    
}
?>