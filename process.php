<?php
    session_start();
    $server="localhost:3306";
    $username="root";
    $password="";
    $database="data";

    // $server="sql310.epizy.com";
    // $username="epiz_32854958";
    // $password="shAVr4ep2iOY";
    // $database="epiz_32854958_data";

    $name="";
    $address="";
    $phone="";

    $sname=$_GET['name'];
    $ssrc=$_GET['src'];
    $sprice=$_GET['price'];

    $connection=new mysqli($server,$username,$password,$database);
    if(mysqli_connect_error()){
        echo "Cannot connect!";
    }
    $query="SELECT * FROM `userlogin` where `username`='$_SESSION[UserLoginId]'";
    $result=$connection->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $name=$row["name"];
          $address=$row["address"];
          $phone=$row["phone"];
        }
    } else {
        echo "0 results";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style>
        @media only screen and (max-width: 600px) {
            .frm {
                width: 90%;
            }
        }
        @media only screen and (min-width: 600px) {
            .frm {
                width: 50%;
            }
        }
    </style>
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
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
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

    <div class="container mt-4 bg-light">
        <div class="row">
            <h1 class="text-primary text-center py-3">Product Information</h1>
        </div>
        <div class="row py-4">
            <div class="col-md-4 col-12">
                <div class="container">
                    <img src="<?php echo $ssrc; ?>" style="width:100%" alt="">
                </div>
            </div>
            <div class="col-md-8 col-12">
                <h3 class="text-secondary">Name : <span class="text-dark"><?php echo $sname; ?></span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sint rerum accusamus facilis mollitia in, architecto laborum. Corrupti quas quisquam autem, cum sint dolorum doloremque! Possimus porro officia, in autem odit nesciunt quisquam dignissimos praesentium obcaecati vel, architecto eaque culpa cupiditate eos cumque amet debitis magni animi qui exercitationem expedita blanditiis, quod aliquid? Quisquam modi molestiae nihil rem laboriosam minus, est corporis atque eos esse quod amet non, beatae ex dolore ducimus, commodi quae impedit dolorem? Quas optio temporibus corporis.</p>
                <h5>Price : <span><?php echo $sprice; ?></span></h5>
                <!-- <form method="post">
                    <button name="pay" class="btn btn-success">Pay</button>
                </form>
                 -->
            </div>
        </div>
        <div class="row">
            <div class="container">
                <hr class="mx-5">
            </div>
        </div>
        <div class="row py-2">
            <div class="row">
                <h1 class="text-center">Check or Edit Delivery Details</h1>
            </div>
            <div class="row">
                <div class="container py-3 frm">
                    <form action="save.php?sneaker=<?php echo $sname?>&price=<?php echo $sprice?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['UserLoginId']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Enter full name</label>
                            <input type="Text" name="name" value="<?php echo $name; ?>" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Enter address</label>
                            <input type="Text" name="address" value="<?php echo $address; ?>" class="form-control" id="address">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Enter phone number</label>
                            <input type="number" name="phone" value="<?php echo $phone; ?>" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Sneaker name</label>
                            <input type="text" name="sneaker" value="<?php echo $sname; ?>" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Sneaker price</label>
                            <input type="number" name="price" value="<?php echo $sprice; ?>" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="cars">Choose your size:</label>
                            <select name="size" id="size">
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="pay">Submit & Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/bootstrap.js"></script>

    
</body>
</html>