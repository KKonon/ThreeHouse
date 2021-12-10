<?php
$Menu = [
    "Home" => "/index.php?id=home",
    "About" => "#",
    "Blog" => "#",
    "Portfolio" => "#",
    "Contact" => "/php/contact.php?id=contact"
];

 foreach ($Menu as $key => $value){
    echo ("<a href=" . $value .">" . $key . "</a><br />");
 }
