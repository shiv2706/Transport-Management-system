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
<div class="drop">
    <a href="new.php#down"><button class="normal3">⬇️</button> </a>

</div>

<section id="cart" class="section-p1">
    <table width="100%">
        <tr>
            <th>CustomerId</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Contact</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "shiv1234", "rdbms_project");
        if ($conn->connect_error){
            die("connection failed: ". $conn->connect_error);
        }
        $sql = "SELECT CustomerId, FirstName, LastName, Email, ContactNumber from customer";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["CustomerId"]."</td><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Email"]."</td><td>".$row["ContactNumber"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</section>
<div>
    <p><hr></p>
</div>
<section id="cart1" class="section-p1">
    <table width="100%">
        <tr>
            <th>PickupLocation</th>
            <th>DropLocation</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "shiv1234", "rdbms_project");
        if ($conn->connect_error){
            die("connection failed: ". $conn->connect_error);
        }
        $sql = "SELECT StartLocation, EndLocation from route";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["StartLocation"]."</td><td>".$row["EndLocation"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</section>
<div>
    <p><hr></p>
</div>
<section id="cart2" class="section-p1">
    <table width="100%">
        <tr>
            <th>VehicleId</th>
            <th>RegistrationNumber</th>
            <th>Model</th>
            <th>Capacity</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "shiv1234", "rdbms_project");
        if ($conn->connect_error){
            die("connection failed: ". $conn->connect_error);
        }
        $sql = "SELECT VehicleID, RegistrationNumber, Model, Capacity from vehicle";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["VehicleID"]."</td><td>".$row["RegistrationNumber"]."</td><td>".$row["Model"]."</td><td>".$row["Capacity"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</section>
<div>
    <p><hr></p>
</div>
<section id="cart1" class="section-p1">
    <table width="100%">
        <tr>
            <th>DriverId</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>LicenseNumber</th>
            <th>ContactNumber</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "shiv1234", "rdbms_project");
        if ($conn->connect_error){
            die("connection failed: ". $conn->connect_error);
        }
        $sql = "SELECT DriverID, FirstName, LastName, LicenseNumber, ContactNumber from driver";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["DriverID"]."</td><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["LicenseNumber"]."</td><td>".$row["ContactNumber"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</section>
<div>
    <p><hr></p>
</div>
<section id="cart1" class="section-p1">
    <table width="100%">
        <tr>
            <th>RouteId</th>
            <th>StartLocation</th>
            <th>EndLocation</th>
            <th>Distance</th>
            <th>EstimatedDuration</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "shiv1234", "rdbms_project");
        if ($conn->connect_error){
            die("connection failed: ". $conn->connect_error);
        }
        $sql = "SELECT RouteId, StartLocation, EndLocation, Distance, EstimatedDuration from route";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["RouteId"]."</td><td>".$row["StartLocation"]."</td><td>".$row["EndLocation"]."</td><td>".$row["Distance"]."</td><td>".$row["EstimatedDuration"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</section>
<div>
    <p><hr></p>
</div>
<section id="down">
 <div class="form-container">
    <div class="loginform2">
        <div class="feilds">
            <h4>New Booking</h4>
            <form action="booking.php" method="post">
                <div class="input-box">
                    <a href="#"><span class="icon">🔍️</span></a>
                    <input type="text" name="CustomerId" required>
                    <label>CustomerId</label>
                </div>
                <div class="input-box">
                    <a href="#"><span class="icon">🔍</span></a>
                    <input type="text" name="PickupLocation" required>
                    <label>PickupLocation</label>
                </div>
                <div class="input-box">
                    <a href="#"><span class="icon">🔍</span></a>
                    <input type="text" name="DropLocation" required>
                    <label>DropLocation</label>
                </div>
                <div class="input-box">
                    <a href="new.php#cart1"><span class="icon">🔍</span></a>
                    <input type="text" name="VehicleId" required>
                    <label>VehicleId</label>
                </div>
                <div class="input-box">
                    <a href="new.php#cart2"><span class="icon">🔍</span></a>
                    <input type="text" name="DriverId" required>
                    <label>DriverId</label>
                </div>
                <div class="input-box">
                    <a href="new.php#cart2"><span class="icon">🔍</span></a>
                    <input type="text" name="RouteId" required>
                    <label>RouteId</label>
                </div>
                <div class="input-box">
                    <span class="icon">💳</span>
                    <input type="text" name="Status" required>
                    <label>PayStatus(Paid/Unpaid)</label>
                </div>
                <a href="login.php"><button type="submit" class="btn">Book-Now</button></a>
            </form>
        </div>
    </div>
 </div>
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
