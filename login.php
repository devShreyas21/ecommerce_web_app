<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <style>
        body{
            background-image: url("./image/2.jpg");
            background-size: cover;
		}
        @media only screen and (max-width: 600px) {
            .con {
                width: 90%;
                height: 100vh;
            }
        }
        @media only screen and (min-width: 600px) {
            .con {
                width: 25%;
                height: 100vh;
            }
        }
    </style>
</head>
<body>
    <div class="container con d-flex align-items-center justify-content-center">
        <div class="container shadow-lg p-3 mb-5 bg-body rounded">
            <h2 class="text-center text-primary">Login Form</h2>
            <form method="POST" class="p-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="user_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="user_password" id="exampleInputPassword1">
                </div>
                <button type="submit" name="logIn" class="btn btn-outline-primary mb-3">Login</button>
                <h5>Dont have account ? <a href="signup.php">SignUp</a></h5>
            </form>
        </div>
    </div>

    <?php

        $server="localhost:3306";
        $username="root";
        $password="";
        $database="data";

        // $server="sql310.epizy.com";
        // $username="epiz_32854958";
        // $password="shAVr4ep2iOY";
        // $database="epiz_32854958_data";

        $connection=new mysqli($server,$username,$password,$database);

        if(mysqli_connect_error()){
            echo "Cannot connect!";
        }

        if(isset($_POST['logIn'])){
            $query="SELECT * FROM `userlogin` WHERE `username`='$_POST[user_name]' AND `password`='$_POST[user_password]'";
            $result=$connection->query($query);
            if(mysqli_num_rows($result)==1){
                session_start();
                $_SESSION['UserLoginId']=$_POST['user_name'];
                header("location: index.php");
            }
            else{
                echo "<script>alert('Invalid userid and password!');</script>";
            }
        }
    ?>


</body>
</html>