<?php
include ("db.php");

if (isset($_POST['name'])) { $name = $_POST['name'];}
if (isset($_POST['text'])) { $text = $_POST['text'];}
$date = date("Y-m-d");

$add_post = mysql_query("INSERT INTO post (name, text, date) VALUES ('$name', '$text', '$date')",$db);
echo "<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head><body></body></html>";
?>