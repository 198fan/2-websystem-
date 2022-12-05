$(document).ready(function(){
	$.ajax({
		url : "http://localhost/php_program/data1.php",
		type : "GET",
		success : function(data){
			console.log(data);
			
			var date = [];
			var number = [];
			
			for(var i in data){
				date.push(data[i].date);
				number.push(data[i].number);
			}
			
			// Define Data
			var data = [{
				x: date,
				y: number,
				type:"bar",
				marker:{ 
					color: 'rgba(220,20,60,1)'
					}
			}];

			// Define Layout
			var layout = {
				xaxis: {range: ['2022-10-03', '2022-12-05'],title: "日付"},
				yaxis: {title: "注文数"},
				title: "売上データ (女性)"
			};

			Plotly.newPlot("order", data, layout);
			
		},
		error : function(data){
			
		}
	
	}
	)
}
)

$(document).ready(function(){
	$.ajax({
		url : "http://localhost/php_program/data2.php",
		type : "GET",
		success : function(data){
			console.log(data);
			
			var date = [];
			var number = [];
			
			for(var i in data){
				date.push(data[i].date);
				number.push(data[i].number);
			}
			
			// Define Data
			var data = [{
				x: date,
				y: number,
				type:"bar",
				marker:{ 
					color: 'rgba(0,0,128,1)'
					}
			}];

			// Define Layout
			var layout = {
				xaxis: {range: ['2022-10-03', '2022-12-05'],title: "日付"},
				yaxis: {title: "注文数"},
				title: "売上データ (男性)"
			};

			Plotly.newPlot("order1", data, layout);
			
		},
		error : function(data){
			
		}
	
	}
	)
}
)
