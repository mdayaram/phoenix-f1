<?php

if($_GET['noj']){
setcookie("pr0n", "", time()-99999999);
echo 'Successfully Logged out...<br><br><br><form action="ilikepeachesyesido.php" method="post">
<input type="hidden" name="log" value="attempt">
Username: <input type="text" name="user"><br>
Password: <input type="text" name="pass"><br>
<input type="Submit" value="Login">
</form>';
}else if(isset($_COOKIE['pr0n']) || ($_POST['log'] == 'attempt' && ($_POST['user'] == 'phoenix' && $_POST['pass'] == 'sourapple'))){
setcookie("pr0n", "Noj is the best programmer ever!", time()+3600);
echo "Yay! You're logged in!  Do stuff on bottom.";
echo "<br><br><br><a href=ilikepeachesyesido.php>Home</a> |
        <a href=stuff.php?action=new>Add Contact</a> | 
        <a href=stuff.php?action=view>View List</a> | 
        [<a href=ilikepeachesyesido.php?noj=rules>Logout</a>]<br><br><br><br><br><br><br>
        PS:  Noj is sexy.";
}else if($_POST['log'] == 'attempt' && ($_POST['user'] != 'phoenix' || $_POST['pass'] != 'sourapple')){
echo "You suck!  What was that? Oh, a typo?  Tell it to the sysadmin. Oh wait, that's me! Ha!...loser.  Go ahead...I dare you, try again.<br><br><br>
<form action='ilikepeachesyesido.php' method='post'>
<input type='hidden' name='log' value='attempt'>
Username: <input type='text' name='user'><br>
Password: <input type='text' name='pass'><br>
<input type='Submit' value='Login'>
</form>";
}else{
echo '
<form action="ilikepeachesyesido.php" method="post">
<input type="hidden" name="log" value="attempt">
Username: <input type="text" name="user"><br>
Password: <input type="text" name="pass"><br>
<input type="Submit" value="Login">
</form>';
}
?>