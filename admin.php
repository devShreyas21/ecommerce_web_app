<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row py-4">
            <h2 class="text-center">Store Panel</h2>
        </div>
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <td>Email</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>Sneaker</td>
                    <td>Paid</td>
                    <td>Dezierd Size</td>
                </tr>
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

                    $query="SELECT * FROM `forstore`";
                    $result=$connection->query($query);

                    if($result->num_rows > 0){
                        while($row=$result->fetch_assoc()){
                            echo "<tr><td>".$row['email']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['phone']."</td><td>".$row['sneaker']."</td><td>".$row['price']."</td><td>".$row['size']."</td></tr>";
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>