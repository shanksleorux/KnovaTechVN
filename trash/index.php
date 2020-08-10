<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<?php require('variable.php'); ?>

<form method="post" action="submit.php">
  First name:
  <input type="text" name="firstname" value="<?php echo $variable1; ?>">
  <br>
  Last name:
  <input type="text" name="lastname" value="<?php echo $variable2; ?>">
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form> 


</body>
</html>