<html>

<head>
</head>

<body>
<h1>Please submit your message</h1>
<form name="frm" method="POST" action="index2.php">
<input type="text" name="message" />
<input type="submit" value="Submit Message"/>
</form>
<?php

include 'mysqlconn.php';
include 'singlepost.php';

if(isset($_POST['message']) && !empty($_POST['message']))
{
	if(add_post($_POST['message']))
		echo "Your post was successfully added.";
	else
		echo '<p style="color:red;">Sorry, your post was not added.</p>';
}
else if(isset($_POST['message']) && empty($_POST['message']))
	echo '<p style="color:red;"> Message was empty </p>';
	
$result = fetchAll();

$f_tbl = "<table><thead><td>Post ID </td><td>Message</td><td>Timestamp </td></thead>";

$f_tbl.= "<tbody>";

while($query_data = mysql_fetch_object($result)) {
	
	$f_tbl.=print_singlepost($query_data);
}

$f_tbl.="</tbody></table>";

echo $f_tbl;


 ?>
</body>
</html>

