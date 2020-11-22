<?php 
session_start();

require(__DIR__.'\.\controllers\helper.php');
//require(__DIR__.'\config\helper.php');
require('./config.php');

	$conn=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$sql="select * from event where aid='".$_SESSION['_login']."'";
	$stmt=$conn->prepare($sql);
	$stmt->execute();
	$resultSet=$stmt->get_result();
	$event= Array();
	$event=$resultSet->fetch_all();
	//var_dump($event);
	//$lid=$stmt->fetch();
	//var_dump($lid);
	 //var_dump($_SESSION['_login']);
	//die();


//$stmt=$conn->prepare("SELECT case_id, client_id, status FROM cases WHERE `l_id`=".$lid['l_id']." AND `status`='pending' ");	
//$stmt->execute($_SESSION);
//$id=Array();
//$id=$stmt->fetchall();
?>
<font size="4" color="green" face="Comic Sans MS">
<table  border="0" align="center" height=150 width=400 cellpadding=30 cellspacing="1" bgcolor="yellow">
<tr>
<th class="x"> Event Id </th>
<th> Name </th>
<th> Date </th>
<th> Venue </th>
<th> Sports Type </th>
<th> Status </th>
</tr>

<?php
for ($i=0; $i<count($event); $i++) {
	// echo $id[$i];
	echo "<tr><td>". $event[$i]['id']."</td><td>". $event[$i]['ename']."</td><td>". $event[$i]['date']."</td><td>". $event[$i]['venue']."</td><td>". $event[$i]['eventType']."</td>
	</tr>";
	# code..
}
?>



</table>

\