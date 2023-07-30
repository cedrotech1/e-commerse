<?php
            include 'session.php';
?>

<?php
             include '../connection.php';     
             $id= $_GET['id'];

             $sql = "SELECT id,name from categories where id='$id'";

             
                    $result = $conn->query($sql);
                    
                      while($row = mysqli_fetch_array($result)) {

                        // $id=$row['1'];
                       @$d=$row['1'];
                      //  echo @$p=$row['2'];
                        
                     
                       
                      }
                   
                 
                  
                                      ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>update-category </title>
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
        <div class="card-header">UPDATE BUS</div>
        <div class="card-body">       <form method="post" id="teacher_login_form">
            <div class="form-group">
              <label>category</label>
              <input type="name" name="p" value='<?php echo $d;  ?>' class="form-control" />
              <span id="error_teacher_password" class="text-danger"></span>
            </div>
            <br/>
      
            <br/>
            
            

            <div class="form-group">
              <input type="submit" name="submit" id="teacher_login" class="btn btn-info" value="save changes" />

              <input type="reset" name="reset" id="teacher_login" class="btn btn-danger" value="CLEAN DATA" />
            </div>
          </form>



        </div>
      </div>
    </div>
        </div>
        <div class="col-md-4"></div>
        </div>
        <!-- //row -->
<br/>
       
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

@$p=$_POST["p"];




      if(isset($go))
    {
	if($p!='' )
	{
	  
   



      $sql = "UPDATE `categories` SET  `name` = '$p'  WHERE `categories`.`id` = $id;";


          if (mysqli_query($conn, $sql)) {

            echo '<script>alert("updated successfull")</script>';
            echo "<script>window.location='./add-category.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);


	  }else{
		 echo '<script>alert("Make sure all field are filled")</script>';
	  }
	  
	  
	  
	  }
	  


?>