<?php

if (isset($_GET['age']) && isset($_GET['gender'])) {
    // Form processing
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = strtolower($_GET['gender']);

    $alert = "<h1>Sorry, $name. You do not meet the requirements to register.</h1>";
    if (($age > 20) && ($age < 41) && ($gender == "woman")) {
        $alert = "<h1>Hello $name, you were correctly signed up!</h1>";
    }
    echo $alert;
}
// Form
echo '<form method="get" action="">
    <label for="name">Please type your name :</label>
    <input type="" name="name"><br>
    <label for="age">Please type your age :</label>
    <input type="number" name="age"><br>
    <label for="gender">Man or Woman?</label>
	<input type="text" name="gender"><br>
	<input type="submit" name="submit" value="Sign me up now">'
    ?>