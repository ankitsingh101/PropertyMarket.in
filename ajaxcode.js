var xmlhttp;
if (window.ActiveXObject)
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
else 
	xmlhttp = new XMLHttpRequest();
function makerequest(serverPage, objID) 
{
	var obj = document.getElementById(objID);
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function() 
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200) 
		{
			obj.innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.send(null);
}
