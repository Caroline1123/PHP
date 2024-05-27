<?php

// Create a form asking for the age, gender and name of the person. Use the $age and $gender variables in an if/else to display a "welcome to the team !" or "Sorry you don't fit the criteria" message.

if (isset($_GET['age']) && isset($_GET['gender'])) {
    // Form processing
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = strtolower($_GET['gender']);
    if (($age > 20) && ($age < 41) && ($gender == "woman")) {
        echo "<h1>Hello $name, you were correctly signed up!</h1>";
    } else {
        echo "<h1>Sorry, $name. You do not meet the requirements to register.</h1>";
    }
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