<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
$title=$_GET['title'];
$rating=$_GET['rating'];
$desc=$_GET['description'];
$sql= "INSERT INTO MOVIES(id,title,rating,description) VALUES(NULL,'$title',$rating,'$desc')";
$res=$conn->query($sql);
if($res===True){
    header("location: movies.php");
}
else{
    echo "insertion failed";
}
?>