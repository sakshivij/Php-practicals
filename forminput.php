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
$stmt = $conn->prepare("INSERT INTO  myfirstDB.Employee(firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$email=$_POST["email"];
$stmt->execute();

$stmt->close();
$conn->close();
?> 