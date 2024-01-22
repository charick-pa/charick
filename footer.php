<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <style>
        /* Your existing styles go here */

        /* Footer Styles */
        footer {
            position: relative;
            top: 80vh;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .footer-menu {
            display: flex;
            justify-content: space-around;
            max-width: 600px;
            margin: 0 auto;
        }

        .menu-block {
            flex: 1;
            padding: 10px;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Your existing content goes here -->

    <!-- Footer -->
    <footer>
        <div class="footer-menu">
            <div class="menu-block">
                <h4>Menu 1</h4>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </div>

            <div class="menu-block">
                <h4>Menu 2</h4>
                <ul>
                    <li><a href="#">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                </ul>
            </div>

            <div class="menu-block">
                <h4>Menu 3</h4>
                <ul>
                    <li><a href="#">Link 7</a></li>
                    <li><a href="#">Link 8</a></li>
                    <li><a href="#">Link 9</a></li>
                </ul>
            </div>

            <div class="menu-block">
                <h4>Menu 4</h4>
                <ul>
                    <li><a href="#">Link 10</a></li>
                    <li><a href="#">Link 11</a></li>
                    <li><a href="#">Link 12</a></li>
                </ul>
            </div>
        </div>

        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <!-- Add more social media icons as needed -->
        </div>

        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </footer>

    <!-- Include Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>
</body>
</html>
