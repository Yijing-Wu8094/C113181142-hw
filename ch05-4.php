# Name: 吳依靜 <BR>
# SID: C113181142 <BR>
# EX04
<HR>
<?php
$result = 0;
$n = 0;
while ($result <= 10) {
    $result = $result * $n;
    echo "|" . $result;
    $n = $n + 1;
    echo "|" . $n;
    $result++;
}
$n = $n - 1;
echo "result: " . $result;
?>