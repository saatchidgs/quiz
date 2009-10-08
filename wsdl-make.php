<?
require_once 'WSDLInterpreter.php';
$myWSDLlocation = 'quiz.wsdl';
$wsdlInterpreter = new WSDLInterpreter($myWSDLlocation);
$wsdlInterpreter->savePHP('.');
?>