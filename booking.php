<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Management System</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="icon" href="yellowtax.jpg">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<section id="header">

    <div>
        <ul id="navbar">
            <li><a href="home.html">Home</a> </li>
            <li><a href="login.php">Sign-Up</a> </li>
            <li><a href="view.php">View Booking</a> </li>
            <li><a class="active" href="new.php">New Booking</a> </li>
            <li><a href="cancel.php">Cancel Booking</a> </li>

        </ul>
    </div>
</section>
<section class="section-p1">
    <?php
    $CustomerId = $_POST['CustomerId'];
    $PickupLocation = $_POST['PickupLocation'];
    $DropLocation = $_POST['DropLocation'];
    $VehicleId = $_POST['VehicleId'];
    $DriverId = $_POST['DriverId'];
    $RouteId = $_POST['RouteId'];
    $Status = $_POST['Status'];

    $conn = mysqli_connect("localhost", "root", "shiv1234", "rdbms_project");
    if ($conn->connect_error){
        die("connection failed: ". $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into booking (CustomerId, PickupLocation, DropLocation, VehicleId, DriverId, RouteId, Status) values (?,?,?,?,?,?,?)");
        $stmt->bind_param("issiiis", $CustomerId, $PickupLocation, $DropLocation, $VehicleId, $DriverId, $RouteId, $Status);
        $stmt->execute();
        $stmt->close();
        $conn->close();


    }
    ?>
    <section id="first" class="section-p1">
        <h2>Your Booking has been Successfully Recorded</h2>
        <p>you can leave this page now</p>

    </section>
</section>
<div class="cart-empty">
    <a href="view.php"><button class="normal2">View-Booking</button> </a>
</div>

<div>
    <p><hr></p>
</div>
<footer class="section-p1">
    <div class="copyright">
        <p>© 2024, Shivansh Pradhan & Priyansh Goel, Manipal University Jaipur. </p>
    </div>
</footer>





<script src="script.js"></script>
</body>

</html>
