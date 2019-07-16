<?php
include('connect1.php');
?>
<html>
    <body>
        <form>
            Name:<input type="text" name="fname"><br><br>
            Email:<input type="text" name="email"><br><br>
            <input type="submit" value="SUBMIT" name="email"><br><br>
        </form>
    </body>
</html>
<?php
if (isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    
    $sql="INSERT INTO reg(fname,email)VALUES('$fname','$email')";
    
    if ($conn->query($sql) ===TRUE) {
        echo"<script>alert('new record created successfully);</script>";
    }
    else{
        echo " ERROR: " . $sql . "<br>" . $conn->error;
    }
}
?>