<?php

$cn = $_POST['nm'];
$bill = $_POST['amt1'];

print "Customer Name = $cn<br>";
print "Your Bill is = $bill<br>";

if ($bill < 5000) {
    $disra = 5;
} else if ($bill < 10000) {
    $disra = 10;
} else if ($bill < 15000) {
    $disra = 15;
} else {
    $disra = 20;
}

$disam = $bill * $disra / 100;
$net = $bill - $disam;

print "Your Discount rate is = $disra<br>";
print "Your Discount amount is = $disam<br>";
print "Your Net balance is = $net<br>"


    ?>