<?php
            include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CATEGORY </title>
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
        <div class="card-header">ADD CATEGORY FORM</div>
        <div class="card-body">
          <form method="post" id="teacher_login_form">
            <div class="form-group">
              <label>FOOD CATEGORY</label>
              <input type="text" name="f"  class="form-control" />
              <span id="error_teacher_password" class="text-danger"></span>
            </div>
            <br/> 
            <br/>
            
            

            <div class="form-group">
              <input type="submit" name="submit" id="teacher_login" class="btn btn-info" value="ADD FOOD CATEGORY" />

            </div>
          </form>



          
        </div>
      </div>
      </div></div>
        <!-- <div class="col-md-4"></div> -->
       
        <!-- //row -->
<br/>
        <!-- <div class="row"> -->
       
       

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
@$d=$_POST["f"];
// @$p=$_POST["p"];




      if(isset($go))
    {
	if($d!='' )
	{
	  
    $sql = "SELECT name FROM categories where name='$d'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {



          $sql = "INSERT INTO `categories` (`id`, `name`) VALUES (NULL, '$d')";

          if (mysqli_query($conn, $sql)) {

            echo '<script>alert("category Added successfull")</script>';
            echo "<script>window.location='./view_category.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);


        }else{
          echo '<script>alert("category exist")</script>';
         }


      
	  }else{
		 echo '<script>alert("Make sure all field are filled")</script>';
	  }
	  
	  
	  
	  }
	  


?>