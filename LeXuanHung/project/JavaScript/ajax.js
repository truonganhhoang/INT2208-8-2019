// JavaScript Document
function create_obj(){
	var td = navigator.appName;
	if ( td == "Microsoft Internet Explorer"){
		obj = new ActiveXObject("Microsoft.XMLHTTP");
	}
	else{
		obj = new XMLHttpRequest();
	}
	return obj;
}

var http = create_obj();

function getdata(id){
	alert("gfddgdf");
	http.open("get","test.php?data="+id,true);
	http.onreadystatechange = process;
	http.send(null);
}

function process(){
	if(http.readyState = 4 && http.status == 200){
		var kq = http.responseText;
		document.getElementById('htht').innerHTML = kq;	
	}
}