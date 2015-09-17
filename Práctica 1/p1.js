function options (){

	if(document.getElementById("methp").checked){
		document.getElementById("formulario").method="post";
	}else{
		document.getElementById("formulario").method="get";
	}
	if(document.getElementById("enca").checked){
		document.getElementById("formulario").enctype="application/x-www-form-urlencoded";
	}else{
		document.getElementById("formulario").enctype="multipart/form-data";
	}
	if(document.getElementById("php1").checked){
		document.getElementById("formulario").action="p1.php";
	}else{
		document.getElementById("formulario").action="/~sintprof/p1.php";
	}

}

function checkMeth (){
	
	if(document.getElementById("methg").checked){
		document.getElementById("encm").checked=false;
		document.getElementById("enca").checked=true;
		document.getElementById("encm").disabled=true;
	}
	if(document.getElementById("methp").checked){
		document.getElementById("encm").disabled=false;
	}

}
