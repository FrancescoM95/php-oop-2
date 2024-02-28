<?php

require_once __DIR__ . '/categories.php';
require_once __DIR__ . '/../models/products/Food.php';
require_once __DIR__ . '/../models/products/Toy.php';
require_once __DIR__ . '/../models/products/Kennel.php';

$products = [
    new Food(
        'Royal Canin Mini Adult',
        'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',
        34.99,
        $categories['dog'],
        '2024-12-01',
        ['manzo', 'verdura']
    ),

    new Food(
        'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
        44.49,
        $categories['dog'],
        '2024-12-01',
        ['pollo', 'riso']
    ),

    new Food(
        'Almo Nature Cat Daily Lattina',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
        34.99,
        $categories['cat'],
        '2024-12-01',
        ['vitello', 'prosciutto']
    ),

    new Food(
        'Mangime per Pesci Guppy in Fiocchi',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
        34.99,
        $categories['fish'],
        '2024-12-01',
        ['molluschi', 'alghe']
    ),

    new Kennel(
        'Voliera Wilma in Legno',
        'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
        184.99,
        $categories['bird'],
        'legno',
        '150cm x 100cm x 100cm'
    ),

    new Kennel(
        'Cartucce Filtranti per Filtro EasyCrystal',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
        10.99,
        $categories['fish'],
        'blu',
        '15cm x 10cm x 5cm'
    ),

    new Toy(
        'Kong Classic',
        'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
        10.99,
        $categories['dog'],
        'rosso',
        ['gomma', 'plastica']
    ),

    new Toy(
        'Topini di peluche Trixie',
        'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
        4.99,
        $categories['cat'],
        'grigio',
        ['cotone', 'plastica']
    )
];
