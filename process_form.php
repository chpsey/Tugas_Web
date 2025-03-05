<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['from_name'];
    $email = $_POST['reply_to'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $anonymous = isset($_POST['anonymous']) ? 1 : 0;

    if ($anonymous) {
        $name = 'Anonymous';
    }

    $stmt = $conn->prepare("INSERT INTO messages (name, email, date, message, anonymous) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $email, $date, $message, $anonymous);

    if ($stmt->execute()) {
        header('Location: index.php');
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>