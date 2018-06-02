<?php

use App\Picture;
use App\PictureResizer;
use Intervention\Image\ImageManagerStatic;

require 'vendor/autoload.php';

$picture = new Picture('elephant.jpg');
(new PictureResizer())->resizeAndSave($picture, 500, 500, 'myBigElephant.jpg');

$image = (new Picture('myBigElephant.jpg'))->getImage();

echo "{$image->width()} {$image->height()}" ;
