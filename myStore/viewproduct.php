<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Products</title>
    <!--Bootstrap JS-->
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>
<body>
<a href="Products.php" class="btn btn-outline-info btn-block">Add Products</a>
<h1 class="text-info text-center">Our Products</h1>
<table class="table table-dark table-hover">
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Discount</th>
    </tr>
    <?php
    //connect to the database
    require_once "db_connection.php";

    //prepare a SELECT Query
    $selectQuery = "SELECT * FROM `Productstore` WHERE 1";

    //Use the mysqli_query() to fetch the users
    $products = mysqli_query($connection, $selectQuery);

    //loop displaying the respective users from the database
    while ($row = mysqli_fetch_assoc($products)) {
        extract($row);
        echo "<tr>
                            <td>$name</td>
                            <td>$quantity</td>
                            <td>$price</td>
                            <td>$discount</td>
                            <td><a class='btn btn-danger' href='delete.php?myId=$id'>Delete</a></td>
                            <td><a class='btn btn-info' href='update.php?myId=$id&Name=$name&Quantity=$quantity&Price=$price&Discount=$discount'>Update</a></td>
                       </tr>";

    }
    ?>
</table>
</body>
</html>
