<?php
$text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

function remove_nonalpha($str)
{
    return preg_replace('/[^a-z\d ]/i', '', $str);
}
;
function shuffle_innertext($str)
{
    if (strlen(remove_nonalpha($str)) < 4) {
        return $str;
    }
    $first_letter = $str[0];
    $last_letter = $str[strlen($str) - 1];
    if (strlen(remove_nonalpha($str)) != strlen($str)) {
        $last_char = $str[strlen($str) - 2];
        $to_shuffle_chars = substr($str, 1, strlen($str) - 3);
        $shuffled_chars = str_shuffle($to_shuffle_chars) . $last_char;
    } else {
        $to_shuffle_chars = substr($str, 1, strlen($str) - 2);
        $shuffled_chars = str_shuffle($to_shuffle_chars);
    }
    $shuffled_str = $first_letter . $shuffled_chars . $last_letter;
    return $shuffled_str;
}

$text_array = explode(' ', $text);
for ($i = 0; $i < count($text_array); $i++) {
    echo shuffle_innertext($text_array[$i]) . ' ';
    ;
}
;
?>