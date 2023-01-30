<?php
$file=fopen("AAGMAN.TXT","a");
$q="NAG BIGADTA JAA RHA HE LADKIYO K PRAKOOP M AAKE";
$read=fappend($file,$q);
if(!$read){
    echo "data added successfully";
}
else{
    echo "unable to add data";
}