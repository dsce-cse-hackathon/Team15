<?php
$host = "localhost";
$username = "root";
$password = "root";
$db_name="Library";
$con = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
$tbl_name="user";
?>
<HTML>
 
<BODY bgcolor="blue" >
  
<CENTER>
<br>
 <font color= yellow> <H2><u>User Entry Form</u></H2></font><br>  
<TABLE cellpadding=5 cellspacing=5>
  
<TR>
	<TD><b><font color= white>ID</font></b></TD>
	
	<TD><INPUT TYPE="text" NAME="ID"></TD>
	</TR>
  
<TR>
	<TD><b><font color= white>Name</font></b></b></TD>
	
	<TD><INPUT TYPE="text" NAME="name"></TD>
	</TR>
 
<TR>
	<TD><b><font color= white>Designation</font></b></TD>

	<TD><INPUT TYPE="text" NAME="designation"></TD>
	</TR>
 

</TABLE>
<BR> 
<center>
 
	<INPUT TYPE="submit" value="Submit" name="submit" onclick=isset($_POST['submit'])>
</center>
   
</CENTER

if(isset($_POST['submit']))
{
$ID=$_POST['ID']; 
$name=$_POST['name']; 
$designation=$_POST['designation'];
$query="INSERT INTO user ('ID', 'name', 'designation') VALUES ($ID,$name,$designation)"; 
$result=mysql_query($query);
if($result) echo "Successful";
else echo "unsuccessful";
}


</html>
 
 
