<?php
if (isset($_GET['grade'])) {
    $grade = $_GET['grade'];
    if ($grade < 5) {
        echo "<h1>This work is really bad. What a dumb kid!</h1>";
    } elseif (($grade > 4) && ($grade < 10)) {
        echo "<h1>This is not sufficient. More studying is required.</h1>";
    } elseif ($grade == 10) {
        echo "<h1>barely enough!</h1>";
    } elseif (($grade > 10) && ($grade < 15)) {
        echo "<h1>Not bad!</h1>";
    } elseif (($grade > 14) && ($grade < 19)) {
        echo "<h1>Bravo, bravissimo!</h1>";
    } else {
        echo "<h1>Too good to be true : confront the cheater!</h1>";
    }
}

echo '<form method="get" action="">
    <label for="name">Please type in your grade :</label>
    <input type="number" name="grade"><br>
	<input type="submit" name="submit" value="Go!">'
    ?>