<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $conn = mysqli_connect("localhost", "root", "", "test");


    if ($conn) {
        $user = $_POST["user"];
        $password = $_POST["password"];


        $sql = "SELECT * FROM test1 WHERE user='$user' AND password='$password'";
        $result = mysqli_query($conn, $sql);


        if ($result && mysqli_num_rows($result) > 0) {
            echo "Login successful";
        } else {
            echo "Login failed. Please check your credentials.";
        }

        mysqli_close($conn);
    } else {
        echo "Connection failed. Please try again later.";
    }
}
?>
