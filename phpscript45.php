<?php
// function to get webpage title
function getTitle($url) {
    $page = file_get_contents($url);
    preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match);
    return (array_pop($match));
}
echo 'Title: ' . getTitle('https://www.google.com/')."\n";
