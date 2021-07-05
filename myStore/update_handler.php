<?php
//Check if button update has been clicked
if (isset($_POST["btnUpdate"])) {
    $id = $_POST["a"];
    $updatedName = $_POST["x"];
    $updatedQuantity = $_POST["y"];
    $updatedPrice = $_POST["w"];
    $updatedDiscount =$_POST["z"];

    //Connecting to the database
    require_once "db_connection.php";

    //Preparing an updated query
    $updateQuery = "UPDATE `Productstore` SET `name`='$updatedName',`quantity`='$updatedQuantity',`price`='$updatedPrice',`discount`='$updatedDiscount' WHERE id='$id'";

    //Update the user by using mysqli_query()
    $update = mysqli_query($connection,$updateQuery);

    //Checking if the update was successful
    if (isset($update)) {
        //Redirect back to viewproduct.php to see the changes
        header("location:viewproduct.php");
    }else {
        echo "Updating failed";
    }
}
