<?php
include "./Database.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .navbar {
        background-color: rgba(0, 0, 0, 0.77);
        height: 80px;
        font-size: 18px;
  
    }
    .user{
        width: 150px;
        border: solid black;
    
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
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

    <form action="" method="post">
        
        <button name="logout" value="set">Logout</button>
        <div class="user">
        <?php
        echo $_SESSION['name'];
        if (isset($_POST['logout'])) {
            if ($_POST['logout'] == "set") {
                session_destroy();
                echo "sesson end";
                header("Location:./Login.php");
            }
        }

        ?>
        </div>
</nav>


</form>