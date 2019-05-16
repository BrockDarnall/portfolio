<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
   </head>
   


   <body>

   <div id="deletemodal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-gray"> 
        <span onclick="document.getElementById('deletemodal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <h2 id="head">Delete</h2>
      </header>
      <div class="w3-container">
      <br/>
      <form method = "post" action = "insert.php">

ID: <input name = "id" type = "text" id = "id"><br><br>

<br/>
      </div>
      <footer class="w3-container w3-gray">
        <br/>
        <input name = "delete" type = "submit" id = "delete" value = "Delete">
      <br/>
</form>
      <br>
      </footer>
    </div>
  </div>
     

    
      
   </body>
</html>
