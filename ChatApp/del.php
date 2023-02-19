<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
  header("location: login.php");
}
 include_once "header.php"; 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fid =  $_SESSION['unique_id'] ; 
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
      $row = mysqli_fetch_assoc($sql);
    }
    $insert_query = mysqli_query($conn, "INSERT INTO deleted_accounts ( unique_id , fname , lname , email , password , img , status ) VALUES ( '{$row['unique_id']}', '{$row['fname']}','{$row['lname']}', '{$row['email']}', '{$row['password']}', '{$row['img']}', '{$row['status']}' )");
   if($insert_query){
    $del_query =mysqli_query($conn, "DELETE FROM `post` WHERE unique_id={$row['unique_id']};");
    if($del_query){
      $del_msg_query =mysqli_query($conn, "DELETE FROM `messages` WHERE incoming_msg_id={$row['unique_id']};");
      if($del_msg_query){
    $sql = "DELETE FROM users where unique_id=$fid ";
    if (mysqli_query($conn, $sql))
{
        echo "account  deleted";
        session_unset();
        session_destroy();
        echo "<a href =\"index.php\"><button>register</button></a>";
}
    }
  }
}
}
?>    