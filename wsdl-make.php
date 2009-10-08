<?
require_once 'WSDLInterpreter.php';
$myWSDLlocation = 'NewAssetDownloadService.wsdl';
$wsdlInterpreter = new WSDLInterpreter($myWSDLlocation);
$wsdlInterpreter->savePHP('.');
?>