<!DOCTYPE html>



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
		<div id="tester" style="width:750px;height:450px;"></div>
		<br>
		<div id="visualize">
		<a href="f3.php"><button>注文数データ</button></a>
		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="plotly-2.16.1.min.js"></script>
	<script type="text/javascript" src="graph.js"></script>
	
	

</html>