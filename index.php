<?php

echo "<h1>Data from PLAY STORE</h1>";
// PLAY STORE
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://localhost:5000/play-store");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "url=https://play.google.com/store/apps/details?id=com.outfit7.herodash");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
echo $server_output;

curl_close ($ch);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo "<h1>Data from APP STORE</h1>";
// APP STORE
$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_URL,"http://localhost:5000/app-store");
curl_setopt($ch1, CURLOPT_POST, 1);
curl_setopt($ch1, CURLOPT_POSTFIELDS,
            "url=https://apps.apple.com/us/app/pou/id575154654");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

$server_output1 = curl_exec($ch1);
echo $server_output1;

curl_close ($ch1);

?>