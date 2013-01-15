<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Phoenix F1</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta name="description" content="Phoenix F1 is a computer repair company ready to suit your needs. Our A+ Certified technicians are prepared to handle anything, from hardware malfunctions to software errors. We pride ourselves in our honest service and customer satisfaction.">
<meta name="keywords" content="phoenix f1, phoenix f1 computer repair, phoenix-f1, phoenix-f1 computer repair, phoenix tech computer repair, phoenix tech, phoenix, tech, phoenixtech, spyware, adware, ad-ware, spy-ware, virus, virus removal, spyware removal, adware removal, cheap, cheap computer repair, cheap spyware removal, cheap virus removal, east brunswick, computer, computers, repair, computer repair, repairing, hardware repair, software repair, networking, net, net-working, computer tutoring, computer tutor, computer teaching, computer learning, hardware, software, malfunction, malfunctioning">
<script src="http://www.phoenix-f1.com/src/email.js" type='text/javascript'></script>
<style type="text/css">
h2 { font-family: arial; color: #ff6633; font-size: 14pt; font-weight: 500;}
table,td,tr,body { font-family: verdana; color: #000000; font-size: 9pt;}
input, select { border-style: solid; border-color: #999999; background-color: #ffffff; border-width: 1px; font-family: verdana, arial, helvetica; font-size: 8pt;}
input.submit { border-style: solid; border-color: #999999; background-color: #e7e7e7; border-width: 2px; font-family: verdana, arial, helvetica; font-size: 8pt; font-weight: 800;}
</style>
<script language="javascript">
<!--
homesel=new Image(150,38);homesel.src="imgs/home-sel.png";
servicessel=new Image(150,38);servicessel.src="imgs/services-sel.png";
utilitiessel=new Image(150,38);utilitiessel.src="imgs/utilities-sel.png";
contactsel=new Image(150,38);contactsel.src="imgs/contact-sel.png";
home=new Image(150,20);home.src="imgs/home.png";
services=new Image(150,38);services.src="imgs/services.png";
utilities=new Image(150,38);utilities.src="imgs/utilities.png";
contact=new Image(150,38);contact.src="imgs/contact.png";

function mouse(imgDocID, imgObjName, comment) {
document.images[imgDocID].src = eval(imgObjName + ".src");
window.status = comment; 
return true;
}

//-->
</script>
</head>

<body bgcolor="white" text="black" alink="#ff6600" vlink="#ff6600" link="#cc0000">
<center>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td colspan="2" valign="top" align="left">
<img src="imgs/logo-top.png" alt="Phoenix F1:  When F1 just isn't enough.">
</td></tr>
<tr><td width="150" valign="top" align="center">
<br><br>

<table width="150" border="0" cellspacing="0" cellpadding="0">
<tr><td valign="top" align="left">
<a href="index.php?page=home" onMouseOver="mouse('home','homesel','Home Page')" onMouseOut="mouse('home','home','')">
<img src="imgs/home.png" name="home" border="0" width="150" height="38"></a></td></tr>
<tr><td valign="top" align="left">
<a href="index.php?page=services" onMouseOver="mouse('services','servicessel','Services')" onMouseOut="mouse('services','services','')">
<img src="imgs/services.png" name="services" border="0" width="150" height="38"></a></td></tr>
<tr><td valign="top" align="left">
<a href="index.php?page=utilities" onMouseOver="mouse('utilities','utilitiessel','Utilities')" onMouseOut="mouse('utilities','utilities','')">
<img src="imgs/utilities.png" name="utilities" border="0" width="150" height="38"></a></td></tr>
<tr><td valign="top" align="left">
<a href="index.php?page=contact" onMouseOver="mouse('contact','contactsel','Contact')" onMouseOut="mouse('contact','contact','')">
<img src="imgs/contact.png" name="contact" border="0" width="150" height="38"></a></td></tr>
</table>

</td>
<td width="490" valign="top" align="center">

<table width="490" border="0" cellpadding="0" cellspacing="10">
<tr><td rowspan="1" width="8" height="172"><font color="#ffffff">.</font></td>
<td rowspan="2" width="474" valign="top">

<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr><td valign="top" align="left">
<?php
if(isset($_GET['page'])){
    include('src/'.$_GET['page'].'.inc');
}else{
    include('src/home.inc');
}
?>
</td></tr></table>

</td>
<td rowspan="2" background="imgs/border.png" width="8" valign="top"><font color="orange">.</font></td></tr>
<tr><td rowspan="1" background="imgs/border.png" width="8" valign="top"><font color="orange">.</font></td></tr>
<tr><td rowspan="1" colspan="3" align="center"><font face="times new roman" size="2">Copyright Phoenix F1 &copy; 2005-2006</font></td></tr>
</table>

</td></tr></table>
</center>

</body>
</html>
