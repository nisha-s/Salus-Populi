<?php
    $con=mysqli_connect("localhost:3307","root","");
    if(!$con)
	{
		echo "not connected";
	}
    if(!mysqli_select_db($con,'login'))
    {
        echo "databse not selected";
    }
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $department=$_POST['depart'];
    $date=$_POST['date'];
    $time=$_POST['time_'];	
    $hospital=$_POST['hosp_'];
    $sql="INSERT INTO appointments(firstname,lastname,email,numbers,department,date,time,hospital) VALUES ('$firstname','$lastname','$email','$number','$department','$date','$time','$hospital')";
    if(!mysqli_query($con,$sql))
    {
        echo "not inserted";
    }
    else
    {
        echo "inserted";
    }
    header("refresh:1; url=home.html");
    
?>
