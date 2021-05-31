<?php
require "./vendor/autoload.php";
use masokky\QuoteMaker;
try{
  if (getenv("UNSPLASH_KEY") == true){
    (new QuoteMaker)
      ->setBackgroundFromUnsplash([getenv("UNSPLASH_KEY"),"random"])
      ->quoteText($_GET["text"])
      ->watermarkText($_GET["watermarkText"])
      ->setQuoteFontSize(37)
      ->toFile("result.jpg");
  }
  else{
    (new QuoteMaker)
      ->setBackground("yoda.jpeg")
      ->quoteText($_GET["text"])
      ->watermarkText($_GET["watermarkText"])
      ->setQuoteFontSize(37)
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