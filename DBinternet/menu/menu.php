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


<link rel="stylesheet" href="2.css">


</head>

<body id="body">
<div id="title">

<h1 id="titleW">Database Menu</h1><h3 id="title">Brock D.<br> Febuary 2019</h3>
<br/>
<br/>

</div>



<div>

<a herf='#' onclick="document.getElementById('createModal').style.display='block'";><h3 id="links"><u>Create</u></h3></a>
<hr/>
<a href='menu.php?read=true'><h3 id="links">Read</h3></a>
<hr/>
<a herf='#' onclick="document.getElementById('updatemodal').style.display='block'";><h3 id="links"><u>Update</u></h3></a>
<hr/>
<a herf='#' onclick="document.getElementById('deletemodal').style.display='block'";><h3 id="links"><u>Delete</u></h3></a>
</div>

<?php
include_once 'read/read.php';
include_once 'read/create.php';
include_once 'read/update.php';
include_once 'read/delete.php';
error_reporting(1);
ini_set('display_errors', 1);

function get_read() { return read(); }

if (isset($_GET['read'])) {
    get_read();
  }

  ?>

</body>
</html>
