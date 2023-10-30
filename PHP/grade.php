<?php

$en = 65;
$math = 70;
$sc = 75;
$tot = $en + $math + $sc;
$avg = $tot / 3;

print "English marks  is = $en<br>";
print "Maths marks is = $math<br>";
print "Science marks is = $sc<br>";
print "Total is = $tot<br>";
print "Average is = $avg<br>";

if ($avg > 90) {
    $grd = "A+";
} else if ($avg > 80) {
    $grd = "A";
} else if ($avg > 70) {
    $grd = "B+";
} else if ($avg > 60) {
    $grd = "B";
} else if ($avg > 50) {
    $grd = "C";
} else if ($avg > 40) {
    $grd = "s";
} else {
    $grd = "R";
}

print "Your grade is $grd";
?>