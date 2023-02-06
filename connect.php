<?php
$servername = "localhost";
$username = "id20260181_admin";
$password = "RLq%r000M0s5Du%=";
$dbname = "id20260181_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Taking all values from the form data(input)
$email = $_REQUEST['Email'];
$pass = $_REQUEST['Password'];

// Performing insert query execution
// here our table name is login
$sql = "INSERT INTO login  VALUES ('$email','$pass')";

if(mysqli_query($conn, $sql)){
		echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

		echo nl2br("\n$email\n $pass");
} else{
		echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
}

$conn->close();
?>