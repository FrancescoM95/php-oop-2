<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    private $color;
    private $materials;
    public static $type = 'toy';
    public static $icon = 'fas fa-bone';

    public function __construct($name, $image, $price, Category $category, $color, $materials)
    {
        parent::__construct($name, $image, $price, $category);

        $this->setColor($color);
        $this->setMaterials($materials);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getMaterials()
    {
        return $this->materials;
    }

    public function listMaterials(): string
    {
        return implode(',', $this->materials) . '.';
    }

    public function setMaterials($materials)
    {
        $this->materials = $materials;
    }
}
