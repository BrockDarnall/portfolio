<?php


$inter = "1";
$local = "0";
    
    if ($inter = "1"){
        $servername = "gator4268.hostgator.com";
        $username = "mmcclend_a4root";
        $password = "a4toor";
        $dbname = "mmcclend_a4";

     
    }
    // Check connection
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    
    if ($conn->connect_error) {
   
        $local = "1";
        $inter = "0";

        $servername = "localhost";
        $username = "root";
        $password = "toor";
        $dbname = "A4";
        $conn = new mysqli($servername, $username, $password, $dbname);
      
    }
    //insert
    if (!empty($_POST['fname'])) {
        $sql= "INSERT INTO customer (ID_customer, fname, mname, lname, entrant) VALUES ( NULL, '$_POST[fname]', '$_POST[mname]', '$_POST[lname]', '$_POST[entrant]')";
        if (!mysqli_query($conn,$sql))

        {
      
        die('Error: ' . mysql_error());
      
        }
        }

//delete    
    if (!empty($_POST['id'])) {

        $idcust = $_POST['id'];
            
        $sql = "DELETE FROM customer WHERE ID_customer = $idcust" ;
        $retval = mysqli_query($conn,$sql );
        
        if(! $retval ) {
           die('Could not delete data: ' . mysql_error());
        }
        
        echo "Deleted data successfully\n";
        
    }
//update
    if (isset($_POST['update'])) {

        $idc = $_POST['update2'];
        $fn = $_POST['fname2'];
        $mn = $_POST['mname2'];
        $ln = $_POST['lname2'];
        $en = $_POST['entrant2'];
      $sql =  ("UPDATE customer SET fname= '$fn', mname='$mn', lname= '$ln', entrant= '$en' WHERE ID_customer= '$idc'");

        $result = mysqli_query($conn, $sql);
   
   if($result)
   {
       echo 'Data Updated';
   } else{
       echo 'Data Not Updated';
       mysqli_close($conn);
       die();
   }
 
}
        
    

   if ($local = "1") {
        header( 'Location: http://127.0.0.1/brockd/DBinternet/menu/menu.php' ) ;
    } else {
       
        header( 'Location: http://www.westada.tech/a4/brockd/DBinternet/menu/menu.php' ) ;
    } 
   
?>