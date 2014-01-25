
<?php 


function print_singlepost($postObj)
{
	$s_row =  '<tr>';
	$s_row.=  "<td>".$postObj->postId."</td>";
	$s_row.= "<td>".$postObj->msg."</td>";
	$s_row.= "<td> Posted Timestamp : ".$postObj->pub_time."</td>";

return $s_row;
}


?>
