<?php
$servername="localhost";
$username="root";
$password="root";
$dbname= "web";
$conn=new mysqli($servername,$username,"",$dbname);
$username=$_POST["username"];
$sql="select * from form where username='$username'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        if($row["password"]==$_POST["password"]){
            echo "Log in Succesfull";
        }else{
            echo "Wrong Password";
        }
    }
}else{
    echo "No record Found";
}
$conn->close()
?> 
