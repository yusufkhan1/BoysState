<HTML>
<HEAD>
<TITLE>Figure 16-4</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<link rel="stylesheet" type="text/css" href="alumni_style.css" />

</HEAD>
</body>
<?php
	// connect to server
	$HOMETOWN = $_GET['hometown'];
	$mysql_link = mysql_connect("localhost", "root", "mysql"); mysql_select_db("alumni", $mysql_link);
	$query2 = "SELECT parent_city FROM production_alumni_table group by parent_city ORDER BY parent_city";
	$users2 = mysql_query($query2, $mysql_link);
	print("<table><tr><form id='query' action='query_by_hometown.php' method='go'> ") ;
	print("<select name='hometown'>");
	print("\n<option value='Select City'>Select City</option>");
						$count2 = mysql_num_rows($users2) ;
						while($count2 >0){
						   $var2 = mysql_fetch_row($users2);
	  				      print("\n<option value='$var2[0]'>$var2[0]</option>");
						   $count2 = ($count2 -1);
	   					}
	print("</select>");
	print("			<input type='submit' name='submit1' value='Query Hometown' id='submit1' />");
	print("         </tr></form></table>");

	$query = "SELECT alumni_id,name_first,name_last,parent_city,boys_state_year FROM production_alumni_table where parent_city='$HOMETOWN'  ORDER BY boys_state_year"; $users = mysql_query($query, $mysql_link);

	print("<a href= index.html > Click here to return to the Main Page </a> \n");
	print("<TABLE cellpadding=\"5px\" border = 2>\n ");
	print("<TR>\n");
	print("<TD BGCOLOR=\"#CCCCCC\"><B>Click on ID for <br> Alumni Record</B></TD>\n");
	print("<TD BGCOLOR=\"#CCCCCC\"><B>First Name</B></TD>\n");
	print("<TD BGCOLOR=\"#CCCCCC\"><B>Last Name</B></TD>\n");
	print("<TD BGCOLOR=\"#CCCCCC\"><B>HomeTown</B></TD>\n");
	print("<TD BGCOLOR=\"#CCCCCC\"><B>Year</B></TD>\n");
	print("</TR>\n");

	print(" <form name=\"toSave\" method=\"go\"  action=\"display_alumni_detail.php\">  \n");

$count = mysql_num_rows($users) ;
while($count >0){
   $var1 = mysql_fetch_row($users);
   print("\n<TR>");
   print("<td >");
   	print(" <input type=\"button\" name=\"sb\" value=\"Detail\" onClick= \" location.href = 'display_alumni_detail.php?sb=$var1[0]' \"> ");
  //	print(" <input type=\"button\" name=\"sb\" value=\"Edit\" onClick= \" location.href = 'edit_alumni_detail.php?sb=$var1[0]' \"> ");
 //  	print(" <input type=\"button\" name=\"sb\" value=\"Delete\" onClick= \" location.href = 'delete_record.php?sb=$var1[0]' \"> ");

   print("<td> $var1[1] </td>\n");
   print("<td> $var1[2] </td>\n");
   print("<td> $var1[3] </td>\n");
   print("<td> $var1[4] </td>\n");
   print("</tr>");
   $count = ($count -1);
   }

	//end table
	print("</TABLE>\n");

   print(" <input type = \"hidden\" name = \"ID\" value =  \"5\" >");
   print(" </form> ");

   /* Free result set */
	mysql_free_result($users);

	/* Close connection */
	mysql_close($mysql_link);

?>
</BODY>
</HTML>