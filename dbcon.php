<?php



    $link = mysqli_connect('localhost', "root", "")or die("cannot connect"); 
    mysqli_select_db($link,"art_gallery")or die("cannot select DB");

?>