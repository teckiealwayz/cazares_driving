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
		}
		else
		{
			$(this).text("Español");
		}
	});
	});

