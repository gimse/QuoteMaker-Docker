<?php
require "./vendor/autoload.php";
use masokky\QuoteMaker;
try{
  $text = "the cruelest crime is giving false hope without love";
  if (getenv("UNSPLASH_KEY") == true){
    (new QuoteMaker)
      ->setBackgroundFromUnsplash([getenv("UNSPLASH_KEY"),"random"])
      ->quoteText($text)
      ->watermarkText("Mas Okky")
      ->toFile("result.jpg");
  }
  else{
    (new QuoteMaker)
      ->setBackground("yada.jpeg")
      ->quoteText($text)
      ->watermarkText("Mas Okky")
      ->toFile("result.jpg");
  }
}catch(Exception $e){
  echo $e->getMessage();
}
$name = './result.jpg';
$fp = fopen($name, 'rb');

// send the right headers
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

// dump the picture and stop the script
fpassthru($fp);
exit;
?>