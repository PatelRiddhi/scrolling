<?php
$last_msg_id=$_GET['last_msg_id'];
$sql=mysqli_query($bd, "SELECT * FROM messages WHERE mes_id < '$last_msg_id' ORDER BY mes_id DESC LIMIT 5");
$last_msg_id="";

while($row=mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	$msgID= $row['mes_id'];
	$msg= $row['msg'];
?>
		
<div id="<?php echo $msgID; ?>"  align="left" class="message_box" >
<span class="number"><?php echo $msgID; ?></span><?php echo $msg; ?> 
</div>
<?php
}
?>
