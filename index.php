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


  <!--- SWIPER JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

  <!-- CSS STYLESHEET -->
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



    <header>
       <!-- HOME PAGE -->
        <div class="container header__container">
               <div class="header__left">
                <h1 class="header__left-h1">Learn Electronics Subjects <span class="auto-type"></span></h1>
                <div class="header__left-para">
                <p>
                 Explore EduElex and develop your fundamentals of electronics subjects and skills in a simplified way
                 and be prepared for your exams.
                </p>
                <a href="subjects.php" class="btn btn-primary">Get Started</a>
            </div>
            </div>
        
        
      <div class="header__right">
        <div class="header__right-image">
            <img src="Images/Homepage_image.png"> 
                  </div>
    </div>
    </header>
    <!--================================== END OF HEADER ==============================-->



    <section class="categories">
        <div class="container categories__container">
        <div class="categories__left">
        <h2 style="text-align: left;">Subjects</h2>
        <p>Learn electronics subjects anytime anywhere :- </p>
               <p>   •  Learn using free Videos and Notes. </p>
                <p>  •	Discuss your queries in QNA sections. </p>
                <p>  •	Everything Curated at a single place.  </p>
                <br>

        <a href="subjects.php" class="btn btn-primary">Learn Now</a>
    </div>

        <div class="categories__right">

        <article class="category">
            <span><img class="category__image" src="Images/sem5_image2.png" alt="sem5-img"></span>
            <h5 class="category-right-heading">SEM V</h5>
            <p class="category-right-info">Learn about <br> PCS,&nbsp; DSP,&nbsp; LIC,&nbsp; DCOM,&nbsp; NNFL</p>
        </article>

        <article class="category">
            <span><img class="category__image" src="Images/sem6_image2.png" alt="sem6-img"></span>
            <h5 class="category-right-heading">SEM VI</h5>
            <p class="category-right-info">Learn about <br> BVLSI,&nbsp; EE,&nbsp; CCN,&nbsp; ESRTOS,&nbsp; ML</p>
        </article>
        
        </div>
        </div>
    </section>
    <!--================================== END OF SUBJECTS ==============================-->



  <!---================================= FAQ'S =========================================-->


<section class="faqs">
    <h2>Frequently Asked Questions</h2>
    <div class="container faqs__container">
        
        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>What is EduElex ?</h4>
        <p>EduElex is a free online resource that helps students, and engineers learn with the help of
            youtube videos. Our website has several videos on theory concepts along with notes 
            related to current syllabus. We have uploaded more than 200+ youtube videos on our
             website.</p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>Which Subjects does EduElex offers ?</h4>
        <p>Their are 10 different subjects on EduElex website which includes all SEM V and SEM VI subjects that are 
            curated module-wise along with notes.
        </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>How can I get answers for my doubts ?</h4>
        <p>EduElex offers a QNA feature below the youtube video of every topic where learners can 
            ask questions or give answers of questions asked by fellow learners if they have knowledge
            of respective topic.</p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>Do we have to pay any fee to watch the videos ?</h4>
        <p>No, EduElex is a completely free platform made with the vision to make learning simple for all
            the learners with everything at a single place.
        </p>
            </div>
        </article>


    </div>
</section>

  <!--================================== END OF FAQ'S ==============================-->




    <section class="container testimonials__container swiper mySwiper">
        <h2></h2>
        <h2>Student's Testimonials</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="Images/dinesh.png">
                </div>
                <div class="testimonial__info">
                    <h5>Dinesh Mistri</h5>
                    <small>Hardware Enthusiast</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        "My experience at EduElex is great and memorable.
                        I am thankful to EduElex for providing a platform to learn everything at a 
                        single place."
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="Images/bhakti.png">
                </div>
                <div class="testimonial__info">
                    <h5>Bhakti Pansare</h5>
                    <small>Web Developer</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        "It was my immense luck and fortune to find EduElex. It has saved my precious time during
                        exam days and has also helped me to score great marks in my examinations."
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="Images/vaibhav.jpeg">
                </div>
                <div class="testimonial__info">
                    <h5>Vaibhav Ambati</h5>
                    <small>Programmer</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        "One thing that impressed me about EduElex is if I have a question than I can ask 
                         it in QNA section which is very critical when we are learning online. 
                         It helped me solve my doubts and also to prepare for my exams."
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="Images/swayam.png">
                </div>
                <div class="testimonial__info">
                    <h5>Swayam Thanekar</h5>
                    <small>Game Developer</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        "I liked that the website has module-wise videos and notes PLUS 
                        the QNA section. The Notes were really great and curated."
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="Images/vinay.jpeg">
                </div>
                <div class="testimonial__info">
                    <h5>Vinay Bait</h5>
                    <small>Open Source Enthusiast</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        "The website exceeded my expectations in many regards, especially in the depth of
                         information provided and the access to the various videos and notes.
                         With a very user-friendly UI , it became very interesting to learn the concepts."
                    </p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>

  <!--================================== END OF TESTIMONIALS ==============================-->



<footer>
    <div class="container footer__container">
        <div class="footer__1">
            <a href="index.html" class="footer__logo"><h4>EduElex</h4></a>
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



    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="JS/main.js"></script>

    <script>
        var typed = new Typed(".auto-type", {
            strings: ["at your Comfort", "Anytime, Anywhere", "using Videos and Notes."],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true
        })
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
      },
      // when window width is >= 600px
      breakpoints: {
        600: {
            slidesPerView: 2
        }
      }
    });

    </script>

</body>
</html>