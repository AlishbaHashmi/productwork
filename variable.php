<?php

$fname = "Affan";   // global scope
function getfullname(){
   global $fname;
    $lname = "Khanzada";   // local scope
echo  "$fname . $lname";
echo $lname;

}
getfullname();
echo $fname;
?>