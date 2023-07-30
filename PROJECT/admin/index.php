<?php
            include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> DASHBOARD </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
            include 'bot.php';
         ?>

</head>

<body>

<div class="container-fluid ">
    <div class="row header">

        <?php
            include 'header.php';
         ?>
      
    </div>

    <div class="row">
        <div class="col-md-2 menudiv">  
         <?php
            include 'menu.php';
         ?>

        </div>
        <div class="col-md-10"> 
          
      


        <div class="row statistics home">
        <div class="col-md-4 x">
        <center><h3 style="margin-top:1cm">DELIVERED ORDERS <br/>

        <?php

include '../connection.php';

$sql = "SELECT count(orders.id)FROM categories,food,orders,customers,users,payments
where customers.id=orders.cid and orders.fid=food.id and food.cid=categories.id and users.id=orders.user_id 
and payments.customerid=customers.id and payments.oid=orders.id";
$result = $conn->query($sql);

// $sum=0;
while($row = mysqli_fetch_array($result)) {
 $c=$row['0'];
//  $a=$row['1'];
//  $sum=$sum+$a;
}
echo $c;
 ?>
 
   
</h3></center>
    
          </div>




          <div class="col-md-4 x">
        <center><h3 style="margin-top:1cm;">AMOUNT EARNED<br/>

       
 0
        <?php

include '../connection.php';

$sql = "SELECT count(orders.id),amount FROM categories,food,orders,customers,users,payments
where customers.id=orders.cid and orders.fid=food.id and food.cid=categories.id and users.id=orders.user_id 
and payments.customerid=customers.id and payments.oid=orders.id";
$result = $conn->query($sql);

$sum=0;
while($row = mysqli_fetch_array($result)) {
 $c=$row['0'];
 $a=$row['1'];

 $sum=$sum+$a;
}
echo $sum;
 ?>
 
    
          
 
</h3></center>
    
          </div>
        

          <!-- <div class="col-md-4"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4"></div> -->
        </div>
      
      
      
      
      
      
      </div>
        <!-- <div class="col-md-12">  </div> -->
  
    </div>
</div>







  

</body>

</html>