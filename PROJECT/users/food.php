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
        

      <div class="col-md-3"></div>
        <div class="col-md-5">
        <div class="col-md-12" style="margin-top:20px;">
      <div class="card">
        <div class="card-header">ADD FOOD</div>
        <div class="card-body">
        <form method="post" id="teacher_login_form">
            <div class="form-group">
              <label>CATEGORY</label>
              <select id="inputState" class="form-select" name="c">
        

          <?php
                include '../connection.php';

                $sql = "SELECT id,name FROM categorIES";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_array($result)) {
                  // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                  ?>
                
                  
                  <option  value='<?php echo $row["0"];?>'><?php echo $row["1"]?></option>
                  
                  <?php
                  }
                } else {
                  echo "0 results";
                }
              ?>
                    
            
          </select>
            </div>
            <br/> 
            
            <br/>

            
<div class="form-group">
  <label>description</label>
  <textarea name='dis' class="form-control"></textarea>
 
</div>

<br/>

<div class="form-group">
  <label>price</label>
  <input type="number" name="p" id="teacher_password" class="form-control" />
  <span id="error_teacher_password" class="text-danger"></span>
</div>
<br/>


<div class="form-group">
  <label>Available Qantity</label>
  <input type="number" name="q" id="teacher_password" class="form-control" />
  <span id="error_teacher_password" class="text-danger"></span>
</div>
<br/>

        

          
            
            

            <div class="form-group">
              <input type="submit" name="submit" id="teacher_login" class="btn btn-info" value="ADD FOOD" />

            
            </div>
          </form>

        </div>
      </div>
      </div></div>
        <!-- <div class="col-md-4"></div> -->
       
        <!-- //row -->
<br/>
       

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