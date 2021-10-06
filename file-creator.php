<?php


$save_status = file_put_contents("file.txt", "Hello"); //generate json file

$myfile1 = fopen("file.txtt", "r") or die("Unable to open file!");
echo fread($myfile1,filesize("file.txt"));


?>