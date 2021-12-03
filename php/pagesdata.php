<?php
$Menu = [
    "Home" => "index.php",
    "About" => "#",
    "Blog" => "#",
    "Portfolio" => "#",
    "Contact" => "contact.php"
];

 foreach ($Menu as $key => $value){
    echo ("<a href=" . $value .">" . $key . "</a><br />");
 }
