<?php

function volume($length, $width = 10, $height = 15)
{   
    echo "<h3>SID: C113181142</h3>";
    echo "<h3>Name:吳依靜</h3>";
    echo "<h3>EX02</h3>";
    print $length . "x" . $width . "x" . $height . "=";
    return $length * $width * $height;
}

$l = 10;
$w = 20;
$h = 30;
print "盒子體積: " . volume($l, $w, $h) . "<br/>";
print "盒子體積: " . volume($l, $w) . "<br/>";
print "盒子體積: " . volume($l) . "<hr/>";

?>