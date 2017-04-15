
<HTML>
 <HEAD>
  <TITLE>  </TITLE>
 </HEAD>

 <BODY bgcolor="Pink" >
  <CENTER>
    <font color= red><H2>Catalog</H2></font>
	<FORM METHOD=POST ACTION="Bef.jsp">

<TABLE cellpadding=5 cellspacing=5 >
  <TR>
	<TD>Book Id</TD>
	<TD><INPUT TYPE="text" NAME="txt1"></TD>
  </TR>
  <TR>
	<TD>Book Title</TD>
	<TD><INPUT TYPE="text" NAME="txt2"></TD>
  </TR>
  <TR>
	<TD>Author Name</TD>
	<TD><INPUT TYPE="text" NAME="txt3"></TD>
  </TR>
  <TR>
	<TD>Publisher</TD>
	<TD><INPUT TYPE="text" NAME="txt4"></TD>
  </TR>
  <TR>
	<TD>No. of Books</TD>
	<TD><INPUT TYPE="int" NAME="txt5"></TD>
  </TR>
  <TR>
<TR align ="center">
	<TD ><INPUT TYPE="submit" value="submit"></TD>
	<td><INPUT TYPE="reset" value="Clear"></td>
        
</TR>
</TABLE>
  </FORM>
  </CENTER>
</BODY>
</HTML>


<?php $con=mysqli_connect("localhost","root","","library"); // Check connection

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

$sql="INSERT INTO books (code, bookname, author, publication, subject, numberofbooks)

VALUES ('$_POST[bookid]','$_POST[bookname]','$_POST[author]','$_POST[publication]','$_P OST[subject]','$_POST[numberofbooks]')";

if (!mysqli_query($con,$sql))
{
echo "error";
}
echo "successs";

