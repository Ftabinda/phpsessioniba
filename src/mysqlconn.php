<?php 

$mysql_link = mysql_connect('localhost','root','');

if (!$mysql_link) {
    die('Could not connect: ' . mysql_error());
}
else
{
	echo 'Connected successfully';

}

mysql_select_db("phpiba");


function add_post($msg){

$sql_query = 'INSERT INTO posts (msg) VALUES ("'.$msg.'");';

mysql_query($sql_query);

$num_rows = mysql_affected_rows();

if($num_rows > 0 )
	return TRUE;
else
	return FALSE;

}

function fetchAll(){

$sql_query = "SELECT * FROM posts";

$result = mysql_query($sql_query);

return $result;

}
?>
