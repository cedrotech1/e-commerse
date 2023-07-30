<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>  REGISTER </title>
  <meta content="" name="description">
  <meta content="" name="keywords">


 <?php
include 'bot.php';

?>
 
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body style="background-image:url('./assets/image/food.png');
  opacity: 0.9;position:absolute;
    top:0;
    bottom:0;
    right:0;
    left:0;
    background-repeat: no-repeat;
    background-size: cover;
    z-index:-1;">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4" style="font-family: 'Courier New', Courier, monospace;">REGISTRATION FORM </h5>
                   
                  </div>

                  <form class="row g-3 needs-validation" action='register.php' method='POST' novalidate>

                  <div class="col-12">
                      <label for="yourUsername" class="form-label">FIRST NAME</label>
                      <div class="input-group has-validation">
                       
                        <input type="text" name="fname" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter regnumber.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">LAST NAME</label>
                      <div class="input-group has-validation">
                        <input type="text" name="lname" class="form-control" id="yourUsername" required>
                        
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">USER NAME</label>
                      <div class="input-group has-validation">
                     
                        <input type="text" name="uname" class="form-control" id="yourUsername" required>
                      
                      </div>
                    </div>



                    <div class="col-12">
                      <label for="yourUsername" class="form-label">PHONE</label>
                      <div class="input-group has-validation">
                     
                        <input type="text" name="phone" class="form-control" id="yourUsername" required>
                        
                      </div>
                    </div>

                   

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">PASSWORD</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-key"></i></span> -->
                      <input type="password" name="p" class="form-control" id="yourPassword" required>
                    
                      </div>
                    </div>


                    

                  
                  
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name='login'>create account</button>
                    </div>
                  
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
  <?php


  

include 'connection.php';

@$login=$_POST["login"];
@$fname=$_POST["fname"];
@$lname=$_POST["lname"];
@$uname=$_POST["uname"];
@$p=$_POST["p"];
@$cp=$_POST["cp"];
@$phone=$_POST["phone"];


if(isset($login))
{
 


       
          $sql = "INSERT INTO `customers` (`id`, `fname`, `lname`,`username`, `phone`, `password`)
           VALUES (NULL, '$fname', '$lname', '$uname', '$phone', '$p');";
          $result = mysqli_query($conn, $sql);
          if ($result)
              {

                echo '<script>alert("well registed")</script>';
 
                echo "<script>window.location='./login.php'</script>";
                

              }
              else
              {
                echo '<script>alert("you can not register")</script>';

              }
           


       
  }

     
  
 

?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/js/main.js"></script>

</body>

</html>