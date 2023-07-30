<?php
            include 'session.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>customers </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
            include 'bostrap.php';
         ?>

</head>

<body>

<body class="">

<div class="container-fluid">
    <div class="row header">

    <?php
        include 'header.php';
    ?>

    </div>


    <div class="row all">

<div class="col-md-12">
   <h3>LIST OF MY  ORDERS</h3>
</div>

</div>









    <div class="row">
    <div class="col-md-12" style=" padding:0.5cm"></div>

   
    <?php
                    include '../connection.php';

                    @$go=$_POST["submit"];
// @$reg=$_POST["reg"];
@$d=$_POST["d"];


    
        ?>

       
        <br/>
        <!-- Names: <?php //echo $fname." ".$lname ?> -->

        
       
        <?php

                    $sql = "SELECT customers.fname,customers.lname,orders.time,food.quantity,categories.name,orders.id,orders.status FROM categories,food,orders,customers 
                    where customers.id=orders.cid and orders.fid=food.id and food.cid=categories.id and orders.cid='$idd'";



$result = $conn->query($sql);


                 
                     $i=0;
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

                      //  @$date=$row["date"];
                      //  @$pid=$row["id"];
                     ?>
                     <!-- <div class="col-md-1"></div> -->
                     <center> <div class="col-md-7 operation"
                      style=" padding:0.5cm;margin-top:2cm;">



    <center>  <table class='' border='0' style='width:60%' >
    <h5>ORDER STATUSES  </h5>

                     

                    

                      <tr>
                        <td> <u>TIME </u>  </td>  <td> <?php echo $t; ?> </td>
                     </tr>

                     

                     <tr>
                     <td>QUANTITY  </td>  <td> <?php echo $q; ?> </td>
                     </tr>
                     
                     
                    

                    

                    <tr>
                         <td>FOOD CATEGORY:</td>  <td> <?php echo $c ?></td>
                    </tr>

                   
                    <tr>

                    <tr>
                         <td>order status</td>  <td> <?php 

                         if($s=='paid')
                         {
                            ?>
                            <p style="background-color: whitesmoke;color:black;text-align:center; font-size:17px">paid but not yet deliverd</p>
                            <?php

                         }else{
                            ?>
                            <p style="background-color: whitesmoke;color:black;text-align:center; font-size:22px">delivered</p>
                            <?php

                         }

                         
                         
                         
                         ?></td>
                    </tr>


                  

<?php 

                         if($s=='paid')
                         {
                           
                            ?>
                              <form method="post" action='v.php' id="teacher_login_form">
                        <?php

                    $_SESSION['x'] = $id;

                    ?>

                             <td col-span='2'> <a href="v.php?id=<?php echo $id ?>"></a></td>
                            <?php

                         }else{
                           

                         }

                         
                         
                         
                         ?>



                       
                      </form>

                      </tr>

                   



                    <br>
                    </table></center>
      </div></center>
      <?php
 }


 

?>
    </div>
<br><br>

    <div class="row all">

<div class="col-md-12">
   <h6>CONTACT US </h6>
<center>
   <p>PHONE: 07898987654 <br>
      EMAIL:FOODORDER@GMAIL.COM <br>
      <i>copy right @ingabireMMC</i></center>
</p>
   
</div>

</div>



    </div>
</body>


  

</body>

</html>