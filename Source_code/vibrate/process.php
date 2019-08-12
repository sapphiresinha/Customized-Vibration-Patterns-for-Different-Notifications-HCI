<?php
$r1=$_POST['random1'];
$r2=$_POST['random2'];
$r3=$_POST['random3'];
$t= date("d/m/y : H:i:s", time());
$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
$txt =$r1.' '.$r2.' '.$r3.' '.$t.PHP_EOL;// "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>