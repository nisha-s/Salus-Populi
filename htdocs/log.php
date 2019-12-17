<html>

<style>
            body {
                font-family: sans-serif;
                margin: 200px;
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
        </style>
        <body>
            <center>
                <h1 style="color:ghostwhite">Appointments Log</h1>
                <table>
                    <tr>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>number</th>
                        <th>department</th>
                        <th>date</th>
                        <th>time</th>
                        <th>hospital</th>
                    </tr><br>
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
                         header("refresh:1; url=home.html");
                      }
                      else
                      {
                         header("refresh:1; url=login1.html");
                      }
                 }
                 ?>   

                        