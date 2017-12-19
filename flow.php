<?php
    /*---------------------------------------------------------------------------*
     * Rename and change details of dbh.inc.default.php for database connection. *
     *---------------------------------------------------------------------------*/
     include "includes/dbh.inc.php";

     if(isset($conn)) {
         $stmt = $conn->prepare("SELECT * FROM Anslagstavla");
         $json = json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
         echo $json;
     }
  ?>
