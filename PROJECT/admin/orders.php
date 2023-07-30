<?php
            include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> orders </title>
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

        <div class="row"> 
      <!-- //empt -->
        


      
        <!-- <div class="col-md-4"></div> -->
       
        <!-- //row -->
<br/>
        <!-- <div class="row"> -->
       
        <div class="col-md-12">
        <!-- <div class="col-lg-12"> -->
  


        <?php
                    include '../connection.php';
	
                   
                    $sql = "SELECT customers.fname,customers.lname,orders.time,food.quantity,categories.name,orders.id,orders.status,orders.date FROM categories,food,orders,customers,users
                    where customers.id=orders.cid and orders.fid=food.id and food.cid=categories.id and users.id=orders.user_id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                      ?>
                       <br/>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">List of orders</h5>

      <!-- Table with stripped rows -->

      <br/>
      <table class="table  table-responsive">
        <thead>
          <tr>
          <td>FIRST NAME</td> <td>LAST NAME</td> <td>DATE</td>  <td> TIME</td><td> QUANTITY</td><td> NAME</td><td> STATUS</td> 
                                     

       
          </tr>
        </thead> 
        <tbody>

        <?php
                    include '../connection.php';
	
                    $sql = "SELECT customers.fname,customers.lname,orders.time,food.quantity,categories.name,orders.id,orders.status,orders.date FROM categories,food,orders,customers,users
                    where customers.id=orders.cid and orders.fid=food.id and food.cid=categories.id and users.id=orders.user_id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                     $i=0;
                     $sum=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;


                       
                  
                       @$fname=$row["0"]; 
                       @$lname=$row["1"]; 
                       @$t=$row["2"];
                      //  @$t_ke=$row["3"];
                       @$q=$row["3"];
                       @$c=$row["4"];
                       @$id=$row["5"];
                       @$s=$row["6"];
                       @$d=$row["7"];
                      //  @$price=$row["7"];
                      //  @$pk=$row["8"];
                      //  @$s=$row["9"];
                      //  $sum=$sum+$price;
                       ?>

                          
                          <tr>
                         
                        <td><?php echo $fname; ?></td>
                         <td><?php echo $lname; ?></td> 
                         <td><?php echo $d; ?></td>
                         <td><?php echo $t; ?></td>
                        <td><?php echo $q; ?></td> <td><?php echo $c; ?></td> <td><?php echo $s; ?></td> 
                    

                  
                       <?php
                      }
                    } else {
                      echo "0 orders";
                    }
                  ?>
                 
       
     
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    <!-- </div> -->
  </div>

 

  

</div>

<?php
                    }else{
                      ?>
                       <br/>
                  <div class="card">
    <div class="card-body">
      <h5 class="card-title">0 orders</h5>
    </div></div>

                    <?php
                    }
                    ?>

</div>
        </div>
        </div>
    

        <!-- //main cont -->
        </div>
      
      </div>
        <!-- <div class="col-md-12">  </div> -->
  
    </div>
</div>







  

</body>

</html>
