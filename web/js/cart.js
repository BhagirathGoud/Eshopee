function delCart(id, row)
{
	row = row.parentNode.parentNode;
	alert("Are you sure?");
	
	/**
	  * Setup ajax request.
	 **/
	
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			row.parentNode.removeChild(row);
		}
	}
	xmlhttp.open("POST", "delCart.php", true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var poststr = "cid=" + id;
	xmlhttp.send(poststr);
}

function changeCart(id, textbox)
{
	qty = textbox.value;
	console.log("text changed " + qty);

	/**
	  * Setup ajax request.
	 **/
	
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			console.log(xmlhttp.responseText);
			location.reload();
		}
	}
	xmlhttp.open("POST", "changeCart.php", true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var poststr = "cid=" + id + "&qty=" + qty;
	xmlhttp.send(poststr);
}

function addCart(id)
{
	ipt = document.getElementsByName('EditBox2' + id);
	qty = ipt.value;

	/**

	  * Setup ajax request.
	 **/
	
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			console.log(xmlhttp.responseText);
			if(xmlhttp.responseText == "success")
			{
				alert("added successfully");
				ipt.value = 1;
			}
		}
	}
	xmlhttp.open("POST", "addCart.php", true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var poststr = "pid=" + id + "&qty=" + qty;
	xmlhttp.send(poststr);
}
