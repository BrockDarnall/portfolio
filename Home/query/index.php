<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>phpQuery</title>
</head>
<body>
<h1>php</h1>
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



$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<br> id:". $row["id"].
    "<br> First Name:". $row["firstname"].
    "<br> Last Name:". $row["lastname"].
    "<br> email:". $row["email"].
    "<br><br><hr>";
  }
} else {
  echo "0 results";
}


phpinfo();






  mysqli_close($conn);
  ?>

</body>
</html>
