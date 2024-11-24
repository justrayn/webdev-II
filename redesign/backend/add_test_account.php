<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Account</title>
    <link rel="stylesheet" href="../../public/css/form.css"> <!-- Optional: Link to your CSS file for styling -->
</head>
<body>
    <h2>Add Account</h2>
    <form action="add_account_form.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="accnttype">Account Type:</label><br>
        <input type="text" id="accnttype" name="accnttype" required><br><br>
        
        <input type="submit" value="Add Account">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'Database.php';

        // Create an instance of the Database class and connect to the database
        $database = new Database();
        $conn = $database->connect();

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $accnttype = $_POST['accnttype'];

        // Prepare the SQL statement
        $sql = "INSERT INTO admin_accounts (name, email, accnttype) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bind_param("sss", $name, $email, $accnttype);

        // Execute the statement and check for success
        if ($stmt->execute()) {
            echo "New account created successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
