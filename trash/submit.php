<?php
require('variable.php');
$file = 'variable.php';

if($_POST['submit']){

echo "submit success";
file_put_contents($file,str_replace($variable1,$_POST['firstname'],file_get_contents($file)));
file_put_contents($file,str_replace($variable2,$_POST['lastname'],file_get_contents($file)));
}else{
echo "submit failed";
}
?>