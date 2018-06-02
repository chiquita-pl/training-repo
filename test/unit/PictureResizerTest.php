<?php
/**
 * Created by PhpStorm.
 * User: wikto
 * Date: 02/06/2018
 * Time: 14:42
 */

use App\Picture;
use App\PictureResizer;

class PictureResizerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var PictureResizer
     */
    protected $pictureResizer;

    public function setUp()
    {
        $this->pictureResizer = new PictureResizer();
    }

    public function testGetPictureDirectory()
    {
        $pictureDirectory = $this->pictureResizer->getPictureDirectory(new Picture('elephant.jpg'));
        $this->assertSame($pictureDirectory, 'elephant.jpg');
    }

    public function testResizingPicture()
    {
        $this->pictureResizer->resizeAndSave(new Picture('elephant.jpg'), 300, 200, 'elephant2.jpg');

        $this->assertFileExists('elephant2.jpg');
    }
}
