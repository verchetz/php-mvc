<?php

$match = [];
$result = (bool)preg_match_all("/alex|pin/i", "Alexsus dapin", $match);

var_dump($result);
// var_dump($match);

$result = preg_replace("/kontol|bangsat/i", "#@!*$%", "bacot kontol banget lu bangsat");
var_dump($result);