<?php


require_once '../../backend/controllers/EventController.php';
require_once '../../backend/controllers/AccountController.php';

$eventController = new EventController();
$accountController = new AccountController();

$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
$events = $eventController->index($filter);
$accounts = $accountController->index();

include_once '../../backend/views/admin.php';
?>
