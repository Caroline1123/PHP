<?php
$people = ["Aragorn", "Legolas", "Frodo", "Gimli", "Sam", "Gandalf"];

foreach ($people as $key => $value) {
    echo $people[$key] . "<br>";
}
echo "<br><br>";

$countries = array(
    "BE" => "Belgium",
    "GB" => "United Kingdom",
    "IT" => "Italy",
    "FR" => "France",
    "US" => "United States",
    "JP" => "Japan",
    "AUS" => "Australia",
    "SWE" => "Sweden",
    "NOR" => "Norway",
    "NL" => "Netherlands"
);

echo "<label for = 'country-select'>Select a country:</label><br>
<select name='countries' id='country-select'>
";
foreach ($countries as $iso => $country_name) {
    echo "<option value =" . $iso . ">" . $country_name . "</option>";
}
;

echo "</select>";
?>