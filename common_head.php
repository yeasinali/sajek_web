<?php
require_once('core/init.php');
$admin = new Admin();
$info = new Info();
$transport = new Transport();
$hotel = new Hotel();
$slider = new Slider();
$a_id = Input::get('a_id');
$info_id = Input::get('info_id');
$sl_id = Input::get('slider_id');
$token = Input::get('token');
$admin->check_admin_login();
$admin->check_admin_token($token);

?>