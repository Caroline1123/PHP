<?php
$family_members = ["Ron", "Hermione", "Draco", "Harry"];
echo '<br>';

$recipes = ["lasagna", "crème brûlée", "pizza", "dark chocolate"];
print_r($recipes);
echo '<br>';

$favourite_movies = ["The Prestige", "Gladiator", "Seven"];
echo $favourite_movies[0];
echo '<br>';

echo '<pre>';
print_r($family_members);
echo '</pre>';

var_dump($recipes);

echo "<h1>Exercise</h1>";

$me = array(
    'name' => 'Caroline',
    'season' => 'winter',
    'age' => 32,
    'likes_soccer' => 'I don\'t like soccer, nor any other sports.'
);
echo 'Hi, my name is ' . $me["name"] . '. I am ' . $me["age"] . ' years old.<br>';
echo 'My favourite season is ' . $me['season'] . ' and ' . $me["likes_soccer"];

echo '<h1>Exercise on multi-dimensional arrays</h1>';

$me['hobbies'] = ["playing video games", "gardening", "listening to music", "watching series and movies", "chill"];

$mom = array(
    'name' => 'Dominique',
    'season' => 'Spring',
    'age' => 70,
    'likes_soccer' => 'does not care for soccer but still pretends she understands it!'
);
$mom['hobbies'] = ["giving random life tips", "repeating the same over info over and over again", "speaking to animals like they actually understand", "being more active than her daughter"];
$me["mother"] = $mom;

echo "<pre>";
echo print_r($me);
echo "</pre>";

echo count($me["mother"]["hobbies"]) + count($me["hobbies"]);

$me["hobbies"][] = "taxidermy";
echo print_r($me["hobbies"]);

$soulmate = array(
    'name' => 'Milka',
    'season' => 'summer',
    'age' => 7,
    'likes_soccer' => 'He\'s a cat. He just does not give a flying fuck.',
    'hobbies' => ["cuddles", "sleeping", "hunting", "listening to music"]
);

// perform array operation
$possible_hobbies_via_intersection = array_intersect($me["hobbies"], $soulmate["hobbies"]);
$possible_hobbies_via_merge = array_merge($me["hobbies"], $soulmate["hobbies"]);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

?>