 <?php

$myemail = "support@thinkphoenixtech.com";
$ccx = "alex@phoenix-f1.com,tony@phoenix-f1.com,will@phoenix-f1.com,i.am.noj@gmail.com";
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,"."))){
echo "<h2>Please use a valid e-mail address</h2>\n";
echo "The message was NOT submitted.  Please use the back button in your browser to either enter a valid email address or leave the field blank.\n";
}else if(empty($visitor) || empty($visitorphone)) {
echo "<h2>Please fill in all required fields.</h2>\n";
echo "The message was NOT submitted.  Please use the back button in your browser and enter all required fields so that we'll be able to contact you.\n";
}else{

$todayis = date("l, F j, Y, g:i a") ;

$serv = $serv . "(" . $ccopy . ")" ;
$subject = $visitor . ":  " . $serv;

$notes = str_replace("\n.", "\n..", $notes);
$notes = stripcslashes($notes);

$from = "";
if (!$visitormail == ""){
$from = "From: $visitor <$visitormail>\r\n";
}else{
$from = "From: $visitor <emailaddress@notinputed.com>\r\n";
}

$message = "Phoenix F1 Computer Repair\n\n
$todayis [EST] \n
$from 
Phone Number:  $visitorphone
Address (if given):  
$visitoraddy
$visitorcity, $visitorstate
Service: $serv 
Message: 
$notes \n
";

if (($ccopy == "ccyes") && ($visitormail != "")){
mail($visitormail, $subject, $message, $from);
}

$message = $message."
Additional Info: IP = $ip 
Browser Info:  $httpagent \n";

mail($myemail, $subject, "This message was submitted:\n\n\n".$message, $from);

if ($ccx != ""){
mail($ccx, $subject, "This message was submitted:\n\n\n".$message, $from);
}

echo "
<p>
Date: $todayis 
<br>
Thank You $visitor
<br><br>
Your message has been sent.<br><br><br>
<i>
Message:<br>";
$notesout = str_replace("\r", "<br>", $notes);
$from = str_replace("\r","",$from);
$from = str_replace("\n","",$from);
echo "$todayis [EST] <br>
$from <br>
Phone Number:  $visitorphone <br>
Address (if given):  <br>
$visitoraddy <br>
$visitorcity, $visitorstate <br>
Service: $serv <br>
Description: <br>
$notes 
<br>
</i>

<br><br><center>
<a href='/index.php?page=home'> Back </a></center>
</p>";
}
?>