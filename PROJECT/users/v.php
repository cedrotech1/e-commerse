<?php
            include 'session.php';
?>


<?php
include '../connection.php';
// session_start();
// echo $id= $_GET['id'];
@$go=$_POST["v"];
echo $id=$_SESSION['x'];
echo $myid;


      if(isset($go))
    {

          $sql = "UPDATE `orders` SET `user_id` = '$myid' , status='delivered' WHERE `orders`.`id` = '$id'";

          if (mysqli_query($conn, $sql)) {


            
            
            echo '<script>alert(" successfull")</script>';
            echo "<script>window.location='./index.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);


        }
      
?>
