<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chat", $con);

$result = mysql_query("SELECT * FROM message ORDER BY id DESC");


while($row = mysql_fetch_array($result))
  {
  echo '<p>'.'<span>'.$row['sender'].'</span>'. '&nbsp;&nbsp;' . $row['message'].'</p>';
  }

mysql_close($con);
?>
