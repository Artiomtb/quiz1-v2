<?php

use Exceptions\ClassNotFoundException;
use Exceptions\InvalidPostKeyException;
use Model\Renderable;

require_once 'Autoloader.php';

try {
    $productCreator = ProductCreator::getInstance();
    $iPhone = $productCreator->make(
        'iPhone',
        [
            'color' => 'Space Gray',
            'memory' => '64',
            'version' => '6S',
            'price' => '20000'
        ]
    );
    $iPad = $productCreator->make(
        'iPad',
        [
            'color' => 'Space Gray',
            'memory' => '64',
            'version' => 'Pro',
            'price' => '20000'
        ]
    );
    $macBook = $productCreator->make(
        'MacBook',
        [
            'memory' => '512',
            'size' => '15',
            'year' => '2015',
            'price' => '60000'
        ]
    );

    $products = [$iPhone, $iPad, $macBook];
} catch (ClassNotFoundException $e) {
    die($e->getMessage());
} catch (InvalidPostKeyException $e) {
    die($e->getMessage());
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variant 2 | Quiz 1</title>
</head>
<body>
<h3>Here are all products:</h3>
<?php
foreach ($products as $product) {
    if ($product instanceof Renderable) {
        echo $product->render() . '<br>';
    }
}
?>
</body>
</html>
