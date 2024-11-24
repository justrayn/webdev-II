<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../backend/controllers/EventController.php';
require_once '../../backend/controllers/AccountController.php';

$eventController = new EventController();
$accountController = new AccountController();

// Event filter
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
$events = $eventController->index($filter);

// Accounts filter
$accountsFilter = isset($_GET['acc_filter']) ? $_GET['acc_filter'] : 'allaccs';
$accounts = $accountController->index($accountsFilter);

include_once '../../backend/views/admin.php';
?>
