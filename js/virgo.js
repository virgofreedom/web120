// JavaScript Document
function link_go(url,page,lang,more)
{
	window.open(url+"?p="+page+"&lang="+lang + more,"_self")
}
function active_menu(page)
{
	var obj = document.getElementById("list_menu").getElementsByTagName("li");
	for (var i=0 ; i < obj.length; i++)
	{
		var str = obj[i].getAttribute("data-tab-name");	
		var old_class = obj[i].className ;
		var i_class = obj[i].getElementsByTagName("i");
		var no_active = old_class.replace("resp-tab-active","");
		if (i_class.length != 0)
		{
			var n_class = obj[i].getElementsByTagName("i")[0].className;
			
			var no_icon_active = n_class.replace("icon_menu_active","");	
		}
//alert (no_active + " "+ no_icon_active);
		/*if (old_class.indexOf("resp-tab-active") != "-1")
			{
					
				obj[i].className = no_active;	
			}
		if (n_class.indexOf("icon_menu_active") != "-1")
			{
				
				obj[i].getElementsByTagName("i")[0].className = no_icon_active;
			}*/
//		alert (str + "=>"+ page);
		if (page == str)
		{
		
			obj[i].className += " resp-tab-active";
			obj[i].getElementsByTagName("i")[0].className += " icon_menu_active";	
		}
		else
		{
			
			obj[i].className = no_active;
		//	obj[i].getElementsByTagName("i")[0].className = no_icon_active;
			
		}
		
	}

}