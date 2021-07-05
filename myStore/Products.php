<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
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
        <h1 class="text-info text-center">Products here</h1>
        <form action="product_handler.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Name" name="x">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Quantity" name="y">
            </div>

            <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Price" name="w">
    </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Discount" name="z">
            </div>

            <input type="submit" class="btn btn-outline-info btn-block" value="Submit" name="btn_submit">
            <a href="viewproduct.php" class="btn btn-outline-success btn-block">View Products</a>
        </form>
    </div>
</div>
<div class="col-3"></div>
</body>
</html>
