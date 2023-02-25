<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['submit']))
        {
            $server="localhost";
            $password="";
            $username="root";
            $db="refaktor";
            $con=mysqli_connect($server,$username,$password,$db);
            if($con==true){
                echo "Connected";
                $First_name = $_POST["First_name"];
                $Last_name = $_POST["Last_name"];
                $Gender = $_POST["Gender"];
                $DOB = $_POST["DOB"];
                $Email = $_POST["Email"];
                $Current_Address = $_POST["Current_Address"];
                $Phone = $_POST["Phone"];
                $Qualification = $_POST["Qualification"];
                $Prefered_Job = $_POST["Prefered_Job"];
                $Skills = $_POST["Skills"];
                $Username = $_POST["Username"];
                $pwd = $_POST["pwd"];
                $query = "INSERT INTO applicant (First_name, Last_name, Gender, DOB, Email, Current_Address, Phone, Qualification, Prefered_Job, Skills, Username, pwd ) values('$First_name', '$Last_name', '$Gender', '$DOB', '$Email', '$Current_Address', '$Phone', '$Qualification', '$Prefered_Job', '$Skills', '$Username', '$pwd')";
                $qr=mysqli_query($con,$query);
                echo "Data Stored Successfully";            
            }
            else{
                echo "Not connected";
            }
        }
    ?>   
    <form method="post">
        First_name:<input type="text"name="First_name"><br>
        Last_name:<input type="text" name="Last_name"><br>
        Gender:<input type="text" name="Gender"><br>
        DOB:<input type="text" name="DOB"><br>
        Email:<input type="text" name="Email"><br>
        Current_Address:<input type="text" name="Current_Address"><br>
        Phone:<input type="text" name="Phone"><br>
        Qualification:<input type="text" name="Qualification"><br>
        Prefered_Job:<input type="text" name="Prefered_Job"><br>
        Skills:<input type="text" name="Skills"><br>
        Username:<input type="text" name="Username"><br>
        pwd:<input type="password" name="pwd"><br>
        <input type="submit" name="submit" value="submit">
    </form> 
</body>
</html>