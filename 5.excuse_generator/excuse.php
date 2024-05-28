<?php
echo
    ' 
    <form action="" method="GET">
    <label for="name">Child\'s name: </label><br>
    <input name="name" id="name" type="text"><br><br>
    <label for="gender">Gender: </label><br>
    <input type="radio" name="gender" id="F" value="F">
    <label for="F">F</label>
    <input type="radio" name="gender" id="M" value="M">
    <label for="M">M</label><br><br>
    <label for="teacher">Teacher\'s name: </label><br>
    <input name="teacher" id="teacher" type="text"><br><br>
    <label for="justification">Reason of absence:</label><br>
    <input type="radio" name="justification" id="ill" value="illness">
    <label for="ill">Illness</label><br>
    <input type="radio" name="justification" id="death" value="death">
    <label for="death">Death of a pet or family member</label><br>
    <input type="radio" name="justification" id="activity" value="activity">
    <label for="activity">Significant extra-curricular activity</label><br>
    <input type="radio" name="justification" id="other" value="other">
    <label for="other">Other</label><br><br>
    <button type="submit">Generate Excuse</button><br>
    </form>
    ';

if (isset($_GET['name']) && (isset($_GET['teacher'])) && (isset($_GET['gender'])) && (isset($_GET['justification']))) {

    $name = $_GET['name'];
    $teacher = $_GET['teacher'];
    $gender = $_GET['gender'];
    $justification = $_GET['justification'];

    ($gender == "M") ? $gender = "son" : $gender = "daughter";

    $illness_excuses = [
        "$name caught a rare strain of Netflixitis, which only allows them to move from the bed to the couch, and doctors recommend a full series binge to recover.",
        "$name experienced an outbreak of spontaneous nap syndrome, causing them to fall asleep in random places, including their breakfast cereal bowl.",
        "$name was diagnosed with can't-even-itis, a condition where one simply can't even, requiring a day of relaxation and no responsibilities."
    ];
    $death_excuses = [
        "$name's beloved Tamagotchi, Pixel, passed away after a long and fulfilling digital life. $name needed time to properly grieve and celebrate Pixel's memory.",
        "$name's goldfish, Bubbles, had a midlife crisis and needed $name's full attention for emotional support. Bubbles has since decided to pursue a career in motivational speaking.",
        "$name's favorite houseplant, Fernie, died unexpectedly, and $name had to arrange a dignified burial in the garden, complete with eulogies and a moment of silence."
    ];
    $activity_excuses = [
        "$name was busy training their unicorn, Sparkles, for the next enchanted race in the Magical Forest. This training is crucial to maintain peace between the realms.",
        "$name received an urgent owl from Hogwarts, summoning them for a special wizardry class that could determine the future of the wizarding world.",
        "$name was called upon for a secret mission with the Avengers, requiring their unique skills to save the world from an impending intergalactic threat."
    ];
    $other_excuses = [
        "$name was abducted by friendly aliens who wanted to learn about Earth culture. Still no news, we hope it stays that way. Some peace and quiet, at last...",
        "$name found themselves in an epic staring contest with our cat, Whiskers, and breaking concentration would have resulted in the loss of household respect.",
        "$name became a meme overnight. Due to too much awesomeness, our $gender won't be needing your stupid classes anymore. Big bucks awaiting WHEEEE! PS: you SUCK!!!",
    ];

    echo "Dear Mr(s) $teacher, <br><br>
    Our $gender will not be able to attend school today.<br><br>";
    switch ($justification) {
        case $justification == "illness":
            echo $illness_excuses[rand(0, 2)];
            break;
        case $justification == "death":
            echo $death_excuses[rand(0, 2)];
            break;
        case $justification == "activity":
            echo $activity_excuses[rand(0, 2)];
            break;
        case $justification == "other":
            echo $other_excuses[rand(0, 2)];
            break;
    }
    ;
    echo "<br><br>We thank you for your understanding. <br><br>
    Yours faithfully, <br><br>
    $name/'s parents";
}

?>