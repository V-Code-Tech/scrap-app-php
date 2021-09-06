<?php



// echo "<h1>Data from PLAY STORE</h1>";
// // PLAY STORE
// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL,"https://sheltered-shore-95555.herokuapp.com/play-store");
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS,
//             "url=https://play.google.com/store/apps/details?id=com.outfit7.herodash");

// // In real life you should use something like:
// // curl_setopt($ch, CURLOPT_POSTFIELDS, 
// //          http_build_query(array('postvar1' => 'value1')));

// // Receive server response ...
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $server_output = curl_exec($ch);
// $res = json_decode($server_output);
// echo $res->name;
// echo "<br>";
// echo "Rating ". $res->rating;
// echo "<br>";
// echo "<img src='$res->icon' >";
// echo "<br>";
// echo $res->description;
// curl_close ($ch);


// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


// echo "<h1>Data from APP STORE</h1>";
// // APP STORE
// $ch1 = curl_init();

// curl_setopt($ch1, CURLOPT_URL,"https://sheltered-shore-95555.herokuapp.com/app-store");
// curl_setopt($ch1, CURLOPT_POST, 1);
// curl_setopt($ch1, CURLOPT_POSTFIELDS,
//             "url=https://apps.apple.com/us/app/minecraft/id479516143");

// // In real life you should use something like:
// // curl_setopt($ch, CURLOPT_POSTFIELDS, 
// //          http_build_query(array('postvar1' => 'value1')));

// // Receive server response ...
// curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

// $server_output1 = curl_exec($ch1);
// // echo var_dump($server_output1);
// $res1 = json_decode($server_output1);
// // echo $res1;
// echo "<h1>$res1->name</h1>";
// echo "<br>";
// echo "Rating ". $res1->rating;
// echo "<br>";
// echo "<img src='$res1->icon' >";
// echo "<br>";
// echo $res1->description;
// curl_close ($ch1);


// Play Store
include('simple_html_dom.php');

$target1 = "https://play.google.com/store/apps/details?id=com.outfit7.herodash";
$html1 = new simple_html_dom();
$html1->load_file($target1);

echo "<h1>PLAY STORE</h1>";
echo "<br>";
echo "Name : " . $html1->find('h1.AHFaub',0)->plaintext;
echo "<br>";
echo "Rating :" . $html1->find('div.BHMmbe',0)->plaintext;
echo "<br>";
echo $html1->find('div.xSyT2c',0);
echo "<br>";
echo "<h1>Description</h1>";
echo $html1->find('div.JHTxhe.IQ1z0d',0)->plaintext;


// APP STORE
$target2 = "https://apps.apple.com/us/app/minecraft/id479516143";
$html2 = new simple_html_dom();
$html2->load_file($target2);
echo "<br>";
echo "<h1>APP STORE</h1>";
echo "<br>";
// product-header__title app-header__title
// 
foreach($html2->find('h1') as $value)
{
    foreach($value->find('span') as $e)
    {
        $e->outertext = '';
    }

    echo "Name : " . $value->innertext;
}
// echo $html1->find('title',0)->plaintext;
echo "<br>";
echo "Rating : " .$html2->find('span.we-customer-ratings__averages__display',0);
echo "<br>";
$realpicturl = $html2->find('source.we-artwork__source',0)->srcset;
$geturlpict = explode(" 1x",$realpicturl)[0];
echo "<img src='$geturlpict' >";
echo "<br>";
echo "<br>";
echo "<br>";
echo $html2->find('div.section__description',0);
// echo $html1->find('div.xSyT2c',0);
// echo "<br>";
// echo $html1->find('div.BHMmbe',0)->plaintext;
// echo "<br>";
// echo $html1->find('div.JHTxhe.IQ1z0d',0)->plaintext;







?>