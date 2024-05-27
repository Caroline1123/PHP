<?php

if (isset($_GET['age'])) {
    // Form processing
    $age = $_GET['age'];
    if ($age < 12) {
        echo '<h1>Hello kiddo!</h1>';
    } elseif ($age >= 12 && $age < 18) {
        echo '<h1>Hello Teenager !</h1>';
    } elseif ($age >= 18 && $age < 115) {
        echo '<h1>Hello Adult !</h1>';
    } else {
        echo '<h1>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</h1>';
    }
}
// Form (incomplete)
echo '<form method="get" action="">
	<label for="age">Please type your age :</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>';

?>