<?php
//check if valid url
$url = "https://".readline('Enter a URL : ');
if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo ("Valid URL!");
} else
    echo ("Invalid URL!");
