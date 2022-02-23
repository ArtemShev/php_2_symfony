<?php
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$images  =[];
$link = mysqli_connect('localhost','root','','pictures_store');
if ($link){
    $sql = 'select src from pictures where 1 order by view_count DESC';
    $sql = mysqli_real_escape_string($link,$sql);
    $result = mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $pictures[]=$row['src'];
    }
    mysqli_close($link);
}
require_once '../vendor/autoload.php';

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader,[]);

$template = $twig->load('index.html.twig');

echo $template->render([
    'pictures' => $pictures
]);