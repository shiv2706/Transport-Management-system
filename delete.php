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
            <li><a href="new.php">New Booking</a> </li>
            <li><a class="active" href="cancel.php">Cancel Booking</a> </li>

        </ul>
    </div>
</section>
<section class="section-p1">
    <?php
    $BookingId = $_POST['BookingId'];


    $conn = mysqli_connect("localhost", "root", "shiv1234", "rdbms_project");
    if ($conn->connect_error){
        die("connection failed: ". $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("delete from booking where BookingId = ?");
        $stmt->bind_param("i", $BookingId);
        $stmt->execute();
        $stmt->close();
        $sql_max_value = "SELECT MAX(BookingId) AS max_value FROM booking";
        $result_max_value = $conn->query($sql_max_value);
        $row = $result_max_value->fetch_assoc();
        $max_value = $row['max_value'];

        $alter_stmt = "ALTER TABLE booking AUTO_INCREMENT = " . ($max_value + 1);
        if ($conn->query($alter_stmt) === TRUE) {
            echo "";
        } else {
            echo "Error resetting auto-increment value: " . $conn->error;
        }
        $conn->close();


    }
    ?>
    <section id="first" class="section-p1">
        <h2>Your Booking has been Successfully Cancelled</h2>
        <p>you can leave this page now</p>

    </section>
</section>
<div>
    <p><hr></p>
</div>
<div class="cart-empty">
    <a href="view.php"><button class="normal2">View-Booking</button> </a>
</div>
<div class="cart-empty">
    <a href="home.html"><button class="normal2">Home</button> </a>
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
