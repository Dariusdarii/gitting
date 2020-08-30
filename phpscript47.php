<?php
//Open an image file and print its size
$size = getimagesize("image1.jpg");
$size1 = filesize("image1.jpg");
echo  $size1/1024," KiloBytes\n" ;
echo  $size1/1024/1024," MegaBytes\n" ;
echo  $size1/1024/1024/1024," GigaBytes\n" ;
echo "Image resolution : $size[0] x $size[1] px\n";
