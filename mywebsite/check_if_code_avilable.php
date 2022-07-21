





<form  action="index.html" method="post">
  <p>Schreibe Deine code Hier: </p>
</form>





<?php
require_once "simple_html_dom.php";
$ip = file_get_html('https://api.ipify.org');



$gutscheine = "gutscheine.txt";


$v = fopen($gutscheine,"r");
$v1 = fread($v,filesize($gutscheine));


if(strpos("$v1", "$ip") !== false){
echo "Sorry, du hast dein code bekommen";
}

else{
$rp = randomPassword();
$file1=fopen($ip_t,"a");
fwrite($file1, $ip ."\n");

$file2=fopen($gutscheine,"a");
fwrite($file2, $rp ."\n");

echo "<h3>Deine Gutschein code ist: $rp</h3>";
}

?>
