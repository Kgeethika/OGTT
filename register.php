<?php
$PageTitle="Register";
?>

<!--HTML Tags-->

<?php
include_once('header.php');
?>

<form action="" method="post">
   <div style="border: 1px dimgray solid;width:840px;text-align: center;">
      <br><br>
      <div style="border: 0px solid;width:600px;text-align: left">
         <label>* First Name: <input type='text' name='fname'/></label>
         <br><br>
         <label>* Last Name: <input type='text' name='lname' /></label><br><br>
         <label>* Email Address: <input type='text' name='email' /></label><br><br>
         <label>* Password: <input type='password' name='password' /></label><br><br>
         <label>Profile picture: <input name="profileimage" type="file" /></label>
         <br><br><br>
         * = Required Field
      </div>
      <div class="grow pic" style="border: 0px solid;width:600px;text-align: right">
         <a href="/performRegistration.php"> <img class ="img" src="/images/register.png"</a>
      </div>
      <br><br>

   </div>
</form>

<?php
include_once('footer.php');
?>

