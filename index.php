<?php
$scores = "readWrite/scores.xml";
$input = "readWrite/input.xml";
$output = "readWrite/output.xml";
$raw_xml = file_get_contents("php://input");

print $raw_xml;

$fp = fopen($scores, "w");
fwrite($fp, $raw_xml);
fclose($fp);
?>