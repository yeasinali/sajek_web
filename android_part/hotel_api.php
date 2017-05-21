<?php
require_once('core/init.php');
$hotel = new Hotel();
$row = $hotel->hotel_list();
$hotellist = json_encode($row);
echo $hotellist;

?>