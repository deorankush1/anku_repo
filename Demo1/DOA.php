<?php
class DOA
{
	private $store_message;
	private $read_message;
	public function_construct($store_message, $read_message)
	{
		 $this->store_message = $store_message;
         $this->read_message   = $read_message;
	}
	$connect = mysqli_connect("localhost","root","","test");
$url_to_fetch = 'http://mmb.moneycontrol.com/index.php?q=boarder/ajax_call&section=get_messages&uid=valine&isp=0&gmt=my_post';
$data = file_get_contents($url_to_fetch);
$array = json_decode($data, true);
foreach($array as $row)
{
	$sql = "Insert into Traverse(ent_date,full_message, msg_id, price, topic, tp_sector, tp_nsc_cp, msg_url) Values(' ".$row["ent_date"]."', ' ".$row["full_message"]." ',' ".$row["msg_id"]." ',' ".$row["price"]." ',' ".$row["topic"]." ', ' ".$row["tp_sector"]." ', ' ".$row["tp_nsc_cp"]." ', ' ".$row["msg_url"]." ')";
	mysqli_query($connect, $sql);
	}
	echo "employee data inserted successfully";
	

}
?>