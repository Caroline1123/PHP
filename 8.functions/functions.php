<?php
// Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :

function capitalize_first($string)
{
    $string[0] = strtoupper($string[0]);
    return $string;
}

function display_year()
{
    echo date('d-m-Y H:i:s') . "<br>";
}
function sum($num1, $num2)
{
    if ((gettype($num1) != "integer") || (gettype($num2) != "integer")) {
        return "Error: argument is the not a number.<br>";
    }
    return $num1 + $num2;
}

function get_acronym($text)
{
    $text_array = explode(" ", $text);
    for ($i = 0; $i < count($text_array); $i++) {
        $text_array[$i] = ucfirst($text_array[$i][0]);
    }
    return implode(".", $text_array) . ".";
}

function replace_ae($text)
{
    return str_replace("ae", "æ", $text);
}

function giveback_ae($text)
{
    return str_replace("æ", "ae", $text);
}

function feedback($message, $class = "info")
{
    return "<div class=$class>" . ucfirst($class) . ": " . $message . "</div>";
}

echo capitalize_first("jean") . "<br>";
display_year();
echo sum(4, 5) . "<br>";
echo get_acronym("You must call Arthur") . "<br>";
echo replace_ae("microsphaera") . "<br>";
echo giveback_ae("microsphæra");
echo feedback("Incorrect email address", "error");

?>