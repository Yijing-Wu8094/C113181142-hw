<?php
function printHeader()
{
    echo "<h3>SID: C113181142</h3>";
    echo "<h3>Name:吳依靜</h3>";
    echo "<h3>EX02</h3>";
}

function rateExchange($amount, $rate)
{
    $result = $amount * $rate;
    return $result;
}

$rate = rateExchange(100, 32.5);

printHeader();
echo "Money: ".$rate;

?>