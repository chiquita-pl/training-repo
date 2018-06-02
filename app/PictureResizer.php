<?php


namespace App;

class PictureResizer
{
    /**
     * @param Picture $picture
     * @param int $width
     * @param int $height
     * @param int $newName
     */
    public function resizeAndSave(Picture $picture, $width, $height, $newName)
    {
        $picture->getImage()
            ->resize($width, $height)
            ->save($newName, 100);
    }

    /**
     * @param Picture $picture
     * @return string
     */
    public function getPictureDirectory(Picture $picture)
    {
        return $picture->getPictureDirectory();
    }
}
