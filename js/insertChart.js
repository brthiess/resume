function insertChart(name, percentage) {
	var data = [
		{
			value: percentage,
			color:"#2ecc71",
			highlight: "#2ecc71",
		},
		{
			value: (100 - percentage),
			color: "#e74c3c",
			highlight: "#e74c3c",
			
		}
	]
	var ctx = document.getElementById(name).getContext("2d");
	var myDoughnutChart = new Chart(ctx).Doughnut(data,{
		animation: false
	});
}