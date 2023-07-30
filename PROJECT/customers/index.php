<?php
            include 'session.php';
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
   <h3>AVAILABLE  FOODS</h3>
</div>

</div>











    <div class="row">
    <div class="col-md-12" style=" padding:0.5cm"></div>
    <?php
 include '../connection.php';

                        $sql = "SELECT food.description,quantity,status,price,categories.name,food.id FROM categories,food 
                        WHERE food.cid=categories.id and food.status='active'";
           
                        
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
                     <center> <div class="col-md-7 operation" 
                     style=" padding:0.5cm;margin:0.6cm;">


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
                          <td><a href="view_food.php?id=<?php echo $id ?>"><br>
                         <button class="btn btn-primary w-100" type="submit" name='login'
                          style=''>VIEW THIS FOOD </button> </a></td>
                    </tr>



                    <br>
                    </table></div>

                    <div class='col-md-6'>
                    <br><br><img src="../assets/image/food.png" alt="" style='height:auto;width:90%'></div>
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