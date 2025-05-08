<?php
// Database connection details
$servername = "localhost";
$db_username = "root"; // Replace with your DB username
$db_password = "";     // Replace with your DB password
$dbname = "heartfelt_homes"; // Replace with your database name

// Connect to the database
$conn = mysql_connect($servername, $db_username, $db_password);
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

// Select the database
mysql_select_db($dbname, $conn) or die("Could not select database: " . mysql_error());

// Retrieve form data
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Sanitize input to prevent SQL injection
$email = mysql_real_escape_string($email);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// Hash the password for security
$hashed_password = md5($password); // Use a better hashing function like bcrypt if possible

// Insert data into the database
$sql = "INSERT INTO MyGuests (email, username, password) VALUES ('$email', '$username', '$hashed_password')";
$result = mysql_query($sql);

if ($result) {
    echo "Account created successfully!";
} else {
    echo "Error: " . mysql_error();
}

// Close the connection
mysql_close($conn);
?>
