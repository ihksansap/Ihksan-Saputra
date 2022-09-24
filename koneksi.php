<?php
$host="localhost";
$user="root";
$password="";
$database="konekdb";

$koneksi=mysqli_connect($host,$user,$password);
mysqli_select_db($koneksi,$database);

if($koneksi){
    echo "Succes";
}else{
    echo "Failed";
}
?>