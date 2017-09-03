<?php
foreach (glob("FileToBeRead.txt") as $filename) {   
    $file = $filename;
    $contents = file($file); 
    $string = implode("<br/>",$contents); 
    echo $string;
    echo "<br></br>";
}
?>