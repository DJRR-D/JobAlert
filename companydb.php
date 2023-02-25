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
                $Company_name = $_POST["Company_name"];
                $Email = $_POST["Email"];
                $Current_Address = $_POST["Current_Address"];
                $Phone = $_POST["Phone"];
                $Vacancy = $_POST["Vacancy"];
                $Required_Qualification = $_POST["Required_Qualification"];
                $Average_Salary = $_POST["Average_Salary"];
                $Username = $_POST["Username"];
                $pwd = $_POST["pwd"];
                $query = "INSERT INTO company (Company_name, Email, Current_Address, Phone, Vacancy, Required_Qualification, Average_Salary, Username, pwd ) values('$Company_name', '$Email', '$Current_Address', '$Phone', 'Vacancy', '$Required_Qualification', '$Average_Salary', '$Username', '$pwd')";
                $qr=mysqli_query($con,$query);
                echo "Data Stored Successfully";            
            }
            else{
                echo "Not connected";
            }
        }
    ?>   
    <form method="post">
        Company_name:<input type="text" name="Company_name"><br>
        Email:<input type="text" name="Email"><br>
        Current_Address:<input type="text" name="Current_Address"><br>
        Phone:<input type="text" name="Phone"><br>
        Vacancy:<input type="text" name="Vacancy"><br>
        Required_Qualification:<input type="text" name="Required_Qualification"><br>
        Average_Salary:<input type="text" name="Average_Salary"><br>
        Username:<input type="text" name="Username"><br>
        pwd:<input type="password" name="pwd"><br>
        <input type="submit" name="submit" value="submit">
    </form> 
</body>
</html>