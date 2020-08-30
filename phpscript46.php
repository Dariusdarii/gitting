<?php
//Get email address from html snippet
$string = '<a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">Send Mail</a>';
preg_match( '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i' , $string,$match);
array_pop($match);
print_r($match);