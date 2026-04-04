

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="a11y.css">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
</head>
<body>

<?php require_once 'nav.php'; ?>

<div class="page contact-page">
    <h1 class="contact-title">Contact Us</h1>

    <div class="contact-container"> 

    <div class="contact-info">
        <p><strong>Email:</strong> info@example.com</p>
        <p><strong>Phone:</strong> +44 1234 567890</p>
        <p><strong>Address:</strong> London, United Kingdom</p>
    </div>

    <div class="contact-form"> 
    <h2>Send us a message</h2>

    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div> 

        <div class="form-group"> 
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        </div>
        
        <div class="form-group"> 
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5"></textarea>
        </div> 

        <button type="submit">Submit</button>
    </form>
</div>

<?php require_once "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
 
