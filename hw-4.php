<?php
$title =[];
$pagenumber = $_GET['page'];
$link = mysqli_connect('localhost','root','','products_shop');
if ($link){
    $sql = 'select * from products where 1 limit 0,'.$pagenumber;
    $sql = mysqli_real_escape_string($link,$sql);
    $result = mysqli_query($link,$sql);
    while($row=mysqli_fetch_object($result)){
        $title[] = $row;
    }
    echo json_encode($title);
    mysqli_close($link);
}