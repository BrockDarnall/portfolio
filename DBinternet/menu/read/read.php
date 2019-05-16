<html>
<link rel="stylesheet" href="2.css">

</html>

<?php

function read() {

$local = "0";
$inter = "1";

if ($inter = "1"){
    $servername = "gator4268.hostgator.com";
    $username = "mmcclend_a4root";
    $password = "a4toor";
    $dbname = "mmcclend_a4";


 
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "A4";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $local = "1";
    $inter = "0";
}

$sql = "SELECT * FROM customer;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
echo "<div id='tableDB'><table><caption id='cap'>Internet DB</caption><tr><th>ID</th><th>Customer</th><th>Entrant</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["ID_customer"]. "</td><td>" . $row["fname"]. " " . $row["mname"]. " " . $row["lname"]. "</td><td>" . $row["entrant"]. "</td></tr>";
}
echo "</table></div>";
} else {
echo "0 results";
}
}

?>