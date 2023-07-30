<?php
            include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>student </title>
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


   <!-- //empt -->


   <div class="card o-hidden border-0  my-5 myp">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row myp" style="padding:0.7cm ;">
                            <div class="col-lg-5 d-none d-lg-block">
                            <div class="card" style="padding:0cm ;">
        <div class="card-header">SEARCH YOUR MARKS</div>
        <div class="card-body">
          <form method="post" id="teacher_login_form">

            

          <div class="form-group">
              <label>POSTS</label>
             

              <select id="inputState" class="form-select" name="pid">
                      <!-- <option selected>Choose...</option> -->

                      <?php
                            include '../connection.php';
          
                            $sql = "SELECT id,title FROM position";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = mysqli_fetch_array($result)) {
                              // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                              ?>
                            
                              
                              <option  value='<?php echo $row["0"];?>'><?php echo $row["1"];?></option>
                              
                              <?php
                              }
                            } else {
                              echo "0 results";
                            }
                          ?>
                                
                        
                      </select>
            </div><br/>


           

    

            <div class="form-group">
              <input type="submit" name="submit" id="teacher_login" class="btn btn-info col-md-12" value="GET APPLICANTS" />

              
            </div>
          </form>
        </div>
      </div>
                            </div>
                            <div class="col-lg-7 ">
                                <div class="p-5">
                                    <div class="text-left">



                                    

                                    <?php
                    include '../connection.php';

                    @$go=$_POST["submit"];
// @$reg=$_POST["reg"];
@$pid=$_POST["pid"];


      if(isset($go))
    {

        ?>

        <h5>APPLICANTS  </h5>

        <br/>
        <!-- Names: <?php //echo $fname." ".$lname ?> -->

        
        <table style="width: 80%">
        <?php

                    $sql = "SELECT * from applicants where p_id='$pid'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                     $i=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;

                       $reg=$row["0"];
                       $fname=$row["1"];
                       $lname=$row["2"];
                       $title=$row["3"];
                       $score=$row["4"];

                       ?>

                      <tr>
                        <td><?php echo $fname; ?></td> <td><?php echo $lname; ?></td>
                        <td> <a href="view_applicants.php?id=<?php echo $row["id"]  ?>"> <input type="submit" name="submit" id="teacher_login" class="btn btn-info col-md-12" value="view" /></i> </a></td>
                      </tr>

                       

                       

                       <?php
                      }?>
                      </table>
                      <a href='login.php'>    <button name="login" onclick=print(); type='submit'class="btn btn-info btn-user btn-block" style="margin-top:2.5cm ;">
                                    print
                                </button></a>
                      
                      <?php
                    } else {
                     ?>
                     <div class="card-body" style="background-color: whitesmoke;">
      <h5 class="card-title">there is no applicant yet </h5>
    </div></div>


<?php
                    }
                }else{

               
                  ?>

                                     <h1 class="h5 text-gray-900 mb-4"><b>SEACHING MARKS TERMS AND CONDITION</b> </h1>
                                    </div>
                                    <p>
                                       Make sure you choose write accademic year and semester in other ways you will gnot get your marks
                                       property
    

                                    </p>
                                   
                                    <!-- <hr> -->
                                <br/> 
                                    <a href='login.php'>    <button name="login" type='submit'class="btn btn-primary btn-user btn-block col-md-6">
                                    readmore....
                                </button></a>

<?php
 }

?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>











      </div> 
      <!-- //empt -->
        
</div>

   <!-- //container -->
</div>





  

</body>

</html>
