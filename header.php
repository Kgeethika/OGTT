<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>
        <?php
           if(isset($PageTitle)){
                echo $PageTitle;
           }
           else {
                echo "Default Title";
           }
        ?>
    </title>


    <?php
           if (function_exists('customPageHeader')){
               customPageHeader();
           }
    ?>
  <img src="/images/logo.png" alt="logo">
  </head>
  <body>
     <div>
        <?php
           if ($_SESSION != NULL) {
                echo "Welcome to the Online Game Tournament Tracker, <username>";
           }
           else {
                if (isset($message)) {
                    echo "<font color='red'>$message</font>";
                }
                else {
                    echo "In order to play the online gaming tournament tracker, You must be registered and login to the system.";
                }
           }
        ?>
     </div>
