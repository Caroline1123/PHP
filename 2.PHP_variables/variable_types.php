<html>

<head>
    <title>Hi!</title>
</head>

<body>
    <?php
    $first_name = "Caroline";
    $age = 32;
    $eyes_color = "blue";
    $family = array(
        0 => "Me",
        1 => "Me?",
        2 => "Me!"
    );
    $is_hungry = true;
    ?>

    <h1>Hi, my name is <?php echo $first_name; ?></h1>
    <p>I am <?php echo $age; ?> years old.</p>
    <p>My eyes are <?php echo $eyes_color; ?></p>
    <p>The first person in my family is <?php echo $family[0]; ?></p>
    <p>Am I hungry? <?php if ($is_hungry) {
        echo "Hell yeah!";
    } ?></p>
</body>

</html>