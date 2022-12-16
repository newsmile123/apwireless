<?
session_start();
phpinfo();
echo "Session <pre>";
print_r($_SESSION);




echo '<h2>Some array #1</h2>';
echo '<pre>';
$file_pointer = $_SERVER['DOCUMENT_ROOT']."/files4lab/serialize2.txt";


if ( !$file_handle = fopen($file_pointer, 'rb') ) exit;
$myarrayecho = unserialize( fread($file_handle, filesize($file_pointer)) );
fclose($file_handle);

echo '<h2>Serialize back:</h2>';
echo '<pre>';
var_dump($myarrayecho);
//print_r($myarrayecho);
//var_export($myarrayecho);
echo '</pre>';
$_SESSION=$myarrayecho;
echo "<br>Session recovered<pre>";
print_r($_SESSION);





echo "</pre>";





?>