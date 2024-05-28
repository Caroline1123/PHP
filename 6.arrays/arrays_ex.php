<?php

$web_development = array(
    "frontend" => [],
    "backend" => []
);
$web_development["frontend"][] = 'xhtml';
$web_development["backend"][] = 'Ruby on Rails';
$web_development["frontend"][] = 'CSS';
$web_development["frontend"][] = 'Flash';
$web_development["backend"][] = 'Javascript';
$web_development["frontend"][] = 'Javascript';

$web_development['frontend'] = array_replace($web_development['frontend'], array(0 => "HTML"));
echo '<pre>';
echo print_r($web_development);
echo '</pre>';

array_splice($web_development["frontend"], 2, 1);
echo '<pre>';
echo print_r($web_development);
echo '</pre>';
?>