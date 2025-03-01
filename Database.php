<?php
$host = "localhost";
$db_name = "account";
$username = "root";
$password = "5553@sh";
$conn = new mysqli($host, $username, $password, $db_name);
$mess = '';

if ($conn->connect_error) {
    echo "Connection Fail" . $conn->connect_error;
} else {
    // echo "<script>  alert('Hello! I am an alert box!');</script>";
}


session_start();

if (isset($_REQUEST['loginbtn'])) {
    $username = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $get_data = "SELECT name,username,password FROM register";
    $data = $conn->query($get_data);
    if ($data->num_rows > 0) {
        if ($row = $data->fetch_assoc()) {
            if ($row['username'] == $username && $row['password'] == $pass) {
                header("Location:./abc.php");
                echo "login Successfully";
                $_SESSION["name"] = $row['name'];
            } else {
                echo "Enter Correct Username or Password";
            }
        }
    }
}
