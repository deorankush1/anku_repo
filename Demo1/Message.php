<?php
class Message
{
$fields_to_extract = array("ent_date","full_message","msg_id","price","topic","tp_sector","tp_nsc_cp","msg_url");
$url_to_fetch = 'http://mmb.moneycontrol.com/index.php?q=boarder/ajax_call&section=get_messages&uid=valine&isp=0&gmt=my_post';
$params_to_add = array('lmid','offset','pgno');

	
}
?>