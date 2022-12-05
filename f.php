<!DOCTYPE html>


<?php
	$db = mysqli_connect('localhost','root','bi20702','test')
	or die('Error connecting to MySQL server.');
?>

<html>
	
	<head>
		<meta charset="utf-8">
		<style>
			#visualize {
				display: block;
				margin: auto 25%;
				text-align: center;
		}
	
			button {
				width: 100px;
				height: 30px;
		}
	
			button:active {
				background-color: #000000;
				color: white;
		}
	</style>
	</head>
	<body>
		<h1 align="center" >TOPページ</h1>
		<div id="visualize">
		<button>機能１</button>
		</div>
		<br>
		<div id="visualize">
		<button>機能2</button>
		</div>
		<br>
		<div id="visualize">
		<a href="f1.php"><button>売上データ</button></a>
		</div>
	</body>
</html>
