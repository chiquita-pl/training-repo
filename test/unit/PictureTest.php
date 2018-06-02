<?php

use App\Picture;
use Intervention\Image\Image;

class PictureTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Picture
     */
    protected $picture;

    public function setUp()
    {
        $this->picture = new Picture('elephant.jpg');
    }

    public function testGettingPictureDirectory()
    {
        $this->assertSame($this->picture->getPictureDirectory(), 'elephant.jpg');
    }

    public function testGettingImageInstance()
    {
        $image = $this->picture->getImage();
        $this->assertInstanceOf(Image::class, $image);
    }
}
