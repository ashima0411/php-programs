<?php
$myfile = fopen("file.txt", "w") or die("Unable to open file!");
$txt = "ashima\n";
fwrite($myfile, $txt);
$txt ="ashima\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
