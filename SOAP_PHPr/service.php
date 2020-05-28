<?php
include('lib/nusoap.php');
$client = new nusoap_client('http://www.dneonline.com/calculator.asmx?WSDL','wsdl');
$err = $client->getError();
if ($err) {	echo 'falla construct' . $err ; }
$param = array('intA' => '5','intB' => '8');

$suma = $client->call('Add', $param);
$multiplicacion = $client->call('Multiply', $param);
$division = $client->call('Divide', $param);

print_r($suma);
print_r($division);
print_r($multiplicacion);
?>

