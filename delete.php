<?php
   include("config.php");
   include("firebaseRDB.php");

   $db = new firebaseRDB($databaseURL);
   $id = $_GET['id'];
   if($id != ""){
      $delete = $db->delete("film", $id);
      echo '<script>
               window.location.href = "index.php";
               alert("Deleted Successfully")
            </script>';
   }
?>