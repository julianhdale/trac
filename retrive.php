<?php 

$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pwd = 'root'; 
$database = 'testrfid'; 
$table = 'demotable'; 

mysql_connect($db_host, $db_user, $db_pwd) or die(mysql_error()); 
mysql_select_db($database) or die(mysql_error()); 

// Filter the records 


$result = mysql_query("SELECT * FROM {$table} WHERE ID=1") ; 
if (!$result) { 
die("Query to show fields from table failed data access ITEMS"); 
} 


$numrows=mysql_num_rows($result); 
echo "<table>"; 

while($row = mysql_fetch_row($result)) 
{ 
echo "<tr>"; 

foreach($row as $cell){ 
echo "<td>$cell</td>"; 
} 
echo "</tr>"; 

} 
echo "</table>"; 

mysql_free_result($result); 
?>