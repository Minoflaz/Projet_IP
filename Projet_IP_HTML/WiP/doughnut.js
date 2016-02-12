var chapitre1 = [
	{
		value: 6,
		color:"#46BFBD",
		highlight: "#5AD3D1",
		label: "Faits"
	},
	{
		value: 3,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "En cours"
	},
	{
		value: 5,
		color: "#F7464A",
		highlight: "#FF5A5E",
		label: "Non faits"
	}
];

var chapitre1_cours = [
	{
		value: 4,
		color:"#46BFBD",
		highlight: "#5AD3D1",
		label: "Faits"
	},
	{
		value: 1,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "En cours"
	},
	{
		value: 2,
		color: "#F7464A",
		highlight: "#FF5A5E",
		label: "Non faits"
	}
];

var chapitre1_exos = [
	{
		value: 2,
		color:"#46BFBD",
		highlight: "#5AD3D1",
		label: "Faits"
	},
	{
		value: 2,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "En cours"
	},
	{
		value: 3,
		color: "#F7464A",
		highlight: "#FF5A5E",
		label: "Non faits"
	}
];


var chapitre2 = [
	{
		value: 1,
		color:"#46BFBD",
		highlight: "#5AD3D1",
		label: "Faits"
	},
	{
		value: 4,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "En cours"
	},
	{
		value: 2,
		color: "#F7464A",
		highlight: "#FF5A5E",
		label: "Non faits"
	}
];

var chapitre2_cours = [
	{
		value: 1,
		color:"#46BFBD",
		highlight: "#5AD3D1",
		label: "Faits"
	},
	{
		value: 3,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "En cours"
	},
	{
		value: 1,
		color: "#F7464A",
		highlight: "#FF5A5E",
		label: "Non faits"
	}
];

var chapitre2_exos = [
	{
		value: 0,
		color:"#46BFBD",
		highlight: "#5AD3D1",
		label: "Faits"
	},
	{
		value: 1,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "En cours"
	},
	{
		value: 1,
		color: "#F7464A",
		highlight: "#FF5A5E",
		label: "Non faits"
	}
];


window.onload = function(){
	var ctx_chap = document.getElementById("chart-chapitre").getContext("2d");
	var ctx_cours = document.getElementById("chart-cours").getContext("2d");
	var ctx_exo = document.getElementById("chart-exos").getContext("2d");
	window.myDoughnut = new Chart(ctx_chap).Doughnut(chapitre1, {responsive : true});
	window.myDoughnut = new Chart(ctx_cours).Doughnut(chapitre1_cours, {responsive : true});
	window.myDoughnut = new Chart(ctx_exo).Doughnut(chapitre1_exos, {responsive : true});

	var ctx2_chap = document.getElementById("chart-chapitre2").getContext("2d");
	var ctx2_cours = document.getElementById("chart-cours2").getContext("2d");
	var ctx2_exo = document.getElementById("chart-exos2").getContext("2d");
	window.myDoughnut = new Chart(ctx2_chap).Doughnut(chapitre2, {responsive : true});
	window.myDoughnut = new Chart(ctx2_cours).Doughnut(chapitre2_cours, {responsive : true});
	window.myDoughnut = new Chart(ctx2_exo).Doughnut(chapitre2_exos, {responsive : true});
};
