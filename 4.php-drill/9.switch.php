<?php
if (isset($_GET['grade'])) {
    $grade = $_GET['grade'];

    switch ($grade) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo "<h1>This work is really bad. What a dumb kid!</h1>";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            echo "<h1>This is not sufficient. More studying is required.</h1>";
            break;
        case 10:
            echo "<h1>barely enough!</h1>";
            break;
        case 11:
        case 12:
        case 13:
        case 14:
            echo "<h1>Not bad!</h1>";
            break;
        case 15:
        case 16:
        case 17:
        case 18:
            echo "<h1>Bravo, bravissimo!</h1>";
            break;
        default:
            echo "<h1>Too good to be true : confront the cheater!</h1>";
            break;
    }

}
echo '<form method="get" action="">
    <label for="name">Please type in your grade :</label>
    <input type="number" name="grade"><br>
	<input type="submit" name="submit" value="Go!">'
    ?>