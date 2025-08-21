<!DOCTYPE HTML>
<html>
    <head>
        <meta lang="en">
        <meta charset="UTF-8">
        <title>Contact Us.</title>
        <link rel="stylesheet" href="/src/css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/Favicon/favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&family=Google+Sans+Code:ital,wght@0,300..800;1,300..800&family=Inconsolata:wght@200..900&family=Lexend+Deca:wght@100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </head>
    <body>
        <header>
            <div class="HDR-Col-1">
                <a href="/src/index.php">
                    <img src="/assets/LOGO-WITHOUT-BG.png" alt="Logo W/ Transparent BG" width="100" height="100" />
                </a>
                <h1>Welcome to Evergreen Global Institute LMS</h1>
            </div>
            <nav>
                <button>
                    <a href="tuition.php">Tuition</a>
                </button>
            </nav>
        </header>
        <main>
            <article>
                <section class="contact-us">
                    <h2>Contact Form.</h2>
                    <form action="contact-submit.php" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>

                        <button type="submit">Send Message</button>

                        <div id="google-recaptcha-checkbox"></div>

                        <p class="success-message" style="display: none;">Thank you for your message! We will get back to you soon.</p>
                        <p class="error-message" style="display: none;">There was an error sending your message. Please try again later.</p>
                    </form>
                </section>
            </article>
        </main>
        <footer>
            <p>&copy; 2025 Evergreen Global Institute. All rights reserved.</p>
                <br />
            <div class="footer-col-L">
                <p>Follow Us on Social Media!</p>
                <a><i class="bi bi-twitter"></i></a>
                <a><i class="bi bi-facebook"></i></a>
                <a><i class="bi bi-instagram"></i></a>
            </div>
            <div class="footer-col-R">
                <p>Privacy Statement.</p>
                <p>Terms of Service.</p>
            </div>
        </footer>
        <script src="/src/js/capcha.js"></script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    </body>
</html>