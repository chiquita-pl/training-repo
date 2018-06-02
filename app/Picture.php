<?php

namespace App;

use Intervention\Image\Image;
use Intervention\Image\ImageManagerStatic;

class Picture
{
    private $pictureDirectory;

    /**
     * Picture constructor.
     *
     * @param string $pictureDirectory
     */
    public function __construct($pictureDirectory)
    {
        $this->pictureDirectory = $pictureDirectory;
    }

    /**
     * @return string
     */
    public function getPictureDirectory()
    {
        return $this->pictureDirectory;
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return ImageManagerStatic::make($this->getPictureDirectory());
    }

}
