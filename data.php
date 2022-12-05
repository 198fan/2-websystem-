<?php

 header('Content-Type: application/json');

 $db = new mysqli('localhost','root','bi20702','test');
 
 if(!$db){
	 die("failed" . $db->error);
 }
 
 $query = sprintf("SELECT date, SUM(money) AS money FROM Orders GROUP BY date");
 
 $result = $db->query($query);
 
 $data = array();
 foreach ($result as $row) {
	 $data[] = $row;
 }
 
 $result->close();
 
 $db->close();
 
 print json_encode($data);
?>