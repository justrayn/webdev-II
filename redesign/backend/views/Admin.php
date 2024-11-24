<?php
// Include the AccountController
require_once __DIR__ . '/../controllers/AccountController.php';

// Create an instance of the AccountController
$accountController = new AccountController();

// Fetch the accounts data
$accounts = $accountController->index();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin side</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/sidebar.css">
    <link rel="stylesheet" href="../../public/css/scrollbar.css">
    <link rel="stylesheet" href="../../public/css/admin-Events.css">
    <link rel="stylesheet" href="../../public/css/admin-Accounts.css">
    <link rel="stylesheet" href="../../public/css/topbar.css">
</head>
<body>
    <div class="container">
        <aside id="sidebar">
            <ul>
                <li><a href="#"><span class="material-icons">menu</span></a></li>
                <li><a href="#events-heading"><span class="material-icons">campaign</span></a></li>
                <li><a href="#Accounts-heading"><span class="material-icons">group</span></a></li>
                <li><a href="#"><span class="material-icons">logout</span></a></li>
            </ul>
        </aside>

        <div class="Events-container">
            <div class="topbar">
                <ul>
                    <li><a href="index.php?filter=all" class="<?php echo ($filter == 'all') ? 'active' : ''; ?>">All Events</a></li>
                    <li><a href="index.php?filter=approved" class="<?php echo ($filter == 'approved') ? 'active' : ''; ?>">Approved Events</a></li>
                    <li><a href="index.php?filter=pending" class="<?php echo ($filter == 'pending') ? 'active' : ''; ?>">Pending Events</a></li>
                </ul>
            </div>
            <h2 id="events-heading">Events</h2>
            <div class="Events-table-container" id="events-table-container">
                <table class="Events-table">
                    <thead>
                        <tr>
                            <th>EVENT</th>
                            <th>STATUS</th>
                            <th>HOST</th>
                            <th>CES POINTS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($events) && $events->num_rows > 0): ?>
                            <?php while ($row = $events->fetch_assoc()) : ?>
                                <tr>
                                    <td><?php echo $row['eventname']; ?></td>
                                    <td><?php echo $row['evntstat']; ?></td>
                                    <td><?php echo $row['host']; ?></td>
                                    <td><?php echo $row['cespnt']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="4">No events found.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="Accounts-container">
            <h2 id="Accounts-heading">Accounts</h2>
            <div class="Accounts-table-container" id="Accounts-table-container">
                <table class="Accounts-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Account type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($accounts) && $accounts->num_rows > 0): ?>
                            <?php while ($row = $accounts->fetch_assoc()) : ?>
                                <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['accnttype']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="3">No accounts found.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
