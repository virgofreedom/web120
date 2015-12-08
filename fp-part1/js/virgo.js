// JavaScript Document
function drop_down(item)
{
	var cl = item.getElementsByTagName("div")[0].className;
	//alert (item.getElementsByTagName("div")[0].className);
	
	if (cl.indexOf("open-drop") == -1 )
	{
	//item.className += " open-drop";
//	alert("add drop");
		if (cl.indexOf("close-drop") != -1)
		{
		var res = cl.replace("close-drop","open-drop");	
		item.getElementsByTagName("div")[0].className = res;
		}else
		{
		item.getElementsByTagName("div")[0].className += " open-drop";
		}
	}else{
	var res = cl.replace("open-drop","close-drop");
//	alert(res);
	item.getElementsByTagName("div")[0].className = res;
	}
	
	
//	document.getElementById().className
}