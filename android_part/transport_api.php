<?php
require_once('core/init.php');
$transport = new Transport();
$row = $transport->transport_list();
$transportlist= json_encode($row);
echo $transportlist;

?>