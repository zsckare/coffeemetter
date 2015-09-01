var url="http://"+window.location.hostname;
function drink(id_user) {
	uri=url+"/cup/new"
	var ajax = new XMLHttpRequest();
	ajax.open("POST",uri,true);
  	ajax.onreadystatechange=function () {
  		if (ajax.readyState==4){
  			console.log("!!!!!!!!!!!!!!!!");
  			Materialize.toast('Vicioso!', 4000);
  		}
  	}
  	
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	ajax.send("iduser="+id_user);

}