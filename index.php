<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Your Best Sneakers</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" method="post">
                <button class="btn btn-danger" name="log-out" type="submit">Logout</button>
            </form>
            <?php
                if(isset($_POST['log-out'])){
                    session_destroy();
                    echo "<script>alert('Logged out successfully!')</script>";
                }
            ?>
            </div>
        </div>
    </nav>

    <div class="container bg-light my-2">
        <div class="row">
            <h1 class="text-center text-primary py-4">Sneakers For Men</h1>
        </div>
        
        <div class="row d-flex justify-content-center align-items-center  mb-4">

        <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "data";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                    echo "<div class='col-md-4 col-12 d-flex justify-content-center  mb-4'>
                        <div class='card' style='width: 18rem;'>
                            <img src='".$row["imgSrc"]."' class='card-img-top' >
                            <div class='card-body'>
                                <h5 class='card-title'>".$row["title"]."</h5>
                                <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h5>Price : Rs.".$row["price"]."</h5>
                                <div>
                                    <form action='send.php?name=Sneaker 1&price=1200&src=./img/one.jpg' method='post'>
                                        <button class='btn btn-primary' name='b1'>Buy</button>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> ";
                    }
                } else {
                echo "0 results";
                }
                $conn->close();
            ?>

            
        </div>
    </div>

    <script src="./js/bootstrap.js"></script>
</body>
</html>

