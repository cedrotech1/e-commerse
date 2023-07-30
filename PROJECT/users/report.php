<?php
            include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>report </title>
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


   <!-- //empt -->


   <div class="card o-hidden border-0  my-5 myp">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row " style="padding:0.2cm ;">
                            <div class="col-lg-3 d-none d-lg-block">
                            <div class="card" style="padding:0cm ;">
       
        <div class="card-body">
          <form method="post" id="teacher_login_form">

            

          <div class="form-group">
              <label>DATE OF REPORT</label><br/>
             
              <input type="date" name="d"  id="" class="form-control" />
              <span id="error_teacher_password" class="text-danger"></span>
            </div><br/>


           

    

            <div class="form-group">
              <input type="submit" name="submit" id="teacher_login" class="btn btn-info col-md-12" value="GET REPORT" />

              
            </div>
          </form>
        </div>
      </div>
                            </div>
                            <div class="col-lg-9 ">
                                <div class="p-5">
                                    <div class="text-left">



                                    <?php
                    include '../connection.php';

                    @$go=$_POST["submit"];
// @$reg=$_POST["reg"];
@$d=$_POST["d"];


      if(isset($go))
    {

        ?>

        <h5 style="color: whitesmoke">REPORT  </h5>

        <br/>
        <!-- Names: <?php //echo $fname." ".$lname ?> -->

     <?php

$sql = "SELECT customers.fname,customers.lname,orders.time,food.quantity,categories.name,orders.id,orders.status,orders.date,amount FROM categories,food,orders,customers,users,payments
where customers.id=orders.cid and orders.fid=food.id and food.cid=categories.id and users.id=orders.user_id and payments.customerid=customers.id and payments.oid=orders.id";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                      ?>
                      <table class="table" style="width: 100%">
                      <tr>
                      <td>FIRST NAME</td> <td>LAST NAME</td>  <td>direction</td>
                                      <td>time to go</td> <td>price:</td> <td>plack number</td><td>ticket status</td>
                    </tr>
                      
              <?php
                     $i=0;
                     $sum=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;   
                      
                       @$tid=$row["0"];
                       @$fname=$row["1"]; 
                       @$lname=$row["2"]; 
                       @$da_ke=$row["3"];
                       @$t_ke=$row["4"];
                       @$dir=$row["5"];
                       @$go=$row["6"];
                       @$price=$row["7"];
                       @$pk=$row["8"];
                       @$s=$row["9"];
                       $sum=$sum+$price;


                       ?>

                      <tr>
                        <td><?php echo $fname; ?></td> <td><?php echo $lname; ?></td> 
                         <td><?php echo $dir; ?></td>
                        <td><?php echo $go; ?></td> <td><?php echo $price."Rwf"; ?></td> <td><?php echo $pk; ?></td><td><?php echo $s ?></td>
                        <!-- <td> <a href="view_applicants.php?id=<?php //echo $row["id"]  ?>"> <input type="submit" name="submit" id="teacher_login" class="btn btn-info col-md-12" value="view" /></i> </a></td> -->
                      </tr>

                       

                       

                       <?php
                      }?>
                      
                      </table>
                      <br/><br/>
                      <h5 style="color: whitesmoke">Total amount eaned is <?php echo $sum; ?></h5>
                      <a href='login.php'>    <button name="login" onclick=print(); type='submit'class="btn btn-info btn-user btn-block" style="margin-top:0.5cm ;">
                                    print
                                </button></a>
                      
                      <?php
                    } else {
                     ?>
                     <div class="card-body" style="background-color: whitesmoke;color:blue">
      <h5 class="card-title" style="color:rgb(90, 108, 188)" >There is no customer in at this date </h5>
    </div></div>


<?php
                    }
                }else{

               
                  ?>

                                     <h1 class="h5 text-gray-900 mb-4"><b>GENERATING DAY REPORT REPORT</b> </h1>
                                    </div>
                                    <p>
                                       in order to generate report make sure date is correct in order to get report on that day
    

                                    </p>
                                   
                                    <!-- <hr> -->
                                

<?php
 }

?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



      </div> 
      <!-- //empt -->
        
</div>

   <!-- //container -->
</div>





  

</body>

</html>
