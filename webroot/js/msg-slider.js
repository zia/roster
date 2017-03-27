function open_panel(){
	slideIt();
	var a=document.getElementById("sdb");
	a.setAttribute("id","sdb1");
	a.setAttribute("onclick","close_panel()");
}

function close_panel(){
	slideIn();
	a=document.getElementById("sdb1");
	a.setAttribute("id","sdb");
	a.setAttribute("onclick","open_panel()");
}

function slideIt(){
	var slidingDiv = document.getElementById("sld");
	var stopPosition = 0;
	if (parseInt(slidingDiv.style.right) < stopPosition ){
		slidingDiv.style.right = parseInt(slidingDiv.style.right) + 10 + "px";
		setTimeout(slideIt, 1);
	}
}

function slideIn(){
	var slidingDiv = document.getElementById("sld");
	var stopPosition = -306;
	if (parseInt(slidingDiv.style.right) > stopPosition ){
		slidingDiv.style.right = parseInt(slidingDiv.style.right) - 10 + "px";
		setTimeout(slideIn, 1);	
	}
}