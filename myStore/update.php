<?php
//Checking if the button has been clicked
if (isset($_GET["myId"])) {
    $receivedId = $_GET["myId"];
    $receivedName = $_GET["Name"];
    $receivedQuantity = $_GET["Quantity"];
    $receivedPrice= $_GET["Price"];
    $receivedDiscount=$_GET["Discount"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating User</title>
    <!--Bootstrap JS-->
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>

<body>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h1 class="text-info text-center">Updating Product </h1>
        <form action="update_handler.php" method="post">
            <input value="<?php echo $receivedId;?>" type="hidden" name="a">
            <div class="form-group">
                <input value="<?php echo $receivedName;?>" type="text" class="form-control" placeholder="Enter Name" name="x">
            </div>

            <div class="form-group">
                <input value="<?php echo $receivedQuantity;?>" type="text" class="form-control" placeholder="Enter Quantity" name="y">
            </div>

            <div class="form-group">
                <input value="<?php echo $receivedPrice;?>" type="text" class="form-control" placeholder="Enter Price" name="w">
            </div>
            <div class="form-group">
                <input value="<?php echo $receivedDiscount;?>" type="text" class="form-control" placeholder="Enter Discount" name="z">
            </div>


            <input type="submit" class="btn btn-outline-info btn-block" value="Update" name="btnUpdate">
            <a href="viewproduct.php" class="btn btn-outline-danger btn-block">Cancel </a>
        </form>
    </div>
</div>
<div class="col-3"></div>
</body>
</html>