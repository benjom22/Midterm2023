<?php

require "../vendor/autoload.php";
require "./services/MidtermService.php";

Flight::register('midtermService', 'MidtermService');

Flight::json(Flight::midtermService()->__construct());

require 'routes/MidtermRoutes.php';

Flight::start();
 ?>
