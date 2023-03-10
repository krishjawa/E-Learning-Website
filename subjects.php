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
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Sacramento&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="CSS/style.css">

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



    <section class="courses_page">
        <h2 class="courses_pageheading">Subjects</h2>
        <div class="container courses__container">

            <article class="courses">
                <div class="course__image">
                   <img class="course_image" src="Images/sem5_image.png">  
                </div>
               <div class="courses__Info">
                <h4>SEM V</h4>
                <p>
                    PCS &nbsp; &nbsp;  DSP &nbsp; &nbsp; LIC &nbsp; &nbsp; DCOM &nbsp; &nbsp; NNFL
                </p>
                <a href="sem5_subjects.php" class="btn btn-primary courses__btn">Start Learning</a>
               </div>
            </article>

            <article class="courses">
                <div class="course__image">
                    <img class="course_image" src="Images/sem6_image.png">    
                </div>
                <div class="courses__Info">
                    <h4>SEM VI</h4>
                <p>
                    BVLSI &nbsp; &nbsp;  EE &nbsp; &nbsp; CCN &nbsp; &nbsp; ESRTOS &nbsp; &nbsp; ML
                </p>
                <a href="sem6_subjects.php" class="btn btn-primary courses__btn">Start Learning</a>
                </div>
            </article>

           
        </div>
    </section>
  <!--================================== END OF SUBJECTS ==============================-->



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

<!--================================== END OF FOOTER ==============================-->
    
        <script src="JS/main.js"></script>
    
    
    </body>
    </html>