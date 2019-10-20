<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new\Twig\Loader\FilesystemLoader('../src/View');

$twig = new \Twig\Environment($loader);

$products = ['phones', 'tablets', 'laptops', 'monitors', 'keyboards'];

echo $twig->render('index.html.twig',array ('products' => $products) );