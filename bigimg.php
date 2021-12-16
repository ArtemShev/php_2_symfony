<?php
$picture = $_GET['image'];

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once '../vendor/autoload.php';

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader,[]);

$template = $twig->load('bigimg.html.twig');

echo $template->render([
    'picture' => $picture
]);
