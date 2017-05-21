<?php
require_once('core/init.php');
echo"yueasdfnk";
$transport = new Transport();
$row = $transport->transport_list();

$myJSON = json_encode($row);

echo $myJSON;

?>