<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
   </head>
   


   <body>

   <div id="updatemodal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-gray"> 
        <span onclick="document.getElementById('updatemodal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <h2 id="head">Update</h2>
      </header>
      <div class="w3-container">
      <br/>
      <form method = "post" action = "insert.php">

ID: <input name = "update2" type = "text" id = "update2"><br><br>

Firstname: <input type="text" name="fname2" /><br><br>

Middlename: <input type="text" name="mname2" /><br><br>

Lastname: <input type="text" name="lname2" /><br><br>

Entrant: <input type="text" name="entrant2" /><br><br>

<br/>
      </div>
      <footer class="w3-container w3-gray">
        <br/>
        <input name = "update" type = "submit" id = "update" value = "Update">
      <br/>
</form>
      <br>
      </footer>
    </div>
  </div>
     

    
      
   </body>
</html>