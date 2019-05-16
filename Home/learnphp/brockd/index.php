<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php learn</title>
</head>
<body>
  <h2>php test.</h2>
  <h3>important things</h3>
  <ol>
    <li>Instead of index.html we use index.php</li>
    <li>php tags are</li>
  </ol>

  <?php
echo "My first PHP script! note: i am echoing this from inside of php tags";

?>


<hr>


<h2>connecting to mysql using mysqli oo</h2>
<?php
/*
$servername = "localhost";
$username = "root";
$password = "toor";



// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$conn->close(); */
?>
<hr>

<h2>php create a DB</h2>


<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "A4phpvet";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Create database
$sql = "CREATE DATABASE IF NOT EXISTS A4phpvet";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


/*
$sql = "USE A4phpvet";
if ($conn->query($sql) === TRUE) {
    echo "Use Database successfully";
} else {
    echo "Error using database: " . $conn->error;
}

*/


// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_query($conn, 'TRUNCATE TABLE MyGuests');

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com');";

if ($conn->multi_query($sql) === TRUE) {
  $last_id = $conn->insert_id;
     echo " New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}








$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - email: " . $row["email"]. "<br>";
    }

} else {
   echo "0 results";
}
mysqli_close($conn);
?>

<hr>



</body>
</html>
