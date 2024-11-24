<?php
require_once __DIR__ . '/../models/Account.php';

class AccountController {
    private $accountModel;

    public function __construct() {
        $this->accountModel = new Account();
    }

    public function index() {
        $accounts = $this->accountModel->getAccounts();

        if ($accounts === false) {
            die("Error fetching accounts from the database.");
        }

        return $accounts;
    }
}
