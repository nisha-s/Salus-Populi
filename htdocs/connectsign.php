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
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['number'];
    $password=$_POST['pw'];
    $sql="INSERT INTO signtab(names,email,contact,passwords) VALUES ('$name','$email','$contact','$password')";
    if(!mysqli_query($con,$sql))
    {
        echo "not inserted";
    }
    else
    {
        echo "inserted";
    }
    header("refresh:2; url=home.html");
?>