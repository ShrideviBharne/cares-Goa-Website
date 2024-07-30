<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARES Goa - Contact Us</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <main>
        <h1>Contact Us</h1>
        <form action="submit_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
    <script src="js/scripts.js"></script>
</body>
</html>
