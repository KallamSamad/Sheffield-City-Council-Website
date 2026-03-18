 

<?php require_once 'nav.php'; ?>

<div class="page">
    <h1>Contact Us</h1>
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
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="message">Message</label><br>
        <textarea id="message" name="message" rows="5"></textarea><br><br>
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
 
