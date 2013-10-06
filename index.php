<?php
   if ($_SESSION == NULL) {
      header( 'Location: http://ogtt.secsys.net/login.php' );
   }
   else {
      echo "Go to main page.";
   }
?>
