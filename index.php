<?php

require 'vendor/autoload.php';

//Rendu du template
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

$twig->render('hello.html', array(
    'name' => 'Michael',
    'age' => 52
));


 

