<?php

include_once '../includes/dbconnect.php';

include '../functions/functions.php';


$u_id = $_GET['u_id'];
$user_level= $_GET['user_level'];

if($user_level == '2'){

	echo "ok";

	mysql_query("delete from users where user_id='$u_id'");
	header('location: admin_panel.php?type=user');
}

else if($type == 'd')
{
 


}

?>