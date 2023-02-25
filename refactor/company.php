<?php
    if(isset($_POST['submit'])){
        $server="localhost";
        $password="";
        $username="root";
        $db="refactor";
        $con=mysqli_connect($server,$username,$password,$db);
        if($con==true){
            echo "Connected";
            $Company_Name = $_POST["Company_Name"];
            $Email_Id = $_POST["Email_Id"];
            $phone = $_POST["phone"]
            $current_address = $_POST["current_address"];
            $Vacancies = $_POST["Vacancies"]
            $Required_Qualification = $_POST["Required_Qualification"];
            $Average_Salary = $_POST["Average_Salary"];
            $Branch_Name = $_POST["Branch_Name"];
            $Username = $_POST["Username"];
            $pwd = $_POST["pwd"];
            $query="INSERT into company(Company_Name, Email_Id, phone, current_address, Vacancies, Required_Qualification, Average_Salary,Branch_Name, Username, pwd) values('$Company_Name', '$Email_Id', '$phone', '$current_address', '$Vacancies', '$Required_Qualification' '$Average_Salary', '$Branch_Name', '$Username', '$pwd' );"
            $qr=mysqli_query($con,$query);
            echo "Data Stored successfully";
        }
    }
?>