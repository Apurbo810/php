<?php
    $user = $_POST["user"];
    $password = $_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $conn = mysqli_connect("localhost", "root", "", "test");
if($password==$confirmpassword)
{
        $sql2 = "SELECT user from test1 where user='$user'";
        $q1=mysqli_query($conn, $sql2);
        if(mysqli_num_rows($q1)>0)
        {
            echo "User already exists";
        }
    
    else
    {
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"])) 
{
    if(isset($_POST["user"]))
    {
    $sql = "INSERT INTO test1 (user, password) VALUES ('$user', '$password')";
    $q=mysqli_query($conn, $sql);
    if($q){
    echo "Registered successfully";
    }
    else{   
        echo "Registration failed";
    }
    }
}
}
}
else
{
echo "password did not match";
}
?>