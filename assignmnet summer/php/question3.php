<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br>
        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br>
        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br>
        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br>
    </div>
</body>
</html>
<?php
	$investment=$_POST['investment'];
	$interest_rate=$_POST['interest_rate'];
	$years=$_POST['years'];
	
	if(empty($investment))
		$error_message= "
		The investment field should not be empty";
	else if(!is_numeric($investment))
		$error_message="The investment field should be numeric";
	else if($investment<=0)
		$error_message="The investment must be greather than zero";
	else if(empty($interest_rate))
		$error_message= "
		The interest rate field should not be empty";
	else if(!is_numeric($interest_rate))
		$error_message="The interest rate field should be numeric";	
	else if($interest_rate<=0)
		$error_message="The interest rate must be greather than zero";
	else
		$error_message="";
	
	
	
	if($error_message!="")
	{
		include('Investment_page.php');
		exit();
	}
	
	$interest_rate= $investment*$interest_rate*$years*0.01;
	$future_value=$investment+$interest;
	
	$investment_f='$'.number_format($investment,2);
	$yearly_rate_f = $interest_rate . '%';
	$future_value_f = '$' . number_format($future_value, 2);
	
?>


