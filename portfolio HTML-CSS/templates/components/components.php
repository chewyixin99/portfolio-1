<?php

function head() {
    echo '<meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <link rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

            <link rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
            integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" /> 

            <!-- Update these with your own font -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,100&family=Nunito:wght@200&display=swap" rel="stylesheet">
            
            <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
            
            <link rel="stylesheet" href="../static/css/style.css">
            <link rel="stylesheet" href="../static/css/comments.css">';
}

function navbar() {
    echo '<nav>
            <input id="nav-toggle" type="checkbox">
            <div class="logo"><a href="index.php#home" class="logo"><strong>CHEW</strong>&nbsp;YIXIN</a></div>
            
            <ul class=nav__list>
                <li class="nav__item"><a href="index.php#home" class = "nav__link">Home</a> </li>
                <li class="nav__item"><a href="index.php#interests" class = "nav__link">Interests</a> </li>
                <li class="nav__item"><a href="index.php#about" class = "nav__link">About</a> </li>
                <li class="nav__item"><a href="index.php#showcase" class = "nav__link">Showcase</a> </li>
                <li class="nav__item"><a href="index.php#project" class = "nav__link">Projects</a> </li>
            </ul>

            <label for="nav-toggle" class=icon-burger>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>

        </nav>';
}


function footer() {
    echo '<footer class="footer">
            <!-- replace with your own email address -->
            <a href="mailto:chewyixin1999@gmail.com" class="footer__link">chewyixin1999@gmail.com</a>
            <ul class="social-list">
            
                <!-- insert social links here -->
                <li class="social-list__item">
                    <a class="social-list__link" href="https://instagram.com/chewyixinn">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://linkedin.com/in/chewyixin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://github.com/chewyixin99">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://codepen.io/chewyixin99"> 
                        <i class="fab fa-codepen"></i>
                    </a>
                </li>
            </ul>
        </footer>';
}

?>