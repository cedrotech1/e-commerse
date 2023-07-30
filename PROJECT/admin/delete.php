<?php
             include '../connection.php';     
                   $id= $_GET['id'];
                 
                    
                  
                      $my_q ="delete from categories  WHERE `id` ='$id'";
                      $results= $conn->query($my_q);
                      if ($results) {


                        echo '<script>alert("Well deleted")</script>';
                        echo "<script>window.location='./view_category.php'</script>";
                  
                        
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                  
                      mysqli_close($conn);
                  
                                      ?>