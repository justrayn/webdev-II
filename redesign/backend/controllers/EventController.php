<?php
require_once __DIR__ . '/../models/Event.php';

class EventController {
    private $eventModel;

    public function __construct() {
        $this->eventModel = new Event();
    }

    public function index() {
        $filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
        $events = $this->eventModel->getEvents($filter);

        if ($events === false) {
            die("Error fetching events from the database.");
        }

        return $events;
    }
}

