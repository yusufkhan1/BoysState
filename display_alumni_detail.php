<HTML>
<HEAD>
<TITLE>Figure 16-4</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<link rel="stylesheet" type="text/css" href="alumni_style.css" />

</HEAD>
</body>
<?php
	// connect to server
	$ID = $_GET['sb'];
	$mysql_link = mysql_connect("localhost", "root", "mysql"); mysql_select_db("alumni", $mysql_link);
	$query = "SELECT alumni_id,name_title,name_first,name_middle,name_last,email1,email2,name_spouse,phone_home,phone_cell,phone_work,memo,home_street,home_city,home_state,home_zip,work_name,work_street,work_city,work_state,work_zip,parent_name,parent_phone,parent_email,parent_street,parent_city,parent_state,parent_zip,boys_state_town,high_school,boys_state_year,legion_post_sponsor,fin_sponsor,sponsor_contact,sponsor_address1,sponsor_address2,sponsor_city,sponsor_zip,sponsor_state,date_last_modified,special1,district,boysstate_age,boysstate_number,boys_state_room_number FROM production_alumni_table where alumni_id=$ID";
	$users = mysql_query($query, $mysql_link);

	print("<a href= index.html > Click here to return to the Main Page </a> \n");
	print("<TABLE cellpadding=\"5px\" border = 2> \n ");
$count = mysql_num_rows($users) ;
while($count >0){
   $var1 = mysql_fetch_row($users);
   print("<tr><td>Alumni ID</td>");
   print("<td> $var1[0] </td>");
   print("</tr>\n<tr><td>Title</td>");
   print("<td> $var1[1] </td>");
   print("</tr>\n<tr><td>First Name</td>");
   print("<td> $var1[2] </td>");
   print("</tr>\n<tr><td>Middle Name</td>");
   print("<td> $var1[3] </td>");
   print("</tr>\n<tr><td>Last Name</td>");
   print("<td> $var1[4] </td>");
   print("</tr>\n<tr><td>E-mail 1</td>");
   print("<td> $var1[5] </td>");
   print("</tr>\n<tr><td>E-mail 2</td>");
   print("<td> $var1[6] </td>");
   print("</tr>\n<tr><td>Spouse's Name</td>");
   print("<td> $var1[7] </td>");
   print("</tr>\n<tr><td>Home Phone</td>");
   print("<td> $var1[8] </td>");
   print("</tr>\n<tr><td>Cell Phone</td>");
   print("<td> $var1[9] </td>");
   print("</tr>\n<tr><td>Work Phone</td>");
   print("<td> $var1[10] </td>");
   print("</tr>\n<tr><td>Memo</td>");
   print("<td> $var1[11] </td>");
   print("</tr>\n<tr><td>Home Address</td>");
   print("<td> $var1[12] </td>");
   print("</tr>\n<tr><td>Home City</td>");
   print("<td> $var1[13] </td>");
   print("</tr>\n<tr><td>Home State</td>");
   print("<td> $var1[14] </td>");
   print("</tr>\n<tr><td>Home Zip Code</td>");
   print("<td> $var1[15] </td>");
   print("</tr>\n<tr><td>Name of Work</td>");
   print("<td> $var1[16] </td>");
   print("</tr>\n<tr><td>Address of Work</td>");
   print("<td> $var1[17] </td>");
   print("</tr>\n<tr><td>Work City</td>");
   print("<td> $var1[18] </td>");
   print("</tr>\n<tr><td>Work State</td>");
   print("<td> $var1[19] </td>");
   print("</tr>\n<tr><td>Work Zip Code</td>");
   print("<td> $var1[20] </td>");
   print("</tr>\n<tr><td>Parent's Name</td>");
   print("<td> $var1[21] </td>");
   print("</tr>\n<tr><td>Parents Phone</td>");
   print("<td> $var1[22] </td>");
   print("</tr>\n<tr><td>Parents Email</td>");
   print("<td> $var1[23] </td>");
   print("</tr>\n<tr><td>Parents Address</td>");
   print("<td> $var1[24] </td>");
   print("</tr>\n<tr><td>Parents City</td>");
   print("<td> $var1[25] </td>");
   print("</tr>\n<tr><td>Parent's State</td>");
   print("<td> $var1[26] </td>");
   print("</tr>\n<tr><td>Parent's Zip Code</td>");
   print("<td> $var1[27] </td>");
   print("</tr>\n<tr><td>Boys' State Town</td>");
   print("<td> $var1[28] </td>");
   print("</tr>\n<tr><td>high_school</td>");
   print("<td> $var1[29] </td>");
   print("</tr>\n<tr><td>Boys' State Year</td>");
   print("<td> $var1[30] </td>");
   print("</tr>\n<tr><td>Legion Post Sponsor</td>");
   print("<td> $var1[31] </td>");
   print("</tr>\n<tr><td>Fin Sponsor</td>");
   print("<td> $var1[32] </td>");
   print("</tr>\n<tr><td>Fin Sponsor</td>");
   print("<td> $var1[33] </td>");
   print("</tr>\n<tr><td>Sponsor Address</td>");
   print("<td> $var1[34] </td>");
   print("</tr>\n<tr><td>Sponsor Address3</td>");
   print("<td> $var1[35] </td>");
   print("</tr>\n<tr><td>sponsor_city</td>");
   print("<td> $var1[36] </td>");
   print("</tr>\n<tr><td>sponsor_zip</td>");
   print("<td> $var1[37] </td>");
   print("</tr>\n<tr><td>sponsor_state</td>");
   print("<td> $var1[38] </td>");
   print("<tr><td>Date Laste Modified</td>");
   print("<td> $var1[40] </td>");
   print("</tr>\n<tr><td>district</td>");
   print("<td> $var1[41] </td>");
   print("</tr>\n<tr><td>boysstate_number</td>");
   print("<td> $var1[42] </td>");
   print("</tr>\n<tr><td>boys_state_room_number</td>");
   print("<td> $var1[43] </td>");
   print("</tr>");

   $count = ($count -1);
   }

	//end table
	print("</TABLE>\n");

	/* Free result set */
	mysql_free_result($users);

	/* Close connection */
	mysql_close($mysql_link);

?>
</BODY>
</HTML>