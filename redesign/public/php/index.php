<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../backend/controllers/AccountController.php';
require_once '../../backend/controllers/EventController.php';

$eventController = new EventController();
$accountController = new AccountController();

$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
$events = $eventController->index($filter);
$accounts = $accountController->index();

include_once '../../backend/views/admin.php';
?>
