<?php
mysql_connect('sophia.cs.hku.hk', 'aparmar', 'aditya14') or die('Error! '. mysql_error()); 
mysql_select_db('aparmar') or die('Error! '.mysql_error());

if($_GET["counter"]==0)
{
	$query = 'UPDATE emails SET mailbox = "'.$_GET["moveTo"].'" WHERE emailID="'.$_GET["id"].'"';
}
else if($_GET["counter"]==1)
{
	$query = 'DELETE FROM emails WHERE emailID="'.$_GET["id"].'"';
}

$result = mysql_query($query) or die('Error! ' . mysql_error()); 
 
?> 