<?php
require 'conf.php';

// connect to DB using array values from conf.php
$conn = new mysqli(
    $conf['db_host'],
    $conf['db_user'],
    $conf['db_pass'],
    $conf['db_name']
);

// check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// query users (ascending by name)
$sql = "SELECT id, name, email FROM users ORDER BY name ASC";
$result = $conn->query($sql);

// display list
if ($result && $result->num_rows > 0) {
    echo "<h2>User List</h2>";
    echo "<ol>"; // ordered list gives automatic numbering
    while ($row = $result->fetch_assoc()) {
        $name = htmlspecialchars($row['name']);
        $email = htmlspecialchars($row['email']);
        echo "<li>$name ($email)</li>";
    }
    echo "</ol>";
} else {
    echo "No users found.";
}

$conn->close();
