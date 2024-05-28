<?php

// In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :
// Volume of a cone which ray is 5 and height is 2
// $volume = 5 * 5 * 3.14 * 2 * (1/3);
// // Volume of a cone which ray is 3 and height is 4
// $volume = 3 * 3 * 3.14 * 4 * (1/3);
// echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';

function random_string()
{
    $len1 = rand(1, 5);
    $len2 = rand(7, 15);
    $word1 = "";
    $word2 = "";

    while (strlen($word1) <= $len1) {
        // Add random ascii char (lower)
        $word1 = $word1 . chr(rand(97, 122));
    }
    while (strlen($word2) <= $len2) {
        // Add random ascii char (lower)
        $word2 = $word2 . chr(rand(97, 122));
    }
    return [$word1, $word2];
}
;

function decapitalize($string)
{
    return strtolower($string);
}
;

function calculate_cone_volume($ray, $height)
{
    if ((gettype($ray) != "integer") || (gettype($height) != "integer")) {
        return "Error: one or more parameter(s) weren't of type integer";
    }
    // echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';
    $volume = $ray * $ray * pi() * $height * (1 / 3);
    return "The volume of a cone which ray is $ray and height is $height = " . round($volume, 2) . ' cm <sup>3</sup>';
}
;
echo "<h1>Generate new words</h1>";
$words = random_string();
foreach ($words as $word) {
    echo $word . "<br>";
}
echo "<form action='' method ='get'>
<br><br><button type='submit'>Generate</button>
</form><br>"
;

echo decapitalize("STOP YELLING I CAN'T HEAR MYSELF THINKING!!") . "<br>";
echo calculate_cone_volume(3, 4);
?>