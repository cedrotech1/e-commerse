<?php
            include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FOOD </title>
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
        


        
        <div class="col-md-12">
        <!-- <div class="col-lg-12"> -->
  


        <?php
                    include '../connection.php';
	
                    $sql = "SELECT food.description,quantity,status,price,categories.name FROM categories,food WHERE food.cid=categories.id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                      ?>
                       <br/>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title"> LIST OF FOOD</h5>

      <!-- Table with stripped rows -->

      <br/>
      <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <table class="table" style="width: 100%">
         <td>category name</td>  <td>discription</td><td>quantity</td><td>price</td><td>status</td><td>modify</td>
        </thead> 
        <tbody>

        <?php
                    include '../connection.php';
	
                    $sql = "SELECT food.description,quantity,status,price,categories.name,food.id FROM categories,food WHERE food.cid=categories.id";
    
                    $result = $conn->query($sql);
                    
                    $i=0;
                    $sum=0;
                     while($row = mysqli_fetch_array($result)) {
                      $i++;

                      @$dis=$row["0"];
                      @$q=$row["1"];
                      @$s=$row["2"];
                      @$p=$row["3"];
                      @$c=$row["4"];
                      @$id=$row["5"];
                     
                     

                      ?>

                     <tr>
                       
                     <td><?php echo $c; ?></td> <td><?php echo $dis; ?></td> <td><?php echo $q; ?></td><td><?php echo $p." RWF"; ?></td>
                     <td><?php echo $s; ?></td>
                    


                       <td> <a href="food_status.php?id=<?php echo $id ?>"> <input type="submit" name="submit" id="teacher_login" class="btn btn-info col-md-12" value="MODIFY" /></i> </a></td>
                       <!-- <td> <a href="view_applicants.php?id=<?php //echo $row["id"]  ?>"> <input type="submit" name="submit" id="teacher_login" class="btn btn-info col-md-12" value="view" /></i> </a></td> -->
                     </tr>

                      

                      

                      <?php
                     }?>
                     
                     </table>
                 
       
     
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
      <h5 class="card-title">no food recorded</h5>
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
<?php
include '../connection.php';




@$go=$_POST["submit"];
// @$reg=$_POST["reg"];
@$c=$_POST["c"];
@$p=$_POST["p"];
@$dis=$_POST["dis"];
@$q=$_POST["q"];




      if(isset($go))
    {
	
	  


          $sql = "INSERT INTO `food` (`id`, `cid`, `description`, `quantity`, `status`, `price`) VALUES (NULL, '$c', '$dis', '$q', 'active', '$p');";

          if (mysqli_query($conn, $sql)) {

            echo '<script>alert("food Added successfull")</script>';
            echo "<script>window.location='./food.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);


  
      
	  
	  
	  
	  
	  }
	  


?>