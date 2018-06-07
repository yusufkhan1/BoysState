<HTML>
<HEAD>
<TITLE>Figure 16-4</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<link rel="stylesheet" type="text/css" href="alumni_style.css" />

</HEAD>
</body>
<?php
	// connect to server
	$mysql_link = mysql_connect("localhost", "root", "mysql"); mysql_select_db("alumni", $mysql_link);
	$query = "SELECT alumni_id,name_first,name_last,memo,date_last_modified FROM production_alumni_table ORDER BY name_last"; $users = mysql_query($query, $mysql_link);

	print("<a href= index.html > Click here to return to the Main Page </a> \n");
	print("<TABLE cellpadding=\"5px\" border = 2>\n ");
	print("<TR>\n");
	print("<TD BGCOLOR=\"#CCCCCC\"><B>Click on ID for <br> Alumni Record</B></TD>\n");
	print("<TD BGCOLOR=\"#CCCCCC\"><B>First Name</B></TD>\n");
	print("<TD BGCOLOR=\"#CCCCCC\"><B>Last Name</B></TD>\n");
	print("<TD BGCOLOR=\"#CCCCCC\"><B>Memo</B></TD>\n");
	print("<TD BGCOLOR=\"#CCCCCC\"><B>Last Modified</B></TD>\n");
	print("</TR>\n");

	print(" <form name=\"toSave\" method=\"go\"  action=\"display_alumni_detail.php\">  \n");

$count = mysql_num_rows($users) ;
while($count >0){
   $var1 = mysql_fetch_row($users);
   print("\n<TR>");
   print("<td >");
   	print(" <input type=\"button\" name=\"sb\" value=\"Detail\" onClick= \" location.href = 'display_alumni_detail.php?sb=$var1[0]' \"> ");
  	print(" <input type=\"button\" name=\"sb\" value=\"Edit\" onClick= \" location.href = 'edit_alumni_detail.php?sb=$var1[0]' \"> ");
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
   print(" <input type=\"submit\" name=\"sb\" />");
   print(" </form> ");

   /* Free result set */
	mysql_free_result($users);

	/* Close connection */
	mysql_close($mysql_link);

?>
</BODY>
</HTML>