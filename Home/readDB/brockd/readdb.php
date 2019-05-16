<?php
include_once 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>phpRead</title>
</head>
<body>
<h1>Read Our DB</h1>
<h4>Brock D.</h4>



<?php
  $sql = "SELECT * FROM MyGuests;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['firstname'] . "<br />";
        }
      }
?>

<hr />
<h2>This is conenecting my file to MyGuests database</h2>
<img src="images/connect.png" style="width: 650px">
<hr />
<h2>This is connected my index.php file to my connect.php file.</h2>
<img src="images/2.png" style="width: 650px">
<hr />
<h2>This is basically showing my enteries from the first down and only displaying the firstname.</h2>
<img src="images/3.png" style="width: 650px">
<hr />


</body>
</html>
