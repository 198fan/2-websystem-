<!DOCTYPE html>

<?php
 $db = mysqli_connect('localhost','root','bi20702','test')
 or die('Error connecting to MySQL server.');
?>


<html>
	<style>
		<?php include "styletest.css" ?>
	</style>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1 id="title">生売上データ</h1>
		<div id="visualize">
			<a href="f2.php"><button>可視化</button></a>
		</div>
		<br>
		<?php

			$query = "SELECT * FROM Orders";
			mysqli_query($db, $query) or die('Error querying database.');
			
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result);
			
			echo "<table>";
			
			echo "<tr><th>オーダーID</th><th>顧客ID</th><th>金額 (円)</th><th>日付</th></tr>";

			while ($row = mysqli_fetch_array($result)) {
				echo "<tr><td>" . htmlspecialchars($row['orderID']) . "</td><td>" . htmlspecialchars($row['custID']) . "</td><td>" . htmlspecialchars($row['money']) . "</td><td>" . htmlspecialchars($row['date']) . "</td></tr>";
			}
			
			echo "</table>";
			
			mysqli_close($db);
		?>
	</body>
	
	
</html>
