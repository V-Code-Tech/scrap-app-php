<?php



echo "<h1>Data from PLAY STORE</h1>";
// PLAY STORE
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://localhost:5000/play-store");
// curl_setopt($ch, CURLOPT_URL,"https://sheltered-shore-95555.herokuapp.com/play-store");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "url=https://play.google.com/store/apps/details?id=com.outfit7.herodash");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
$res = json_decode($server_output);
echo $res->name;
echo "<br>";
echo "Rating ". $res->rating;
echo "<br>";
echo "<img src='$res->icon' >";
echo "<br>";
echo $res->description;
curl_close ($ch);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo "<h1>Data from APP STORE</h1>";
// APP STORE
$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_URL,"http://localhost:5000/app-store");
// curl_setopt($ch1, CURLOPT_URL,"https://sheltered-shore-95555.herokuapp.com/app-store");
curl_setopt($ch1, CURLOPT_POST, 1);
curl_setopt($ch1, CURLOPT_POSTFIELDS,
            "url=https://apps.apple.com/us/app/pou/id575154654");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

$server_output1 = curl_exec($ch1);
// echo var_dump($server_output1);
$res1 = json_decode($server_output1);
// echo $res1;
echo "<h1>$res1->name</h1>";
echo "<br>";
echo "Rating ". $res1->rating;
echo "<br>";
echo "<img src='$res1->icon' >";
echo "<br>";
echo $res1->description;
curl_close ($ch1);



// $html=file_get_html("https://play.google.com/store/apps/details?id=com.outfit7.herodash");
// // $e =$htmls->find('p');
// $links = array();
// foreach($html->find('a') as $a) {
//  $links[] = $a->href;
// }
// print_r($links);


?>