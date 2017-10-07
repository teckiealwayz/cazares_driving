var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
  document.getElementById("pic").style.display = "none";
}

$(function() {
	$("#language").click(function(e) {
		if ($(this).text() == "Español")
		{
			$(this).text("English");
			document.getElementById("main_h").innerHTML = "¡Toma el Examen de Conducción con nosotros!";
		}
		else
		{
			$(this).text("Español");
			document.getElementById("main_h").innerHTML = "Take your Driving Test with us!";
		}
	});
	});

