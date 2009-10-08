<?php
// include ('readWrite/scores.xml');

$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = '111111';
$db_db = 'quiz';

$scores = "readWrite/scores.xml";
// $input = "readWrite/input.xml";
// $output = "readWrite/output.xml";
$raw_xml = file_get_contents("php://input");
// $data = new edit();
print $raw_xml;
print $edit;

// print_r($data);

$fp = fopen($scores, "w");
fwrite($fp, $raw_xml);
fclose($fp);



	// $num = (int)$raw_xml;
	// mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error());
	// mysql_select_db("Database_Name") or die(mysql_error());
	// mysql_query("INSERT INTO `data` VALUES ('$name', '$email', '$location')");
	// Print "Your information has been successfully added to the database.";

if ($raw_xml) {
	mysql_connect("$db_host", "$db_user", "$db_pass") or die('MySQl Connection Error:'.mysql_error());
	mysql_select_db("$db_db") or die('MySQL Error: Cannot select table');
		
	mysql_query("INSERT INTO `edit` (scores) VALUES ('$raw_xml')") or die('MySQl Connection Error:'.mysql_error()); 
	// Print "Your information has been successfully added to the database.";
	
	
	// $query = "SELECT * FROM edit"; 
	// 
	// $result = mysql_query("$query") or die(mysql_error());
	// $row = mysql_fetch_array("$result") or die(mysql_error());
	// echo $row['id']. " - ". $row['scores'];
	
	
	$arst = mysql_query('select * from edit');
	
	echo $arst;
	echo $msg;
	echo $num;
	echo $raw_xml;
}

?>

<object id="simple_editor" width="320" height="240">
	<param name=movie value="simple_editor.swf"> 
	<embed src="simple_editor.swf" width="320" height="240" type="application/x-shockwave-flash"></embed> 
</object>

<?
print "arst".$raw_xml;
print $edit;
?>