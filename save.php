<!-- <button id="rzp-button1">Pay</button> -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_r8qYbHqa4yziq9", // Enter the Key ID generated from the Dashboard
    "amount": "100", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "success.php",
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9999999999"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.open();

// document.getElementById('rzp-button1').onclick = function(e){
//     e.preventDefault();
// }
</script>

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

    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $sneaker=$_GET['sneaker'];
    $price=$_GET['price'];
    $size=$_POST['size'];

    $connection=new mysqli($server,$username,$password,$database);
    if(mysqli_connect_error()){
        echo "Cannot connect!";
    }
    $query="INSERT INTO `forstore` (`email`, `name`, `address`, `phone`, `sneaker`, `price`, `size`) VALUES ('$email', '$name', '$address', '$phone', '$sneaker', '$price', '$size')";
    $result=$connection->query($query);
    if($result == TRUE){
        echo("Done");
    }

?>