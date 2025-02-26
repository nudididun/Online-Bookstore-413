<?php
session_start();

include 'includes/bookstoredb_connect.php'; // Ensure database connection


 //Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    die("Session not set.");
    header("Location: login.php");
    exit();
}

$user_name = $_SESSION['user_name']; // Get user's name
?>

<!-- Homepage Front-end -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- Styles for this page -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 15px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .welcome {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="userprofile.php">My Profile</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="cart.php">Shopping Cart</a>
        <a href="logout.php" style="float:right; background-color: red;">Logout</a>
    </div>

    <!-- Welcome Message -->
    <div class="welcome">
        <h1>WELCOME, <?php echo htmlspecialchars($user_name); ?>!</h1>
        <p>You have successfully logged in.</p>
    </div>

</body>
</html>