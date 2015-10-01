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

function toSubmit(){
	
	options();
	getTime();
	getBrowser();
	var goRNot=true;
	if(!patterns() || !mustMatch() || !checkedMethEnc()){
		goRNot=false;
	}
	return goRNot;
	
}

function mustMatch (){
	
	if(document.getElementById("pass1").value!=document.getElementById("pass2").value){
		alert("La contraseña no es idéntica");
		return false;
	}else{return true;}
}

function getTime (){
	
	var fecha=new Date();
	var hrs=fecha.getHours();
	var mnts=fecha.getMinutes();
	if(mnts<10) {
		mnts="0" + mnts;
	}
	var hora=hrs + ":" + mnts;
	document.getElementById("hora").value=hora;
}

function getBrowser (){
	
	document.getElementById("naveg").value=navigator.appCodeName + navigator.appVersion;
	
}

function checkedMethEnc (){
	
	var ret = true;
	if(!document.getElementById("enca").checked
	&& !document.getElementById("encm").checked){
		alert("Debes seleccionar una encriptación");
		ret = false;
	}
	if(!document.getElementById("php1").checked
	&& !document.getElementById("phprof").checked){
		alert("Debes seleccionar un destino");
		ret = false;
	}
	return ret;
	
}

function patterns(){
	
	var patName = new RegExp('^$|^[a-zA-Z\s]+$');
	var patTelef = new RegExp('^$|^[9|8|7|6]\d{8}$');
	var patMail = new RegExp('^$|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$');
	var ret = true;
	if(!patName.test(document.getElementById("nombre").value)){
		alert("Introduzca un nombre correcto");
		ret = false;
	}
	if(!patName.test(document.getElementById("apellidos").value)){
		alert("Introduzca un apellido correcto");
		ret = false;
	}
	if(!patTelef.test(document.getElementById("telef").value)){
		alert("Introduzca un teléfono correcto");
		ret = false;
	}
	if(!patMail.test(document.getElementById("email").value)){
		alert("Introduzca un e-mail correcto");
		ret = false;
	}
	return ret;
	
}