



<?php
require_once "simple_html_dom.php";
$ip = file_get_html('https://api.ipify.org');


$ip_t = "text.txt";
$gutscheine = "gutscheine.txt";
$v = fopen($ip_t,"r");
$v1 = fread($v,filesize($ip_t));


if(strpos("$v1", "$ip") !== false){

  $iplen = strlen($ip);
  $ipan  = strpos($v1,"$ip");
  $ipen  = $iplen+$ipan+1;

  $g     = substr($v1,$ipen,5);
  echo "<p>Deine Gutschein ist: $g</p>";
}

else{
$rp = randomPassword();
$file1=fopen($ip_t,"a");
fwrite($file1, $ip.":".$rp."\n");



echo "<h3>Deine Gutschein code ist: $rp</h3>";
}

?>

<style>
    * {box-sizing: border-box;margin: 0;padding: 0;}
  body {font-family: Arial, Helvetica, sans-serif;font-size: 25px;padding: 30px;line-height: 1.6;color: rgb(158, 4, 4);background: #333;}
  h3{text-align: center;margin-bottom: 30px;text-decoration: none;
border: 1px solid rgb(146, 148, 248);
display: flex;
color: rgb(146, 148, 248);
justify-content: center;
align-items: center;
height: 20vh;}
  h2{margin-top: 20px;}
  p{width: 100%;text-align: center;margin-bottom: 30px;border-bottom: 1px #ccc solid;}
  h2{margin-top: 20px;}
  button{cursor: pointer;display: block;background: rgb(255, 255, 255);color: rgb(255, 0, 0);border: 0;border-radius: 5px;padding: 10px 20px;margin: 20px 20;}
  input[type="text"] {border: 1px rgb(14, 26, 194) solid;width: 300px;padding: 4px;height: 35px;margin-top: 20px;}
  .card {margin: 20px 0;border: rgb(137, 14, 14) 1px solid;padding: 20px;}
  .box {background: rgb(109, 143, 170);width: 1.6em;height: 1.6em;}
</style>
