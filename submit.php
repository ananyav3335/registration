<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $address = htmlspecialchars($_POST["address"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Thank You for Registering!</h1>
    </header>
    <main>
        <h2>Submitted Information:</h2>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $phone; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
        <p><strong>Gender:</strong> <?php echo $gender; ?></p>
        <p><strong>Address:</strong> <?php echo nl2br($address); ?></p>
    </main>
    <footer>
        <p>&copy; 2024 Online Registration Form</p>
    </footer>
</body>
</html>