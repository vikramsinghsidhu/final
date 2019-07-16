
<html>
    <head>
        <title>Ques1</title>
    </head>
    
    <body>
       
        <h1>input radius value and get the value of sphere</h1>
        <form action="Ques_1.php" method="post">
            <label> Radius: </label><input type="text" name="radius"><br>
            <label> Volume: </label><input type="text" name="volume" value="<?php
                  if(isset($_POST['submit']))
                  {
                    $radius=$_POST['radius'];
                    $vol=((3/4)*3.14*$radius*$radius*$radius);
                    echo $vol;
                  }
              ?>">

            <br>
            <input type="submit" name="submit" value="calculate">

        </form>
        
    
    </body>
</html>