<?php
            include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>users </title>
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
        
      <div class="col-md-4"></div>

        <div class="col-md-4">
        <div class="col-md-12" style="margin-top:20px;">
      <div class="card">
        <div class="card-header">ADD USERS</div>
        <div class="card-body">
          <form method="post" id="teacher_login_form">

         

            <div class="form-group">
              <label>NAMES</label>
              <input type="text" name="n"  class="form-control" />
              <span id="error_teacher_password" class="text-danger"></span>
            </div>
            <br/>

            <div class="form-group">
              <label>USERNAME</label>
              <input type="text" name="un"  class="form-control" />
              <span id="error_teacher_password" class="text-danger"></span>
            </div>
            <br/>

           


            <div class="form-group">
              <label>PASSWORD</label>
              <input type="password" name="p"  class="form-control" />
              <span id="error_teacher_password" class="text-danger"></span>
            </div>
            <br/>

            <div class="form-group">
              <input type="submit" name="submit" id="teacher_login" class="btn btn-info" value="SAVE" />

            </div>
          </form>
        </div>
      </div>
      </div></div>
  
<br/>

        </div>
      
      </div>

  
    </div>
</div>







  

</body>

</html>
<?php
include '../connection.php';




@$go=$_POST["submit"];

@$n=$_POST["n"];
@$un=$_POST["un"];
@$p=$_POST["p"];





      if(isset($go))
    {
	if($n!='' OR $d!='' OR $p!='')
	{
	  


          $sql = "INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`)
           VALUES (NULL, '$n', '$un', '$p', 'user');";

          if (mysqli_query($conn, $sql)) {

            echo '<script>alert("user Added successfull")</script>';
            echo "<script>window.location='./users.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);
      
	  }else{
		 echo '<script>alert("Make sure all field are filled")</script>';
	  }
	  
	  
	  
	  }
	  


?>