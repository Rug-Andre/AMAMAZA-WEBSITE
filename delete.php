<?php
include('config.php');
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "DELETE FROM clients WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:dashboard.php");
    } 
}else{
    echo "data not found";
}

