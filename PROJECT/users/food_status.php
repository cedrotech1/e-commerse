<?php
            include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>food </title>
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





        <div class="row justify-content-center">

<div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            <div class="col-lg-4 d-none d-lg-block"></div>
                <div class="col-lg-5 d-none d-lg-block">
                    
                

                <form method="post" id="" style="margin:1cm">

            

          <div class="form-group">
            
              <label>FOOD STATUS</label>
              <br> <br>
             

              <select id="inputState" class="form-select" name="status">
                      <!-- <option selected>Choose...</option> -->

                     
                              
                              <option  value='disactivate'>DISACTIVATE</option>
                              <option  value='active'>ACTIVE</option>
                             
                              
                             
                                
                        
                      </select>
            </div><br/>


           

    

            <div class="form-group">
              <input type="submit" name="submit" id="teacher_login" class="btn btn-info col-md-12" value="SAVE CHANGES" />

              
            </div>
          </form>





                </div>
                
</div>

</div>





      </div> 
      <!-- //empt -->

    <!-- //row -->    
</div>

   <!-- //container -->
</div>





  

</body>

</html>


<?php
include '../connection.php';




@$go=$_POST["submit"];
@$cid=$_GET["id"];

echo @$t=$_POST["status"];




      if(isset($go))
    {
	

        //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

          $sql = "UPDATE `food` SET `status` = '$t' WHERE `food`.`id` = '$cid'";

          if (mysqli_query($conn, $sql)) {

              
          
           

            echo '<script>alert("Well updated")</script>';
            echo "<script>window.location='./food.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);
      
	
	  
	  
	  }
	  


?>
