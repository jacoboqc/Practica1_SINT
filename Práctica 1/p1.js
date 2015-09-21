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

}function terms (){
	
	if(!document.getElementById("termns").checked){
		alert("Debes leer y aceptar los términos y condiciones de uso");
		return false;
	}
	
}

function getTime (){
	
	var fecha=new Date();
	var hrs=fecha.getHours();
	var mnts=fecha.getMinutes();
	var hora=hrs + ":" + mnts + " ";
	if(hrs > 11){
		hora=hora + "PM";
	}else{
		hora=hora + "AM";
	}
	document.getElementById("hora").value=hora;
}

function getBrowser (){
	
	document.getElementById("naveg").value=navigator.appCodeName + navigator.appVersion;
	
}