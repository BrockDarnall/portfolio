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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="2.css">


</head>

<style>

#head {
    font-family: 'Pacifico', cursive;
}

</style>

<body id="body">

<div id="createModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-gray"> 
        <span onclick="document.getElementById('createModal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <h2 id="head">Create a new enteree</h2>
      </header>
      <div class="w3-container">
      <br/>
      <form action="insert.php" method="post">

Firstname: <input type="text" name="fname" /><br><br>

Middlename: <input type="text" name="mname" /><br><br>

Lastname: <input type="text" name="lname" /><br><br>

Entrant: <input type="text" name="entrant" /><br><br>

<br/>
      </div>
      <footer class="w3-container w3-gray">
        <br/>
        <input name = "submit" type = "submit" id = "submit" value = "Submit">
      <br/>

      <br>
      </footer>
    </div>
  </div>


</body>
</html>