function getTimeline() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","timeline.php",true);
  xmlhttp.send();
}
function getAbout() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","about.php",true);
  xmlhttp.send();
}
function getFriends() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","friends.php",true);
  xmlhttp.send();
}
function getMessages() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","message.php",true);
  xmlhttp.send();
}
function getProfile() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","profile.php",true);
  xmlhttp.send();
}
function getAds() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","ads.php",true);
  xmlhttp.send();
}
function editAbout() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("aboutDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","editAbout.php",true);
  xmlhttp.send();
}

function saveAbout() {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
    
    
var dob=document.getElementById('dob').value;
var gender=document.getElementById('gender').value;
var city=document.getElementById('city').value;
var hometown=document.getElementById('hometown').value;
var dept=document.getElementById('dept').value;
var batchfrom=document.getElementById('batchfrom').value;
var batchto=document.getElementById('batch').value;
var email=document.getElementById('email').value;
var contact=document.getElementById('contact').value;
var year=document.getElementById('year').value;
  var query="?dob="+dob;
  query+="&gender="+gender+"&city="+city+"&hometown="+hometown+"&dept="+dept+"&batchfrom="+batchfrom+"&batchto="+batchto+"&email="+email+"&contact="+contact+"&year="+year;

  //ajaxRequest.open("GET","update_profile.php"+query,true);
  //ajaxRequest.send(null);
  xmlhttp.open("GET","update_profile.php"+query,true);
  xmlhttp.send();

 }