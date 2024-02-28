<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    private $expiration;
    private $ingredients;
    public static $type = 'food';
    public static $icon = 'fas fa-bowl-food';

    public function __construct($name, $image, $price, Category $category, $expiration, $ingredients)
    {
        parent::__construct($name, $image, $price, $category);

        $this->setExpiration($expiration);
        $this->setIngredients($ingredients);
    }

    public function getExpiration()
    {
        return $this->expiration;
    }

    public function setExpiration(string $expiration)
    {
        $this->expiration = strtotime($expiration);
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function listIngredients(): string
    {
        return implode(',', $this->ingredients) . '.';
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }
}
