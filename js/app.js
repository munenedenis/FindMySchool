///<reference path="data.js" />
(function () {
	var app = {};
	app.init = function () {
		document.getElementById("schoolrecords").addEventListener("click",app.schoolrecords);

	};

	app.schoolrecords = function () {


		var j=0;
		for (j; j<20; j++) 
		{

		var i = data[j].SchoolName;
		document.getElementById("Results0").innerHTML += "<table><tr><td width=200px>"+i+"</td></tr></table>";

		var i = data[j].Option1;
		document.getElementById("Results1").innerHTML += "<table><tr><td width=100px>"+i+"</td></tr></table>";

		var i = data[j].Gender;
		document.getElementById("Results2").innerHTML += "<table><tr><td width=100px>"+i+"</td></tr></table>";

		var i = data[j].Category;
		document.getElementById("Results3").innerHTML += "<table><tr><td width=100px>"+i+"</td></tr></table>";

		var i = data[j].Total;
		document.getElementById("Results4").innerHTML += "<table><tr><td width=100px>"+i+"</td></tr></table>";
		
}
			
	};

	app.init();

}


) ();