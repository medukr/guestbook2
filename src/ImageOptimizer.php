<?php


namespace App;


use Imagine\Gd\Imagine;
use Imagine\Image\Box;

class ImageOptimizer
{
    private const MAX_WIDTH = 200;
    private const MAX_HEIGHT = 150;

    private $imagine;

    public function __construct()
    {
        $this->imagine = new Imagine();
    }

    public function resize(string $filename): void
    {
        list($iwidth, $iheigth) = getimagesize($filename);
        $ratio = $iwidth / $iheigth;
        $width = self::MAX_WIDTH;
        $heigth = self::MAX_HEIGHT;

        if ($width / $heigth > $ratio) {
            $width = $heigth * $ratio;
        } else {
            $heigth = $width / $ratio;
        }

        $photo = $this->imagine->open($filename);
        $photo->resize(new Box($width, $heigth))->save($filename);
    }
}