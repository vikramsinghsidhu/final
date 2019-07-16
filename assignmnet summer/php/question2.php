
<html>
    <head>
        <title>Ques2</title>
        
        <style>
        .boder
            {
                border: 1px solid black;
            }
        </style>
        
    </head>
  
    <body>
        <div class="border">
            <form action="Ques_2.php" method="post">
            <label for="number1">Number 1:</label><input type="text" name="number1"><br><br>
            <label for="number2">Number 2:</label><input type="text" name="number2"><br><br>
            <?php   
            $n1=$_POST['number1'];
            $n2=$_POST['number2'];
            
            if(empty($n1))
            {
                $error_message="Please enter first value";
                echo $error_message;
            }
            else if(!is_numeric($n1))
            {
                $error_message="The first value entered should be numeric";
                echo $error_message;
            }
            else if($n1<=0)
            {
                $error_message="The first value entered must be greather than zero";
                echo $error_message;
            }

            else
                {
                    $error_message="";
                echo $error_message;
                }
                
            if(empty($n2))
            {
                $error_message=" enter second value";
                echo $error_message;
            }
            else if(!is_numeric($n2))
            {
                $error_message="The second value entered should be numeric";
                echo $error_message;
            }
            else if($n2<=0)
            {
                $error_message="The second value entered must be greather than zero";
                echo $error_message;
            }
            else
                {
                    $error_message="";
                echo $error_message;
                }
                
                
        ?>
            <label>Get result:-</label><input type="text" name="get result"
                                              <?php
                                              if(
                                              isset($_POST['Max'])
                                              )
                                              {
                                                  if($n1>$n2)
                                                {
                                                      echo $n1;
                                                  }
                                                  else if ($n2>$n1)
                                                  {
                                                      echo $n2;
                                                  }
                                                  else
                                                  {
                                                      echo "Both are equal";
                                                  }
                                              }
                                              
                                               else if(
                                              isset($_POST['Min'])
                                              )
                                              {
                                                   if($n1<$n2)
                                                   {
                                                       echo $n1;
                                                   }
                                                   else if ($n2<$n1)
                                                    {
                                                       echo $n2;
                                                    } 
                                                    else
                                                    {
                                                        echo "Both are equal";
                                                    }
                                                }
                                              
                                               else if(
                                              isset($_POST['Avg'])
                                              )
                                              {
                                                   $avrage= (($n1+$n2)/2);
                                                   echo $avrage;
                                               }
                                              ?>
                                              ><br><br>
            <input type="button" value="Max" name="Max">
            <input type="button" value="Min" name="Min">
            <input type="button" value="Avg" name="Avg">
            </form>
                
        </div>
    </body>
</html>