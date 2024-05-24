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
            <li><a class="active" href="view.php">View Booking</a> </li>
            <li><a href="new.php">New Booking</a> </li>
            <li><a href="cancel.php">Cancel Booking</a> </li>

        </ul>
    </div>
</section>

<section id="cart" class="section-p1">
    <table width="100%">
        <tr>
            <th>BookingId</th>
            <th>CustomerId</th>
            <th>PickupLocation</th>
            <th>DropLocation</th>
            <th>VehicleId</th>
            <th>DriverId</th>
            <th>RouteId</th>
            <th>Status</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "shiv1234", "rdbms_project");
        if ($conn->connect_error){
            die("connection failed: ". $conn->connect_error);
        }
        $sql = "SELECT BookingId, CustomerId, PickupLocation, DropLocation, VehicleId, DriverId, RouteId, Status from booking";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>". $row["BookingId"] ."</td><td>". $row["CustomerId"] ."</td><td>". $row["PickupLocation"] ."</td><td>". $row["DropLocation"] ."</td><td>". $row["VehicleId"] ."</td><td>". $row["DriverId"] ."</td><td>". $row["RouteId"] ."</td><td>". $row["Status"] ."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "";
        }
        $conn->close();
        ?>
    </table>
</section>
<div class="cart-empty">
    <a href="home.html"><button class="normal2">HOME</button> </a>
</div>
<div>
    <p><hr></p>
</div>
<footer class="section-p1">
    <div class="copyright">
        <p>© 2024, Shivansh Pradhan & Priyansh Goel, Manipal University Jaipur. </p>
    </div>
</footer>

</body>

</html>
