var atrib=document.getElementById("form");
if(document.getElementById("methp").checked){
	atrib.method="post";
}else{
	atrib.method="get";
}
if(document.getElementById("enca").checked){
	atrib.enctype="application/x-www-form-urlencoded";
}else{
	atrib.enctype="multipart/form-data";
}
if(document.getElementById("php1").checked){
	atrib.action="p1.php";
}else{
	atrib.action="/~sintprof/p1.php";
}
var fecha = new Date();
document.getElementById("hora").value=fecha.toString;