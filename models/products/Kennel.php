<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    private $color;
    private $size;
    public static $type = 'toy';
    public static $icon = 'fas fa-bone';

    public function __construct($name, $image, $price, Category $category, $color, $size)
    {
        parent::__construct($name, $image, $price, $category);

        $this->setColor($color);
        $this->setSize($size);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
}
