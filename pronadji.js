var xmlHttp;
function PrikaziFunkciju(str){ 
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null){
 alert ("Browser ne podržava xmlHttpRequest");
 return;
}
var url="prikazi_funkciju.php";
url=url+"?id_radnika="+str;
url=url+"&sid_radnika="+Math.random();

xmlHttp.onreadystatechange=obradapromenestanja;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}
function obradapromenestanja(){ 
if (xmlHttp.readyState==4){ 
 document.getElementById("popuni").innerHTML=xmlHttp.responseText;
 } 
}
function GetXmlHttpObject(){
var xmlHttp=null;
try{
 
 xmlHttp=new XMLHttpRequest();
 } catch (e){
 
 try {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
 } catch (e) {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
