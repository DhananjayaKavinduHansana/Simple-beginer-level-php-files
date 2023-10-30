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

if ($avg >= 50) {
    print "You are <b>Pass</b>";
} else {
    print "You are <b>Fail</b>";
}

?>