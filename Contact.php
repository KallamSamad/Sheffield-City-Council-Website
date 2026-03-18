<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>

    <link rel="stylesheet" href="style.css">
</head>

 
<body>
    <?php require_once 'nav.php'; ?> 
<!-- Contact Content -->
<div class="page">

    <h1>Contact Us</h1>

    <div class="contact-info">
        <p><strong>Email:</strong> info@example.com</p>
        <p><strong>Phone:</strong> +44 1234 567890</p>
        <p><strong>Address:</strong> London, United Kingdom</p>
    </div>

    <h2>Send us a message</h2>

    <form>

        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Message</label><br>
        <textarea id="message" name="message" rows="5"></textarea><br><br>

        <button type="submit">Submit</button>

    </form>

</div>

<?php require_once "footer.php"?>


</body>
</html>