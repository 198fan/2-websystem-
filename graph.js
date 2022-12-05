$(document).ready(function(){
	$.ajax({
		url : "http://localhost/php_program/data.php",
		type : "GET",
		success : function(data){
			console.log(data);
			
			var date = [];
			var money = [];
			
			for(var i in data){
				date.push(data[i].date);
				money.push(data[i].money);
			}
			
			// Define Data
			var data = [{
				x: date,
				y: money,
				type:"bar"
			}];

			// Define Layout
			var layout = {
				xaxis: {range: ['2022-10-03', '2022-12-05'],title: "日付"},
				yaxis: {title: "売上　（円）"},
				title: "売上データ"
			};

			Plotly.newPlot("tester", data, layout);
			
		},
		error : function(data){
			
		}
	
	}
	)
}
)