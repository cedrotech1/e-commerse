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
        


      <div class="col-md-2"></div>
        <div class="col-md-8">
        <!-- <div class="col-lg-12"> -->
  


        <?php
                    include '../connection.php';
	
                    $sql = "SELECT * FROM users";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                      ?>
                       <br/>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">List of users</h5>

      <!-- Table with stripped rows -->

      <br/>
      <table class="table  table-responsive">
        <thead>
          <tr>
            <th scope="col">NO</th>
            
            <th scope="col">NAME</th>
            <th scope="col">USERNAME</th>
            
         
            <th scope="col" colspan="3" style="text-align:center">Modify</th>
          </tr>
        </thead> 
        <tbody>

        <?php
                    include '../connection.php';
	
                    $sql = "SELECT * FROM users where type!='admin'";
                
                    	
                    	
                    
                    	
                    
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                     $i=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;
                       ?>

                          <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?php echo $row["name"];?></td>
                      <td><?php echo $row["username"];?></td>
                     
                      
                      
                     
                      <td> <a href="delete_users.php?id=<?php echo $row["id"]  ?>">
                      <input type="submit" name="submit" class="btn btn-info" value="DELETE" />
                    </a></td>
                      <td>  <a href="update-user.php?id=<?php echo $row["id"]  ?>">
                      <input type="submit" name="submit" class="btn btn-info" value="EDIT" /> 
                    </a> </td>

                    </tr>
                       <?php
                      }
                    } else {
                      // echo "0 results";
                    }
                  ?>
                 
       
     
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
      <h5 class="card-title"></h5>
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
