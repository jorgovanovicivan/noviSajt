var xmlHttp
function izbaci(str,red){
pomocna=parseInt(red)
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null){
 alert ("Browser does not support HTTP Request")
 return
}
var url="obrisi.php"
url=url+"?id_radnika="+str
url=url+"&sid_radnika="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}
function stateChanged(){ 
if (xmlHttp.readyState==4){ 
 if (xmlHttp.responseText==1){
 document.getElementById("ta").deleteRow(pomocna);
}}}

function GetXmlHttpObject(){
var xmlHttp=null;
try {
 
 xmlHttp=new XMLHttpRequest();
 } catch (e) {
 
 try  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
