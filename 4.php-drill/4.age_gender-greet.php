<?php

if ((isset($_GET['age'])) && (isset($_GET['gender']))) {
    // Form processing
    $age = $_GET['age'];
    $gender = strtolower($_GET['gender']);
    if ($age < 12) {
        if ($gender == "man") {
            echo '<h1>Hello boy!!</h1>';
        } else {
            echo '<h1>Hello girl!!</h1>';
        }
    } elseif ($age >= 12 && $age < 18) {
        if ($gender == "man") {
            echo '<h1>Hello young man!!</h1>';
        } else {
            echo '<h1>Hello young lady!!</h1>';
        }
        echo '<h1>Hello Teenager !</h1>';
    } elseif ($age >= 18 && $age < 115) {
        if ($gender == "man") {
            echo '<h1>Hello gramps!!</h1>';
        } else {
            echo '<h1>Hello gram!!</h1>';
        }
    } else {
        echo '<h1>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</h1>';
    }
}
// Form
echo '<form method="get" action="">
	<label for="age">Please type your age :</label>
	<input type="number" name="age"><br>
    <label for="gender">Man or Woman?</label>
	<input type="text" name="gender"><br>
	<input type="submit" name="submit" value="Greet me now">
</form>';

?>