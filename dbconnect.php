 <?php
$servername = 'localhost';
$username = 'root';
$password = '';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE DATABASE myfirstDB";
if (mysqli_query($conn, $sql)) {
    echo "<br/>Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?> 