<html>

<head>
    <title>Hi!</title>
</head>

<body>
    <?php
    $possible_states = ["filthy", "clean", "borderline"];
    $room_filthiness = $possible_states[2];

    if ($room_filthiness == $possible_states[0]) {
        echo "Yuk, Room is Disgusting! Let's clean it up !";
    } else if ($room_filthiness == $possible_states[1]) {
        echo "Yuk, Room is dirty : let's clean it up !";
    } else {
        echo "<br>Nothing to do, room is neat.";
    }
    ?>

</body>

</html>