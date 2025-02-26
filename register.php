<?php

// registeration page
// back-end
include 'includes/bookstoredb_connect.php'; // database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // password hashing

    // Inserting a new student into the sql dtaabase
    $sql = "INSERT INTO users (first_name, last_name, email, password) 
            VALUES ('$first_name', '$last_name', '$email', '$password')";
    
    //if the query to the database is successful, registeration sucessful and student can now log in,
    //else, registeration failed
    if ($conn->query($sql) === TRUE) {
        echo "congrats! Registration successful! <a href='login.php'>Login here</a>";
    } else {
        echo " Error: " . $conn->error;
    }
}
?>

<!-- front-end-->
<!DOCTYPE html>
<html>
<head><title>Register Below</title></head>
<body>
    <form method="post">
        First Name: <input type="text" name="first_name" required><br>
        Last Name: <input type="text" name="last_name" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Register</button>
    </form>
</html>