<?php
// include 'connection.php';

session_start();

 $idd=$_SESSION['id'];
$fname=$_SESSION['name'];

  if(!isset($_SESSION['id']))
  {
    echo "<script>window.location='../login1.php'</script>";
  }else
?>