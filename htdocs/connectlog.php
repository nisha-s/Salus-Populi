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
    $name=$_POST['fname'];
    $password=$_POST['PASSWORD'];
    $sql="INSERT INTO logintab (names,passwords) VALUES ('$name','$password')";
    if(!mysqli_query($con,$sql))
    {
        echo "not inserted";
    }
    else
    {
        #echo "inserted";
    }
    ?>
    <?php
    $conn=mysqli_connect("localhost:3307","root","");
    $name=$_POST['fname'];
    $password=$_POST['PASSWORD'];
    if(!mysqli_select_db($conn,'login'))
    {
        echo "databse not selected";
    }
    $sql1 ="SELECT * FROM signtab WHERE names='$name'";
    $result = mysqli_query($conn, $sql1)or die("Error: " . mysqli_error($conn));
    while($row = mysqli_fetch_array($result)) {
         if($row['passwords']==$password){
           # header("refresh:1; url=home.html");
         }
         else
         {
            header("refresh:1; url=login1.html");
         }
    }
    ?>
    <html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
            body {
                font-family: sans-serif;
		margin:0;
                margin-top: 75px;
                background-image: url("watermark.png");
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            table,th,td{
                border:2px ghostwhite;
                width:1100px;
            }

            label.required:after {
                content:'*';
                color:red;
            }

            span.error {
                background-color:rgb(255, 223, 223);
                color:red;
            }
            .row {
                margin:10px;
            }
            .mybutton {
            padding: 10px;
            display: block;
            float: right;
            background-color: HighlightText;
            color: white;
            text-align: center;
            position: absolute;
            top: 5px;
            right: 10px;
            }
            .navbar {
                background-color: black;
                position: fixed;
                top: 0%;
                width: 100%;
            }
            .navbar a {
                float: left;
                color: ghostwhite;
                text-align: right;
                text-decoration: none;
                padding: 15px 20px;
                font-size: larger;
            }
        </style>
        </head>
        <body>
        <div class="navbar">
            <a href="Home.html">Salus Populi</a>
            <a href="Home.html">Home</a>
            <a href="appointment.html">Appointment</a>
            <a href="faq.html">FAQs</a>
            <a href="ins.html">Insurance</a>
         
        </div>
            <center>
                <h1 style="color:ghostwhite">Appointments Log</h1>
                <div id="mybutton">
                    <a href="appointment.html" class="mybutton1" style="color:ghostwhite">Form Link</a>
                </div>
                <table>
                    <tr>
                        <th style="color:ghostwhite">firstname</th>
                        <th style="color:ghostwhite">lastname</th>
                        <th style="color:ghostwhite">email</th>
                        <th style="color:ghostwhite">number</th>
                        <th style="color:ghostwhite">department</th>
                        <th style="color:ghostwhite">date</th>
                        <th style="color:ghostwhite">time</th>
                        <th style="color:ghostwhite">hospital</th>
                    </tr><br>
                 <?php
                 $conn=mysqli_connect("localhost:3307","root","");
                 $name=$_POST['fname'];
                 $password=$_POST['PASSWORD'];
                 if(!mysqli_select_db($conn,'login'))
                 {
                     echo "databse not selected";
                 }
                 $sql1 ="SELECT * FROM appointments WHERE firstname='$name'";
                 $result = mysqli_query($conn, $sql1)or die("Error: " . mysqli_error($conn));
                 while($row = mysqli_fetch_array($result)) {
                     ?>
                     <tr>
                         <td style="color:ghostwhite"><?php echo $row['firstname'];?></td>
                         <td style="color:ghostwhite"><?php echo $row['lastname'];?></td>
                         <td style="color:ghostwhite"><?php echo $row['email'];?></td>
                         <td style="color:ghostwhite"><?php echo $row['numbers'];?></td>
                         <td style="color:ghostwhite"><?php echo $row['department'];?></td>
                         <td style="color:ghostwhite"><?php echo $row['date'];?></td>
                         <td style="color:ghostwhite"><?php echo $row['time'];?></td>
                         <td style="color:ghostwhite"><?php echo $row['hospital'];?></td>
                 </tr>
                <?php }
                 
                 ?></table>
                 </center>
                 </body>
                 </html>


                        
