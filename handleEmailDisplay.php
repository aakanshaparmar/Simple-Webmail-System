<?php
mysql_connect('sophia.cs.hku.hk', 'aparmar', 'aditya14') or die('Error! '. mysql_error()); 
mysql_select_db('aparmar') or die('Error! '.mysql_error());


$query = 'SELECT emailID,sender,title,date FROM emails WHERE mailbox = "'.$_GET["mailbox"].'" ORDER BY date DESC LIMIT '.$_GET["lastRecord"].', 4';

$result=mysql_query($query)or die('Error!'.mysql_error());

while($row = mysql_fetch_array($result))
{
  print "<input type='checkbox' value='".$row['emailID']."'>&nbsp;&nbsp;";
  print "<span id='".$row['emailID']."' onclick='getContent(this)'>".$row['sender']."&nbsp;&nbsp;";.$row['title']."&nbsp;&nbsp;".$row['date']."</span><br><br>";
} 
  
?> 