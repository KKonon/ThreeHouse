<?php
$Menu = [
    "Home" => "index.php",
    "About" => "#",
    "Blog" => "#",
    "Portfolio" => "#",
    "Contact" => "/php/contact.php"
];

 foreach ($Menu as $key => $value){
    echo ("<a href=" . $value .">" . $key . "</a><br />");
 }
