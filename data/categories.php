<?php

require_once __DIR__ . '/../models/Category.php';

$categories = [
    'dog' => new Category('Cani', 'fas fa-dog'),
    'cat' => new Category('Gatti', 'fas fa-cat'),
    'fish' => new Category('Pesci', 'fas fa-fish'),
    'bird' => new Category('Uccelli', 'fas fa-dove'),
];
