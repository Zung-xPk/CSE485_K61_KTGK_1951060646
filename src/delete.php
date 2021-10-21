<?php 
$conn = mysqli_connect('localhost','root','','blood_recipient');
    $reci_id = $_GET['reci_id'];
    $delete = mysqli_query($conn,"Delete from recipient where reci_id = '$reci_id'");
    if($delete) {   
        header('location:index.php');
    }
    else {
        header('location:index.php');
    }
?>