<?php
if (isset($_POST["btn_submit"])) {
    //Receive the data from the user
    $name = $_POST["x"];
    $quantity= $_POST["y"];
    $price= $_POST["w"];
    $discount=$_POST["z"];
    //connect to the database to start saving
    require_once "db_connection.php";

    //to save the data, prepare the INSERT query
    $insertQuery = "INSERT INTO `Productstore`(`id`, `name`, `quantity`, `price`, `discount`) VALUES (null,'$name','$quantity','$price','$discount')";

    //saving the data to mysqli_query()
    $save = mysqli_query($connection, $insertQuery);

    //check if the saving was successful
    if (isset($save)) {
        header("location:viewproduct.php");
    }else {
        echo "User registration failed";
    }
}
