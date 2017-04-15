 <?php
$host = "localhost";
$username = "root";
$password = "root";
$db_name="Library";
$con = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
$tbl_name="user"; // Table name
$ID=$_POST['ID'];
$name=$_POST['name'];
$designation=$_POST['designation'];

$sql="SELECT * FROM $tbl_name WHERE ID='$ID'";

$result=mysqli_query($con,$sql);
?>
