<?php

require_once "simple_html_dom.php";
$ip = file_get_html('https://api.ipify.org');

$ip_t = "text.txt";
$v = fopen($ip_t,"r");
$v1=  fread($v,filesize($ip_t));





$iplen = strlen($ip);
$ipan  = strpos($v1,"$ip");
$ipen  = $iplen+$ipan+1;


$g     = substr($v1,$ipen,5);


echo "$g";














// $iplen = strlen($ip);
// $ipan  = strpos($v1,$ip);
//
// $ipen  = intval($ipan)+intval($iplen);
//
// $Gutschein = substr($v1,$ipen,5);
//
// echo "$iplen::";
// echo "$ipan::";
// echo "$ipen::";
// echo "$Gutschein::";
//

 ?>
