<?php
mysql_connect('sophia.cs.hku.hk', 'aparmar', 'aditya14') or die('Error! '. mysql_error()); 
mysql_select_db('aparmar') or die('Error! '.mysql_error());

$query = 'SELECT * FROM emails WHERE emailID = "'.$_GET["id"].'"';

$result = mysql_query($query) or die('Error! ' . mysql_error()); 

while($row = mysql_fetch_array($result)) 
{ 
  print "<p>";
  print " <b>SENDER:</b>  ".$row['sender']."<br>";
  print " <b>TITLE:</b>   ".$row['title']. "<br>";
  print " <b>DATE:</b>    ".$row['date'].  "<br>";
  print " <b>LABEL:</b>   ".$row['mailbox']."<br>";
  print " </p><hr><p>".$row['content']."</p>"; 

} 
?> 