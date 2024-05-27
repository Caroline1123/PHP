<?php
$now = date('H:i:s');
$hour = (int) date('H');
$minute = (int) date('i');

// Test the value of $now and display the right message according to the specifications.
if (($hour >= 5 && $hour < 9) || ($hour == 9 && $minute == 0)) {
    echo "<h1>Good morning!</h1>";
} elseif (($hour > 9 && $hour < 12) || ($hour == 9 && $minute > 0) || ($hour == 12 && $minute == 0)) {
    echo "<h1>Good day!</h1>";
} elseif (($hour > 12 && $hour < 16) || ($hour == 12 && $minute > 0) || ($hour == 16 && $minute == 0)) {
    echo "<h1>Good afternoon!</h1>";
} elseif (($hour > 16 && $hour < 21) || ($hour == 16 && $minute > 0) || ($hour == 21 && $minute == 0)) {
    echo "<h1>Good evening!</h1>";
} else {
    echo "<h1>Good night!</h1>";
}
?>