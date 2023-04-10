<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
$id=$_GET['id'];
$title=$_GET['title'];
$rating=$_GET['rating'];
$desc=$_GET['description'];
$sql= "UPDATE MOVIES SET title='$title',rating=$rating , description='$desc' where id=$id";
$res=$conn->query($sql);                                             
if($res===True){
    header("location: movies.php");
}
else{
    echo "insertion failed";
}
?>