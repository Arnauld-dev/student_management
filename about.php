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
    <title>About Us - Student Management System</title>
</head>
<body style="margin: 0; padding: 0;">
    <div>
        <?php
        include 'header.php';
        ?>
    </div>
     
    <div class="about-container">
        <div class="about-header">
            <h1>About Us</h1>
            <p>Discover our mission, vision, and commitment to education</p>
        </div>

        <div class="about-content">
            <section class="about-section">
                <h2>Our Mission</h2>
                <p>To provide an innovative and efficient Student Management System that empowers educational institutions to streamline their operations, enhance student engagement, and foster academic excellence through technology-driven solutions.</p>
                <div class="highlight-box">
                    <p>"Education is the most powerful weapon which you can use to change the world." - Nelson Mandela</p>
                </div>
            </section>

            <section class="about-section">
                <h2>Our Vision</h2>
                <p>We envision a world where educational institutions can seamlessly manage their student information, track academic progress, and facilitate communication between students, parents, and educators through a unified, user-friendly platform.</p>
            </section>

            <section class="about-section features-section">
                <h2>Why Choose Us?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">⚡</div>
                        <h3>Fast & Reliable</h3>
                        <p>Optimized performance ensuring quick data processing and minimal downtime for uninterrupted service.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔒</div>
                        <h3>Secure</h3>
                        <p>Enterprise-grade security protocols protecting sensitive student and institutional data.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🎨</div>
                        <h3>User-Friendly</h3>
                        <p>Intuitive interface designed for easy navigation by students, teachers, and administrators.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📱</div>
                        <h3>Mobile Ready</h3>
                        <p>Fully responsive design that works seamlessly on desktops, tablets, and mobile devices.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📊</div>
                        <h3>Analytics</h3>
                        <p>Comprehensive reporting and analytics tools for data-driven decision making.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🤝</div>
                        <h3>Support</h3>
                        <p>24/7 customer support and regular updates to ensure optimal system performance.</p>
                    </div>
                </div>
            </section>

            <section class="about-section">
                <h2>Our Team</h2>
                <p>Our dedicated team of developers, designers, and educators work tirelessly to create solutions that make a real difference in the education sector. With years of experience in both technology and education, we understand the challenges faced by institutions and students.</p>
            </section>

            <section class="about-section stats-section">
                <h2>By The Numbers</h2>
                <div class="stats-grid">
                    <div class="stat-box">
                        <div class="stat-number">500+</div>
                        <p>Schools & Colleges</p>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">50K+</div>
                        <p>Active Students</p>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">10K+</div>
                        <p>Educators</p>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">99.9%</div>
                        <p>Uptime</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="footer">
        <?php
        include 'footer.php';
        ?>
    </div>
</body>
</html>
