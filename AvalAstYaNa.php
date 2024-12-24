<?php
$A = $_GET["n1"];

function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

if (is_prime($A)) {
    echo "عدد وارد شده، عدد اول است.";
} else {
    echo "عدد وارد شده، عدد اول نیست.";
}
?>