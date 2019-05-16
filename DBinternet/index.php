<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    
    <title>DB internet</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">


<link rel="stylesheet" href="css/DB.css">
</head>

<body id="body">
<div id="title">

<h1 id="titleW">Internet Database</h1><h3>Brock D.<br> January 2019</h3>

</div>

<style>
    #tableDB{
        padding-left: 33%;
    }

table, th, td {
    border: 3px solid black;
    
}

th, td {
    padding: 15px;
  text-align: left;
}

table {
    
    width: 50%;    
  background-color: #B1DEDB;
}

#cap {
    font-family: 'Playfair Display', serif;
}
</style>

<?php

error_reporting(0);
ini_set('display_errors', 0);


function start() {

$local = "0";
$inter = "1";

if ($inter = "1"){
    $servername = "gator4268.hostgator.com";
    $username = "mmcclend_a4root";
    $password = "a4toor";
    $dbname = "mmcclend_a4";


 
}
// Check connection


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


//Insert
$sql= "INSERT INTO customer (ID_customer, fname, mname, lname, entrant) VALUES (NULL, 'John', 'Scott', 'Smith', 'BrockD');";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "failure to insert";
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

$conn->close();
}
start();


  ?>




</body>
</html>

