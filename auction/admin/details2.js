var xmlhttp;
function subcategory2(val)
{
	//alert("hii i a in 2");
xmlhttp=null;
if (window.XMLHttpRequest)
  {// code for Firefox, Opera, IE7, etc.
  xmlhttp=new XMLHttpRequest();
  }
else if (window.ActiveXObject)
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
if (xmlhttp!=null)
  {
  xmlhttp.onreadystatechange=state_Change_details2;
 // alert(val);
  var url="sql2.php?id="+val+"";
  //alert(url);
  xmlhttp.open("GET",url,true);
  xmlhttp.send(null);
  }
else
  {
  alert("Your browser does not support XMLHTTP");
  }
}


function state_Change_details2()
{
if (xmlhttp.readyState==4)
  {
  if (xmlhttp.status==200)
    {
 	//var select = document.getElementById("state");
	var txt=xmlhttp.responseText;
	//alert(txt);
	document.getElementById("model_div").innerHTML = xmlhttp.responseText;

	}
  else
    {
    alert("Problem retrieving data:" + xmlhttp.statusText);
    }
  }
}