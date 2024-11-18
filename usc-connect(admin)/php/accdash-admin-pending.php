<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Events</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geo:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="..\css\accdash-admin-pending.css">
    <link rel="stylesheet" href="..\css\navbar.css">
    <link rel="stylesheet" href="..\css\footer.css">
    <link rel="stylesheet" href="..\css\sidebar.css">
</head>
<body>

<div class="container">
    <div class="leftmain">
        <ul class="sidebar">
        <li><a href="#"><span class="material-icons"> campaign</span></a></li>
            <li><a href="Admin-Accounts.php"><span class="material-icons">group</span></a></li>
            <li><a href="#"><span class="material-icons">key</span></a></li>
            <li><a href="#"><span class="material-icons">desktop_windows</span></a></li>
            <li><a href="#"><span class="material-icons">calendar_month</span></a></li>
            <li><a href="#"><span class="material-icons">logout</span></a></li>
        </ul>
    </div>

    <div class="rightmain">
        <div class="topbar">
            <ul>
                <li><a href="accdash-admin.php">All Events</a></li>
                <li><a href="accdash-admin-approved.php">Approved Events</a></li>
                <li><a href="#" class="active">Pending Events</a></li> <!-- Active link for current page -->
            </ul>
        </div>

        <table class="scndtopbar">
            <thead>
                <tr>
                    <th>EVENT NAME</th>
                    <th>STATUS</th>
                    <th>HOSTED BY</th>
                    <th>CES POINTS</th>
                </tr>
            </thead>
            <tbody class="ongoing-events-info">
            <tr style="cursor: pointer;">
                <td><a href="Event-info.php"><img src="..\img\sample2.png" alt="Description of Image 1"> Event Name</a></td>
                <td>Pending</td>
                <td>CISCO</td>
                <td>0</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
