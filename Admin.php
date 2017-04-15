<html>
<body>
<?php 
$host = "localhost";
$username = "root";
$password = "root";
$db_name="Library";
$con = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");
$tbl_name="admin"; // Table name
$id=$_GET['id'];
$name=$_GET['name'];
$password=$_GET['pwd'];

$sql="SELECT * FROM $tbl_name WHERE ID='$id' and password='$password'";
echo $sql;
$result=mysqli_query($con,$sql);
if($result){
	
	if(mysqli_num_rows($result)){
		echo "</br>validated!!!";
	}
}
else{
	die(mysqli_error($con));
}
// Mysql_num_row is counting table row $count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

?>
</body>
</html>