<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
echo "connection successful";
$id=$_GET['id'];
$sql="DELETE FROM MOVIES where id=$id";
$res=$conn->query($sql);
if($res===TRUE){
    echo "deletion successful";
    header("location: movies.php");
}
else{
    echo " Can not delete";
}

?>