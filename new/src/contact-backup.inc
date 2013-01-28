<p>
<h2>Telephone</h2>
</p><p>
You may contact us by calling one of our phone lines:
<br><ul>
<li>(732) 801-7645</li>
<li>(732) 718-8584</li>
<li>(732) 921-9784</li>
</ul>
</p><p>
<h2>E-mail</h2>
</p><p>
Or emailing us at:
<br><br>
<a href='javascript:support()'>support@phoenix-f1.com</a>
<br><br>
If for any reason you cannot reach us from our information above, please use our simple form below to contact us.
</p>
<form method="post" action="sendmail.php">
<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>

<input type="hidden" name="ip" value="<?php echo $ipi ?>">
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>">
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>">

<font color="red">*</font>Your Name: <br>
<input type="text" name="visitor" size="35"><br>
Your Email:<br>
<input type="text" name="visitormail" size="35"><br>
<br>
<font color="red">*</font>Your Phone Number:<br>
<input type="text" name="visitorphone" size="35"><br>
<br>
Your Address:<br>
<input type="text" name="visitoraddy" size="35"><br>
City: <br>
<input type="text" name="visitorcity" size="35"><br>
State:<br>
<select name="visitorstate" size="1">
<option value=" New Jersey ">New Jersey</option>
<option value=" New York ">New York</option>
</select>
<br>
<br>
<font color="red">*</font>Service:<br>
<select name="serv" size="1">
<option value=" Overnight Overhaul ">Overnight Overhaul</option>
<option value=" Device Installation ">Device Installation</option>
<option value=" New Computer Setup ">New Computer Setup</option>
<option value=" Computer Disposal ">Computer Disposal</option>
<option value=" Home Network Setup ">Home Network Setup</option>
<option value=" Data Recovery ">Data Recovery</option>
<option value=" Data Backup ">Data Backup</option>
<option value=" Data Migration ">Data Migration</option>
<option value=" General Repair ">General Repair</option>
<option value=" Tutoring ">Tutoring</option>
<option value=" Other " >Other</option>
</select>
<br><br>
Description of Problem/Service:
<br>
<textarea name="notes" rows="4" cols="35"></textarea>
<br><br>
Would you like a copy of this email to be sent to you? <br>
<input name="ccopy" border="0" checked="checked" type="radio" value="ccno">No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="ccopy" type="radio" value="ccyes">Yes<br>
<br>
<font color="red">*Required Fields.</font>
<br><br>
<input class="submit" type="submit" value="Submit">
</form>