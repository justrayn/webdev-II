<?php
require_once __DIR__ . '/../models/Account.php';

class AccountController {
    private $accountModel;

    public function __construct() {
        $this->accountModel = new Account();
    }

    public function index() {
        $filter = isset($_GET['acc_filter']) ? $_GET['acc_filter'] : 'allaccs';
        $accounts = $this->accountModel->getAccounts($filter);

        if ($accounts === false) {
            die("Error fetching accounts from the database.");
        }

        return $accounts;
    }
}

