<?
session_start();
phpinfo();
echo "Session <pre>";
print_r($_SESSION);




echo '<h2>Some array #1</h2>';
echo '<pre>';

$myarray=$_SESSION;
var_dump($myarray);
//print_r($myarray);
//var_export($myarray);
echo '</pre>';


$file_pointer = $_SERVER['DOCUMENT_ROOT']."/files4lab/serialize.txt";
if (!$file_handle = fopen($file_pointer, 'wb')) exit;
flock($file_handle, LOCK_EX);
if (fwrite($file_handle, serialize($myarray)) === false) exit;
flock($file_handle, LOCK_UN);
fclose($file_handle);

echo '<h2>Serialize success!</h2>';

if ( !$file_handle = fopen($file_pointer, 'rb') ) exit;
$myarrayecho = unserialize( fread($file_handle, filesize($file_pointer)) );
fclose($file_handle);

echo '<h2>Serialize back:</h2>';
echo '<pre>';
var_dump($myarrayecho);
//print_r($myarrayecho);
//var_export($myarrayecho);
echo '</pre>';






echo "</pre>";





?>