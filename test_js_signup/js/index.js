

function validateForm(event)
{

var a =document.forms["register"]["username"].value;
var b =document.forms["register"]["password"].value;
var c =document.forms["register"]["re-password"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c==""))
  {
  // window.alert("All Field must be filled out");
  var str = warning.innerHTML; 
  // var txt = str.replace("-","Note : All Field must be filled out"); การแทนที่คำที่มีอยู่ให้แทนที่ตัวไหนและค่าเป็นอะไร
  var txt = ("<br> Note : All Field must be filled out");
  // document.getElementById("warning").innerHTML = txt;
  $('#warning').html(txt);
  event.preventDefault();
  // document.getElementById("warning").style.backgroundColor = "red";
  $('#username,#password,#re-password').css('background-color','red');
  $('#username,#password,#re-password').addClass('white-placeholder');
  return false;
  }

  	$('#username,#password,#re-password').css('background-color','transparent');


if( a.search(/[^a-zA-Z0-9]/) !==-1 ) {
 	var str = document.getElementById("warning").innerHTML;
  	var txt = ("<br> Note : Username (only A-Za-z0-9)");
  	document.getElementById("warning").innerHTML = txt;
  	event.preventDefault();
  	$('#username').css('background-color','red');
  	return false;
 }
 	$('#username').css('background-color','transparent');

if (a==null || a=="")
  {
  // window.alert("username must be filled out");
  var str = document.getElementById("warning").innerHTML; 
  var txt = ("<br> Note : Username must be filled out");
  // var txt = str.replace("-","username must be filled out");
  document.getElementById("warning").innerHTML = txt;
  event.preventDefault();
  $('#username').css('background-color','red');
  return false;
  }

  $('#username').css('background-color','transparent');



if (b==null || b=="")
  {
  var str = document.getElementById("warning").innerHTML;
  var txt = ("<br> Note : Password must be filled out");
  // var txt = str.replace("-","password must be filled out");
  document.getElementById("warning").innerHTML = txt;
  event.preventDefault();
  $('#password').css('background-color','red');
  return false;
  }

  $('#password').css('background-color','transparent');

if( b.search(/[^a-zA-Z0-9]/) !==-1 ) {
 	var str = document.getElementById("warning").innerHTML;
  	var txt = ("<br> Note : Password (only A-Za-z0-9)");
  	document.getElementById("warning").innerHTML = txt;
  	event.preventDefault();
  	$('#password').css('background-color','red');
  	return false;
 }

  $('#password').css('background-color','transparent');

if (b.length <8){
 	// console.log("Password ต้องมากกว่า 8");
 	var str = document.getElementById("warning").innerHTML;
  	var txt = ("<br> Note : Password ต้องมากกว่า 8");
  	document.getElementById("warning").innerHTML = txt;
  	event.preventDefault();
  	$('#password').css('background-color','red');
  	return false;
 }

  	$('#password').css('background-color','transparent');



if (c==null || c=="")
  {
  var str = document.getElementById("warning").innerHTML; 
  var txt = ("<br> Note : Re-Password must be filled out");
  // var txt = str.replace("-","re-passwords must be filled out");
  document.getElementById("warning").innerHTML = txt;
  event.preventDefault();
  $('#re-password').css('background-color','red');
  return false;
  }

  $('#re-password').css('background-color','transparent');

if (c!=b){
  // console.log("Password ที่กรอกเข้ามาไม่เหมือนกัน");
  var str = document.getElementById("warning").innerHTML;
  var txt = ("<br> Note : Password ที่กรอกเข้ามาไม่เหมือนกัน");
  document.getElementById("warning").innerHTML = txt;
  event.preventDefault();
  $('#re-password').css('background-color','red');
  return false;
}

  $('#re-password').css('background-color','transparent');

window.alert('สมัครสมาชิกเรียบร้อย')

}

$( '#username,#password,#re-password' ).focusout(validateForm);
$('#register').submit(validateForm)
