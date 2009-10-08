<?
require_once 'WSDLInterpreter.php';
$myWSDLlocation = 'readWrite/output.wsdl';
$wsdlInterpreter = new WSDLInterpreter($myWSDLlocation);
$wsdlInterpreter->savePHP('.');
?>