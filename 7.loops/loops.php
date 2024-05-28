<?php
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $key => $value) {
    if ($pronouns[$key] == 'He/She') {
        echo $pronouns[$key] . " codes <br>";
    } else {
        echo $pronouns[$key] . " code <br>";
    }
}

$counter = 1;
while ($counter <= 120) {
    echo $counter . "<br>";
    $counter++;
}
;

echo "<br><br>";
for ($i = 1; $i <= 120; $i++) {
    echo $i . "<br>";
}
;
?>