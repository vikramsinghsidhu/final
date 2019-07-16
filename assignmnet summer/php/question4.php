<html>
    <head>
        <title>Ques4</title>
    </head>
   
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .form
        {
            width: 500px;
            background: lightgray;
            height: 450px;
        }
        
        h1
        {
            text-align: center;
            background: lightgreen;
        }
        
        label
        {
            margin: 5px;
            height: 20px;
            font-size: 35px;
        }
        
        input
        {
            float: right;
            margin: 5px;
            height: 30px;
            clear: both;
        }
        
        textarea
        {
            float: right;
            clear: both;
            margin: 5px;
        }
        
        input[type=submit]
        {
            background: lightgreen;
            float: left;
            
        }
        
        input[type=reset]
        {
            background: lightgreen;
			float:left;
            
            
        }
    
    </style>
    
    <body>
        <div class="form">
            <form action="Question_4.php" method="post">
            <h1>Membership Registration Form</h1>
            <label>Membership id</label><input type="text" name="mim"><br>
            <label>First Name</label><input type="text" name="fname"><br>
            <label>Last Name</label><input type="text" name="lname"><br>
            <label>Address</label><textarea name="address"></textarea><br>
            <label>Email</label><input type="text" name="email"><br>
            <label>Phone Number</label><input type="text" name="pnum"><br>
            <label>Validity</label><input type="text" name="validity"><br>
            <label>Other</label><input type="text" name="other"><br>
            <input type="Submit" name="submit">
            <input type="Reset" name="reset">
            </form>
        </div>
        
         <?php
                $id = $_POST['mim'];
                $F_name = $_POST['fname'];
                $L_name = $_POST['lname'];
                $Address = $_POST['address'];
                $Email = $_POST['email'];
                $PHONE = $_POST['pnum'];
        
        if(empty($id))
        {
            echo "membership id is compulsory";
        }
        
          if(empty($F_name))
        {
            echo "First name is compulsory";
        }
        
          if(empty($L_name))
        {
            echo "Last name is necessary";
        }
        
          if(empty($Address))
        {
            echo "Address is necessary";
        }
           
          if(empty($Email))
        {
            echo "Email is necessary";
        }
        
          if(empty($Phone))
        {
            echo "phone number is necessary";
        }
          ?>
    </body>
</html>