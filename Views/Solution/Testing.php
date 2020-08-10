<?php
require_once('Models/Solution.php');
$display = new SolutionModels();
$a = $display->Testing();
echo $a;
echo "<h3>";
echo $_SERVER['HTTP_ACCEPT'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "</h3>";
?>
