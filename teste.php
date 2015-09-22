<?php
require './controller/Conectionmysql.php';
require './controller/ConectionBD.php';

$conn = new ConnectionBD();


print_r(ConnectionBD::$handle);