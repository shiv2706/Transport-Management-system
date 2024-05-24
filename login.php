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
            <li><a class="active" href="login.php">Sign-Up</a> </li>
            <li><a href="view.php">View Booking</a> </li>
            <li><a href="new.php">New Booking</a> </li>
            <li><a href="cancel.php">Cancel Booking</a> </li>

        </ul>
    </div>
</section>
<section id="scnd" class="section-p1">
    <h4>⬇️OUR CUSTOMERS⬇️</h4>

</section>

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
            echo "";
        }
        $conn->close();
        ?>
    </table>
</section>
<div>
    <p><hr></p>
</div>
<div class="form-container">
    <div class="loginform">
        <div class="feilds">
            <h4>Sign-Up</h4>
            <form action="connect.php" method="post">
                <div class="input-box">
                    <span class="icon">🤵‍♂️</span>
                    <input type="text" name="CustomerId" required>
                    <label>CustomerId</label>
                </div>
                <div class="input-box">
                    <span class="icon">🤵‍♂️</span>
                    <input type="text" name="FirstName" required>
                    <label>FirstName</label>
                </div>
                <div class="input-box">
                    <span class="icon">🤵‍♂️</span>
                    <input type="text" name="LastName" required>
                    <label>LastName</label>
                </div>
                <div class="input-box">
                    <span class="icon">✉️</span>
                    <input type="email" name="Email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">📞️</span>
                    <input type="text" maxlength="10" minlength="10" name="ContactNumber" required>
                    <label>Mobile-Number</label>
                </div>
                <a href="login.php"><button type="submit" class="btn">Sign-up</button></a>
            </form>
        </div>
    </div>
</div>
<div class="cart-empty">
    <a href="delacc.php"><button class="normal2">Delete Existing Account</button> </a>
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