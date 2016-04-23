<?php
$db = new Database();
$db->connect();
//$res = $db->getResult();
//print_r($res);
//$db->insert('mysqcrud',array(4,"Name 5","this@wasinsert.five"),"id,name,email");
//$db->delete('mysqcrud', 'id=4');
//$db->update('mysqcrud', array('name'=>'вавава'), array('id',0),"=");
$db->select('users');
$res = $db->getResult();
echo "<pre>";
print_r($res);
echo "</pre>";
?>