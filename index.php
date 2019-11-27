<?php
require 'vendor/autoload.php';

$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

//rendu du template
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false, //__DIR__ . '/tmp',
]);

?>
