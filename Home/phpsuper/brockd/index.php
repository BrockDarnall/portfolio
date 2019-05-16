
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Super Global</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

<style>
body {
  background-color: #67A2E5;
}
#title {
  font-family: 'Pacifico', cursive;
}


</style>


</head>
<body>
  <hr>
  <h1 id='title'>Php Super Global.</h1>
  <p>Brock D.</p>
  <p>December 14, 2018</p>

<?php include 'server-info.php'; ?>
<div class="container">
  <h1>Server & File Info</h1>
  <?php if($server): ?>
    <ul class="list-group">
      <?php foreach($server as $key => $value): ?>
        <li class="list-group-item">
          <strong><?php echo $key; ?>: </strong>
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>




  <?php include 'server-info.php'; ?>
  <div class="container">

    <?php if($client): ?>
      <ul class="list-group">
        <?php foreach($client as $key => $value): ?>
          <li class="list-group-item">
            <strong><?php echo $key; ?>: </strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
</div>


<hr />
<h2>Gets the server and client info.</h2>
<img src="images/1.png" style="width: 750px">
<hr />
<h2>Displays the server info.</h2>
<img src="images/2.png" style="width: 750px">
<hr />
<h2>Displays the client info.</h2>
<img src="images/3.png" style="width: 750px">
<hr />


















</body>
</html>
