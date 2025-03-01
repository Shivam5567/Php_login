<?php
include './Database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
            width: 100%;
            background-image: url('./21614422_6507516.jpg');
            backdrop-filter: blur(5px);
            object-fit: contain;
            overflow: hidden;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 92.4%;
            position: absolute;
        }

        .container {
            width: 350px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(161, 161, 161, 0.28);
            background-color: rgba(0, 0, 0, 0.56);
            color: rgba(255, 255, 255, 0.66);

        }

        .heading {
            width: 100%;
            height: 80px;
        }

        .register {
            display: none;
        }

        .signup_button {
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: end;

            button {
                background-color: transparent;
                color: rgba(208, 208, 208, 0.52);
                border-radius: 50px;
            }
        }
        .navbar{
            background-color:rgba(0, 0, 0, 0.77);
            height:80px;
            font-size:18px;
        }
    </style>
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" >Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="box ">
        <div class="container ">

            <form class="login" id="log" action="">
                <div class="heading">

                    <h1>Login</h1>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input required name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"> </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button name="loginbtn" type="submit" class="btn btn-primary">Login</button>
                <div class="signup_button">
                    <button type="button" id="signup" onclick="myFunction()" class="btn btn-light">Signup</button>
                </div>

            </form>


            <form class="register" id="reg" action="" onsubmit="false">
                <div class="heading">

                    <h1>Sign Up</h1>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"> </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input required name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"> </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button name="signupbtn" type="submit" class="btn btn-primary">Signup</button>
            </form>

            <p><?php
                if (isset($_REQUEST['signupbtn'])) {

                    if (isset($_REQUEST)) {
                        $name = $_REQUEST['name'];
                        $username = $_REQUEST['username'];
                        $pass = $_REQUEST['password'];
                        $get_data = "SELECT username FROM register";
                        $insert_data = "INSERT INTO register (name,username,password) VALUES ('$name','$username', '$pass')";
                        if ($conn->query($get_data)->num_rows > 0) {
                            echo "<div class='alert alert-primary' role='alert'>
                            A simple primary alert—check it out!
                                                    </div>";
                        } elseif ($conn->query($insert_data) == true) {
                            echo "New Record Created";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                }
                ?></p>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function myFunction() {
        // Get the value of the input field with id="numb"
        let x = document.getElementById("log");
        let y = document.getElementById('reg');
        // If x is Not a Number or less than one or greater than 10
        x.style.display = "none";
        y.style.display = "block";

    }
</script>

</html>