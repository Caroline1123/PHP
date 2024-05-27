<!-- In a new file unicorn.php, create an html form asking "Are you a human, a cat or a unicorn ?". When submitted, the
screen displays an animated Gif showing either a human, a cat or a unicorn, as per the user input (you can find gifs
here). Use GET or POST as method, whichever you like. Use a ternary operation to evaluate the condition. -->


<?php

echo '
<a href="11.ternary_ex.php">Go to check Page</a><br><br>

<form method="get" action="">
<label for="species">Are you a human, a cat or a unicorn ?</label><br>
<input id="human" type="radio" name="species" value="human">
<label for="human">Human</label>
<input id="cat" type="radio" name="species" value="cat">
<label for="cat">Cat</label>
<input id="unicorn" type="radio" name="species" value="unicorn">
<label for="unicorn">Unicorn</label><br>

<input type="submit" name="submit" value="Greet me now">
</form>
';

if (isset($_GET["species"])) {
    $species = $_GET["species"];
    echo ($species == "human" ?
        '
        <img src="https://tenor.com/en-GB/view/im-human-im-normal-marissa-rachel-im-just-human-im-same-with-others-gif-18888701.gif" width="300" height="300" frameBorder="0" allowFullScreen>' :
        ($species == "cat" ?
            '<img src="https://tenor.com/en-GB/view/cool-fun-white-cat-dance-cool-and-fun-times-gif-16435335956387921912.gif" width="300" height="300" frameBorder="0" allowFullScreen>' :
            '<img src="https://tenor.com/en-GB/view/unicorn-happy-birthday-dance-moves-gif-24459212.gif" width="300" height="300" frameBorder="0" allowFullScreen>'
        )
    );
}
// echo ($gender == "F") ? "$hello, lady!" : "$hello, sir!";

?>