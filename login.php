<?php
$PageTitle="Login";
?>

<!--HTML Tags-->

<?php
include_once('header.php');
?>

<form action="" method="post">
   <div style="border: 1px dimgray solid;width:840px;text-align: center;">
      <br><br>
      <label>Username: <input type='text' name='username'/></label>
      <br><br>
      <label>Password: <input type='password' label='Password' name='password' /></label>
      <br><br>
      <div class="grow pic" style="border: 0px solid;width:600px;text-align: right">
         <a href="/register.php"> <img class ="img" src="/images/register.png"</a>
         <a href="/performLogin.php"> <img class ="img" src="/images/login.png"</a>
      </div>
      <br><br>

   </div>
</form>

<?php
include_once('footer.php');
?>
