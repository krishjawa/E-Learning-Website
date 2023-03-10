<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduElex</title>

    <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- GOOGLE FONTS (MONTSERRAT)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/about.css">

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z7ZWFYJLWL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z7ZWFYJLWL');
</script>

</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php"><h3>EduElex</h3></a>
            <u1 class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="subjects.php">Subjects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Sign In</a></li>
            </u1>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--================================== END OF NAVBAR ==============================-->





    <section class="about__achievements">
        <div class="container about__achievements-container">
            <div class="about__achievements-left">
                <img src="Images/aboutpage_image.png">
            </div>
            <div class="about__achievements-right">
                <h1>Achievements</h1>
                <p>EduElex is a free online resource that helps students, and engineers learn using
                     youtube videos. Our website has several videos on theory concepts along with notes 
                     related to current syllabus. We have uploaded more than 100+ youtube videos on our
                      website.</p>
                     <div class="achievements__cards">
                        <article class="achievement__card">
                            <span class="achievement__icon">
                                <i class="uil uil-book-open"></i>
                            </span>
                            <h3>10</h3>
                            <p>Subjects</p>
                        </article>

                        <article class="achievement__card">
                            <span class="achievement__icon">
                                <i class="uil uil-youtube"></i>
                            </span>
                            <h3>200+</h3>
                            <p>Youtube Videos</p>
                        </article>

                        <article class="achievement__card">
                            <span class="achievement__icon">
                                <i class="uil uil-users-alt"></i>
                            </span>
                            <h3>50+</h3>
                            <p>Students</p>
                        </article>

                     </div>
            </div>
        </div>
    </section>
    <!--================================== END OF ACHIEVEMENTS ==============================-->









    <section class="team">
        <h2>Meet Our Team</h2>
        <div class="container team__container">
            <article class="team__member">
                <div class="team__member-image">
                    <img src="Images/vedant.jpg">
                </div>
                <div class="team__member-info">
                    <h4>Vedant Thorat</h4>
                    <p>Team Member</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>  
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="Images/anish.png">
                </div>
                <div class="team__member-info">
                    <h4>Anish Mhaske</h4>
                    <p>Team Member</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>  
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="Images/krish.png">
                </div>
                <div class="team__member-info">
                    <h4>Krish Jawa</h4>
                    <p>Team Member</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>  
            </article>

        </div>
    </section>


<!--================================== END OF TEAM ==============================-->

    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.php" class="footer__logo"><h4>EduElex</h4></a>
                <p>
                    Learn Electronics Subjects at your Comfort.
                </p>
            </div>
    
            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="subjects.php">Subjects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
    
            <div class="footer__3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
                </div>
    
                <div class="footer__4">
                    <h4>Contact Us</h4>
                    <div>
                        <p>+01 234 567 8910</p>
                        <p>eduelex@gmail.com</p>
                    </div>
    
            <ul class="footer__socials">
                <li>
                    <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://instagram.com"><i class="uil uil-instagram-alt"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com"><i class="uil uil-twitter"></i></a>
                </li>
                <li>
                    <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a>
                </li>
            </ul>
            </div>    
        </div>
        <div class="footer__copyright">
        <small>Copyright &copy; EduElex</small>
        </div>
    </footer>
    
        <script src="JS/main.js"></script>
    
    
    </body>
    </html>