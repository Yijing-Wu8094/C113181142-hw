# Name: 吳依靜 <BR>
# SID: C113181142 <BR>
# EX05
<HR>
<?php
$total = 0;
for ($i = 0; $i <= 15; $i++) {
    if ($i % 2 == 1) {
        continue;
    }
    echo "| " . $i;
    $total += $i;
}
?>