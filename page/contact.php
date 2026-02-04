<?php
include 'dbconnection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <title>Contact Us - Student Management System</title>
</head>
<body style="margin: 0; padding: 0;">
    <div>
        <?php
        include 'header.php';
        ?>
    </div>
     
    <div class="contact-container">
        <div class="contact-header">
            <h1>Contact Us</h1>
            <p>Get in touch with us. We'd love to hear from you.</p>
        </div>

        <div class="contact-content">
            <div class="contact-form-section">
                <h2>Send us a Message</h2>
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>

            <div class="contact-info-section">
                <h2>Contact Information</h2>
                <div class="info-item">
                    <span class="info-icon">📍</span>
                    <div>
                        <h3>Address</h3>
                        <p>Gitega<br>Bujumbura<br>Burundi</p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">☎</span>
                    <div>
                        <h3>Phone</h3>
                        <p>+257 62985257</p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">✉</span>
                    <div>
                        <h3>Email</h3>
                        <p>admin@com.edu</p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">⏰</span>
                    <div>
                        <h3>Working Hours</h3>
                        <p>Monday - Friday: 9:00 AM - 5:00 PM<br>Saturday: 10:00 AM - 2:00 PM<br>Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php
        include 'footer.php';
        ?>
    </div>
</body>
</html>