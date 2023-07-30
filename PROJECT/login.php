<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Login </title>
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

                  <div class="pt-4 pb-2" style="padding:0.4cm">
                    <h5 class="card-title text-center pb-0 fs-8" style="font-family: 'Courier New', Courier, monospace;">Login </h5>
                     
                  </div>

                  <form class="row g-3 needs-validation" action='login.php' method='POST' novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">USERNAME</label>
                      <div class="input-group has-validation">
                       
                        <input type="text" name="uname" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <div class="input-group has-validation">
                      
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                      </div>
                    </div>

                  
                    <div class="col-md-12">
                      <label for="yourpannel" class="form-label">User</label>
                      <select id="inputState" class="form-select" name="user">
                       
                     
                        <option value='admin'>admin</option>
                        <option value='user'>user</option>
                        <option value='customer'>customer</option>
                      </select>
                    </div>

                    
                    <div class="col-12">
                    <br/><br/><button class="btn btn-primary w-100" type="submit" name='login' >Login</button>
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
@$user=$_POST["user"];
@$username=$_POST["uname"];
@$pass=$_POST["password"];


if(isset($login))
{

        if($user=='admin')
        {
                $sql = "SELECT * FROM users WHERE username='$username' AND password='$pass'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) === 1)
                    {
                      $_SESSION['username'] = 'admin';
                      echo "<script>window.location='./admin/index.php'</script>";
                      // exit();

                    }
                    else
                    {
                        echo '<script>alert("Incorect cridentios")</script>';

                        // exit();

                    }

        }
      elseif($user==='user')
        
        {
          $sql = "SELECT * FROM users WHERE username='$username' AND password='$pass'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) === 1)
              {

                $sql1 = "SELECT id,username FROM users WHERE username='$username' AND password='$pass'";
                $result1 = mysqli_query($conn, $sql1);
                while($row = mysqli_fetch_array($result1)) {
                  $id= $row['id'];
                  $uname= $row['username'];
  
                  }
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $uname;
                echo "<script>window.location='./users/index.php'</script>";
                

              }
              else
              {
                echo '<script>alert("Incorect password")</script>';

              }

        }else{

          $sql = "SELECT * FROM customers WHERE username='$username' AND password='$pass'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) === 1)
              {

                $sql1 = "SELECT id,username FROM customers WHERE username='$username' AND password='$pass'";
                $result1 = mysqli_query($conn, $sql1);
                while($row = mysqli_fetch_array($result1)) {
                  $id= $row['id'];
                  $uname= $row['username'];
  
                  }
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $uname;
                echo "<script>window.location='./customers/index.php'</script>";
                

              }
              else
              {
                echo '<script>alert("Incorect password")</script>';

              }



        }

  }

     
  
 

?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>