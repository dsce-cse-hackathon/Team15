<html>
<body >
<form>


<p>

<center>
&nbsp;&nbsp;<img border="1" src="http://img.bhs4.com/e2/d/e2d712faabaedaccd7ce0744e8a24ea3184dc595_large.jpg" width="100" height="100" >
&nbsp;&nbsp;<img border="1" src="http://www.howdesign.com/wp-content/uploads/2011/05/HOWBookends.jpg"width="700" height="100">
</center>
</p>
</form>
</body>

</html>
<HTML>
 
 <HEAD>
  <TITLE> User Login Details</TITLE>
 </HEAD>

 <BODY bgcolor="#ff658a">
 <body background="https://img.clipartfest.com/004045753874a069a78eb91b8dad7d48_10-books-to-change-your-images-for-books_2716-1810.jpeg"/>
  <BR><BR>
  <center>
  <font color="white"> <H1>User Details</H1></font>
   	  <TABLE>
	  <TR> 
		<TD><B><font color="white">Reg_No</B></TD></font>
		<TD><INPUT TYPE="text" NAME="ID"></TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
	      
</TR>  
<tr>
<TD><B><font color="white">Name</B></TD></font>
<TD><INPUT TYPE="text" NAME="name"></TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
</tr>
  <tr align="center"> 
  <tr align="center">
		<td colspan=2>
		<form>
<input type="radio" name="designation" value="student">Student<br>
<input type="radio" name="designation" value="faculty">Faculty<br>
</td>
	   <a> <td colspan=2><input type="Submit" value="submit" onclick="window.location.href='Search_Book.php'">

	     </FORM> </tr></TABLE> </center> </body> </html>
		 

		 
 <html>
<body>
<?php 
session_start();
$host = "localhost";
$username = "root";
$password = "root";
$db_name="Library";
$con = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");
$tbl_name="user"; // Table name
$id=$_POST['id'];
$name=$_POST['name'];
$password=$_POST['designation'];

$sql="SELECT * FROM $tbl_name WHERE ID='$id'";
echo $sql;
$result=mysqli_query($con,$sql);
if($result){
	
	if(mysqli_num_rows($result)){
		echo "</br>validated!!!";
	}
else{
	die(mysqli_error($con));
session_write_close();
}
}
?>
</body>
</html>