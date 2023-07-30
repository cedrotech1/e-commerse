<?php
            include 'session.php';
            $id= $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>customer </title>
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
   <h3> FOODS</h3>
</div>

</div>









    <div class="row">
    <div class="col-md-12" style=" padding:0.5cm"></div>
    <?php
 include '../connection.php';

                        $sql = "SELECT food.description,quantity,status,price,categories.name,food.id FROM categories,food 
                        WHERE food.cid=categories.id and food.status='active' and food.id='$id'";
           
                        
                    $result = $conn->query($sql);

                 
                     $i=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;

                       @$dis=$row["0"];
                       @$q=$row["1"];
                       @$s=$row["2"];
                       @$p=$row["3"];
                       @$c=$row["4"];
                       @$id=$row["5"];
                      
                     ?>
                     <!-- <div class="col-md-1"></div> -->
                     <center> <div class="col-md-7 operation" style=" padding:0.5cm;margin:0.6cm;">


                     <div class="row">
 <div class="col-md-6">
     <table class='' border='0'>
                     

                        <tr>
                            <td><h4> <b>category :<?php echo $c; ?></b></h4> </td>
                       </tr>

                      
                     <tr>
                        <td>
                          <p style="margin-left:1cm">
                              <?php echo $dis; ?>
                          </p>
                        </td>
                     </tr>
 

                    <tr>
                         <td>price:  <?php echo $p." RWF"; ?></td>  <td> </td>
                    </tr>

                    <tr>
                    <form method="post" action="">
                         <td>quantity: in plates
                         <div class="form-group">
             
              <input type="number" name="q" value='<?php echo $d;  ?>' class="form-control" />
              <span id="error_teacher_password" class="text-danger"></span>
            </div>
                         </td>
                    </tr>

                    <tr>
                         <td>
                         <br>
                         
                         <button class="btn btn-primary w-100" type="submit" name='submit'>
                         ORDER NOW </button> </td>
                         </form>
                        </tr>


                   



                    <br>
                    </table></div>

                    <div class='col-md-6'>
                      <br><br>
                    <img src="../assets/image/food.png" alt="" style='height:auto;width:90%'></div>
                    </div>
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



<?php
include '../connection.php';
@$go=$_POST["submit"];
@$q=$_POST["q"];
$da= date("Y-m-d");
$m= date("h:m:s");

      if(isset($go))
    {

      $s = "SELECT price,quantity FROM food where id='$id'";
      $re = $conn->query($s);


        while($rowx = mysqli_fetch_array($re)) {
         $price=$rowx['0'];
         echo $oq=$rowx[1];
        }

        $total=$price*$q;
    
 $dif=$oq-$q;


        if($q<=$oq)
      {
       
      

          $sql = "INSERT INTO `orders` (`id`, `fid`, `quantity`, `cid`, `date`, `time`, `status`, `user_id`)
           VALUES (NULL, '$id', '$q', '$idd', '$da', '$m', 'paid', '');";

          if (mysqli_query($conn, $sql)) {

           
            $si = " UPDATE `food` SET `quantity` = '$dif' WHERE `food`.`id` = '$id'";
            $rei = $conn->query($si);





            $s = "SELECT id FROM orders where cid='$idd' and date='$da' and time='$m'";
            $re = $conn->query($s);

            if ($re->num_rows > 0) {
             
              while($rowx = mysqli_fetch_array($re)) {
               $po=$rowx['0'];
              }




            $sqlx = "INSERT INTO `payments` (`id`, `customerid`, `oid`, `amount`, `invoice`, `date_created`) VALUES (NULL, '$idd', '$po', '$total', '', current_timestamp())";
            mysqli_query($conn, $sqlx);

            
            echo '<script>alert("order saved successfull")</script>';
            echo "<script>window.location='./index.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);


        }

      }else{
        echo '<script>alert("that quantity is not available")</script>';
      }






      }
        


      
	  
	


?>