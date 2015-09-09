atrib=element.getElementById(form);
if(document.getElementById(methp).checked){
	atrib.setAttribute("method", "post");
}else{
	atrib.setAttribute("method", "get");
}
if(document.getElementById(enca).checked){
	atrib.setAttribute("enctype", "application/x-www-form-urlencoded");
}else{
	atrib.setAttribute("enctype", "multipart/form-data");
}
if(document.getElementById(php1).checked){
	atrib.setAttribute("action", "p1.php");
}else{
	atrib.setAttribute("metodo", "/~sintprof/p1.php");
}