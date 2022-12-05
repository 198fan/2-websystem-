<?php

 header('Content-Type: application/json');

 $db = new mysqli('localhost','root','bi20702','test');
 
 if(!$db){
	 die("failed" . $db->error);
 }
 
 $query = sprintf("SELECT Orders.date, COUNT(customer.sex) AS number
FROM Orders
INNER JOIN customer ON customer.custID = Orders.custID
WHERE customer.sex = \"male\"
GROUP BY Orders.date");
 
 $result = $db->query($query);
 
 $data = array();
 foreach ($result as $row) {
	 $data[] = $row;
 }
 
 $result->close();
 
 $db->close();
 
 print json_encode($data);
?>
