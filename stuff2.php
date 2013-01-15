<html>
<head></head>
<body>
<?php
$footer = "<br><br><br><a href=ilikepeachesyesido.php>Home</a> |
        <a href=stuff.php?action=new>Add Contact</a> | 
        <a href=stuff.php?action=view>View List</a> | 
        [<a href=ilikepeachesyesido.php?noj=rules>Logout</a>]<br><br><br><br><br><br><br>
        PS:  Noj is sexy.";
        
if(isset($_COOKIE['pr0n'])){
    $username="phoenix";
    $password="sourapple";
    $database="phoenix_customers";

    if($_POST['entry']=='new'){
        $first=$_POST['first'];
        $last=$_POST['last'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];
        $email=$_POST['email'];

        mysql_connect(localhost,$username,$password);
        @mysql_select_db($database) or die( "Unable to connect to database");
    
        $query = "INSERT INTO contacts VALUES ('','$first','$last','$phone','$cell','$address','$city','$state','$zip','$email')";

        mysql_query($query);

        mysql_close();
    
        echo 'Contact added to Customer Database.';
        echo "$footer";
    }else if($_POST['entry']=='update'){
        $new_id=$_POST['new_id'];
        $new_first=$_POST['new_first'];
        $new_last=$_POST['new_last'];
        $new_phone=$_POST['new_phone'];
        $new_cell=$_POST['new_cell'];
        $new_address=$_POST['new_address'];
        $new_city=$_POST['new_city'];
        $new_state=$_POST['new_state'];
        $new_zip=$_POST['new_zip'];
        $new_email=$_POST['new_email'];
        mysql_connect(localhost,$username,$password);
        @mysql_select_db($database) or die( "Unable to connect to database");
        $query = "UPDATE contacts SET first='$new_first', last='$new_last', phone='$new_phone', cell='$new_cell', address='$new_address', city='$new_city',state='$new_state', zip='$new_zip',email='$new_email' WHERE id='$new_id'";
        mysql_query($query);
        mysql_close();
        echo "Info. Updated";
        echo "$footer";
    }else if($_POST['entry']=='del'){
        $id = $_POST['id'];
        mysql_connect(localhost,$username,$password);
        @mysql_select_db($database) or die( "Unable to connect to database");
        $query="DELETE FROM contacts WHERE id='$id'";
        mysql_query($query);
        mysql_close();
        echo "Entry Deleted.";
        echo "$footer";
    }else if($_POST['entry']=='addjob'){
        $id = $_POST['id'];
        
        mysql_connect(localhost,$username,$password);
        @mysql_select_db($database) or die( "Unable to connect to database");
        $query="SELECT * FROM contacts WHERE id='$id'";
        $result = mysql_query($query);
        $oldinfo=mysql_result($result,0,"info");
        $info = "<b>".$_POST['month']."//".$_POST['day']."//".$_POST['year']."</b> - ".$_POST['service']." - ".$_POST['cost']."<br>Description: ".$_POST['jobdesc']."<br>Notes: ".$_POST['notes']."<br>".$oldinfo;
        $query2 = "UPDATE contacts SET info='$info' WHERE id='$id'";
        mysql_query($query2);
        mysql_close();
        echo "Info. Added";
        echo "$footer";    
    if($_GET['action']){
        $action=$_GET['action'];
        if($action == 'new'){
            echo'
            <form action="stuff.php" method="post">
            <input type="hidden" name="entry" value="new">
            First Name: <input type="text" name="first"><br>
            Last Name: <input type="text" name="last"><br>
            Home Phone: <input type="text" name="phone"><br>
            Cell Phone: <input type="text" name="cell"><br>
            Address: <input type="text" name="address"><br>
            City: <input type="text" name="city"><br>
            State: <select name="state" size="1">
                    <option value=" New Jersey ">New Jersey</option>
                    <option value=" New York ">New York</option>
                    </select><br>
            Zip Code: <input type="text" name="zip"><br>
            E-mail: <input type="text" name="email"><br>            
            <input type="Submit">
            </form>';
        }else if($action == 'job'){
            $id = $_GET['id'];
            echo "Job information:<br><br>
            <form action='stuff.php' method='post'>
            <input type='hidden' name='entry' value='addjob'>
            <input type='hidden' name='id' value='$id'>
            Month: <select name='month' size='1'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                    </select><br>
            Day:  <select name='day' size='1'>
                        <option value='01'>01</option>
                        <option value='02'>02</option>
                        <option value='03'>03</option>
                        <option value='04'>04</option>
                        <option value='05'>05</option>
                        <option value='06'>06</option>
                        <option value='07'>07</option>
                        <option value='08'>08</option>
                        <option value='09'>09</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='13'>13</option>
                        <option value='14'>14</option>
                        <option value='15'>15</option>
                        <option value='16'>16</option>
                        <option value='17'>17</option>
                        <option value='18'>18</option>
                        <option value='19'>19</option>
                        <option value='20'>20</option>
                        <option value='21'>21</option>
                        <option value='22'>22</option>
                        <option value='23'>23</option>
                        <option value='24'>24</option>
                        <option value='25'>25</option>
                        <option value='26'>26</option>
                        <option value='27'>27</option>
                        <option value='28'>28</option>
                        <option value='29'>29</option>
                        <option value='30'>30</option>
                        <option value='31'>31</option>
                    </select><br>
            Year:  <select name='year' size=1>
                        <option value='2005'>2005</option>
                        <option value='2006'>2006</option>
                    </select><br>
            Cost of Service:  <input type='text' name='cost'><br>
            Service Performed:  <select name='service' size='1'>
                        <option value=' Overnight Overhaul '>Overnight Overhaul</option>
                        <option value=' Device Installation '>Device Installation</option>
                        <option value=' New Computer Setup '>New Computer Setup</option>
                        <option value=' Computer Disposal '>Computer Disposal</option>
                        <option value=' Home Network Setup '>Home Network Setup</option>
                        <option value=' Data Recovery '>Data Recovery</option>
                        <option value=' Data Backup '>Data Backup</option>
                        <option value=' Data Migration '>Data Migration</option>
                        <option value=' General Repair '>General Repair</option>
                        <option value=' Tutoring '>Tutoring</option>
                        <option value=' Other ' >Other</option>
                        </select><br>
            Description of Service: <textarea name='jobdesc' cols='40' rows='5'></textarea><br>
            Additional Notes: <textarea name='notes' cols='40' rows='5'></textarea><br>
            <input type='submit' value='Submit'>
            </form>";
                                   
        }else if($action == 'edit'){
            $id = $_GET['id'];
            mysql_connect(localhost,$username,$password);
            @mysql_select_db($database) or die( "Unable to connect to database");
            $query="SELECT * FROM contacts WHERE id='$id'";
            $result=mysql_query($query);
            $num=mysql_numrows($result);
            if($num==0){die ("Database is empty.");}
            mysql_close();
            $first=mysql_result($result,0,"first");
            $last=mysql_result($result,0,"last");
            $phone=mysql_result($result,0,"phone");
            $cell=mysql_result($result,0,"cell");
            $address=mysql_result($result,0,"address");
            $city=mysql_result($result,0,"city");
            $state=mysql_result($result,0,"state");
            $zip=mysql_result($result,0,"zip");
            $email=mysql_result($result,0,"email");
            echo "
            <form action='stuff.php' method='post'>
            <input type='hidden' name='entry' value='update'>
            <input type='hidden' name='new_id' value='$id'>
            First Name: <input type='text' name='new_first' value='$first'><br>
            Last Name: <input type='text' name='new_last' value='$last'><br>
            Home Phone: <input type='text' name='new_phone' value='$phone'><br>
            Cell Phone: <input type='text' name='new_cell' value='$cell'><br>
            Address: <input type='text' name='new_address' value='$address'><br>
            City: <input type='text' name='new_city' value='$city'><br>
            State: <select name='new_state' size='1' value='$state'>
                <option value=' New Jersey '>New Jersey</option>
                <option value=' New York '>New York</option>
                </select><br>
            Zip Code: <input type='text' name='new_zip' value='$zip'><br>
            E-mail: <input type='text' name='new_email' value='$email'><br>
            <input type='submit'>
            </form><br><br><br>";
        }else if($action == 'del'){
            $id=$_GET['id'];
            echo "Are you sure you want to delete this entry? ID: $id";
            echo "<br><br><form action='stuff.php' method='post'>
            <input type='hidden' name='entry' value='del'>
            <input type='hidden' name='id' value='$id'>
            <input type='submit' value='Yes'>";
            echo "$footer";
        }else if($action == 'view'){
            mysql_connect(localhost,$username,$password);
            @mysql_select_db($database) or die( "Unable to select database");
            $query="SELECT * FROM contacts ORDER BY last ASC";
            $result=mysql_query($query);

            $num=mysql_numrows($result);

            mysql_close();

            echo "<b><center>Customer Information</center></b><br><br>";
            if($num==0){die ("Database is empty.");}
            for($i=0; $i<$num; $i++) {
                $first=mysql_result($result,$i,"first");
                $last=mysql_result($result,$i,"last");
                $phone=mysql_result($result,$i,"phone");
                $cell=mysql_result($result,$i,"cell");
                $address=mysql_result($result,$i,"address");
                $city=mysql_result($result,$i,"city");
                $state=mysql_result($result,$i,"state");
                $zip=mysql_result($result,$i,"zip");
                $email=mysql_result($result,$i,"email");
                $id=mysql_result($result,$i,"id");
                $info=mysql_result($result,$i,"info");
                echo "<hr><b>$last, $first</b>
                <br><b>Phone:</b> $phone
                <br><b>Cell:</b> $cell
                <br><b>Address:</b><br>$address
                <br>$city, $state $zip
                <br><b>E-mail:</b> <a href='mailto:$email'>$email</a><br>
                --------------------------------
                <br><b>Services History:</b><br>
                $info
                <br>
                --------------------------------
                <div align=right> [<a href='stuff.php?action=job&id=$id'>Add Job Info</a>] [<a href='stuff.php?action=edit&id=$id'>Edit</a>] [<a href='stuff.php?action=del&id=$id'>Remove</a>]</div>";
            }
            echo "<hr><br><br>$footer";
        }
    }
    
}else{
echo "You're not logged in.  Go to <a href='ilikepeachesyesido.php'>login</a> page to login.";
}

?>