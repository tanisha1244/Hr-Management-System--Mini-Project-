<?php
include "conni.php";
    
$tit=$_POST['title'];
$pq=$_POST['datei'];
$re=$_POST['board'];
$sq1="insert into notice (noname,date,desa) values ('$tit','$pq','$re')";
if (mysqli_query($conn, $sq1)) {
    header('location: resignation.php');
 } else {
    echo "Error: " ;
 }
?>