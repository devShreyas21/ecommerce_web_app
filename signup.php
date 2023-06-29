<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <h2 class="text-center text-primary">Sign up Form</h2>

            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <input type="number" class="form-control" name="phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" name="signUp" class="btn btn-primary">Sign up</button>
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

        $username=$_POST['email'];
        $password=$_POST['password'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];

        $connection=new mysqli($server,$username,$password,$database);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
          }
          
          $query="INSERT INTO `userlogin` (`username`, `password`, `name`, `phone`, `address`) VALUES ('$username', '$password', '$name', '$phone', '$address')";
          
          if ($connection->query($query) === TRUE) {
            echo "New record created successfully";
            header("location: login.php");

          } else {
            echo "Error: " . $query . "<br>" . $connection->error;
          }
          
          $connection->close();

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>