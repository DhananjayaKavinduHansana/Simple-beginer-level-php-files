<?php
$bill = 17500;
$disra = 0;

print "Your bill is = $bill<br>";

if ($bill < 10000) {
    $disra = 10;
} else if ($bill < 25000) {
    $disra = 15;
} else {
    $disra = 5;
}

$disam = $bill * $disra / 100;
$net = $bill - $disam;

print "Your Discount rate is = $disra<br>";
print "Your Discount amount is = $disam<br>";
print "Your Net balance is = $net<br>"





    ?>