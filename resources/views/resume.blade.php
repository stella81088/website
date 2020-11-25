<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Stella Li CS Portfolio</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Timeline CSS File -->
    <link href="assets/css/timeline/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyResume - v2.1.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        /* terminal layout */
        .fakeButtons {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            border: 1px solid #000;
            position: relative;
            top: 6px;
            left: 6px;
            background-color: #ff3b47;
            border-color: #9d252b;
            display: inline-block;
        }

        .fakeMinimize {
            left: 11px;
            background-color: #ffc100;
            border-color: #9d802c;
        }

        .fakeZoom {
            left: 16px;
            background-color: #00d742;
            border-color: #049931;
        }

        .fakeMenu {
            width: 750px;
            box-sizing: border-box;
            height: 40px;
            background-color: #bbb;
            margin: 0 auto;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }

        .fakeScreen {
            background-color: #151515;
            box-sizing: border-box;
            width: 750px;
            margin: 0 auto;
            padding: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        span,
        a {
            color: #fff;

        }

        .center {
            text-align: center;
        }

        .paragraph {
            text-align: justify;
        }

        /* skills tab */
        .main_skills {
            background: #FFF;
            width: 850px;
            margin: 50px auto;
            padding: 10px 30px 50px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
            font-size: 14px;
            display: inline-block;
            float: none;
            padding: 10px 30px;
            border-top: 2px solid transparent;
            border-right: 1px solid transparent;
            border-left: 1px solid transparent;
            border-bottom: 1px solid #DDD;
        }

        label:hover {
            cursor: pointer;
        }

        #tab1:checked~#content1,
        #tab2:checked~#content2,
        #tab3:checked~#content3,
        #tab4:checked~#content4,
        #tab5:checked~#content5 {
            display: block;
        }

        input:checked+label {
            border-top-color: #4da6ff;
            border-right-color: #DDD;
            border-left-color: #DDD;
            border-bottom-color: transparent;
            text-decoration: none;
        }

        .skills_tab {
            clear: both;
            padding-top: 10px;
            display: none;
        }
    </style>
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#skills"><i class="bx bxs-notepad"></i> <span>Skills</span></a></li>
                <li><a href="#work_experience"><i class="bx bxs-briefcase"></i> <span>Work Experience</span></a></li>
                <li><a href="#projects"><i class="bx bxs-package"></i> <span>Projects</span></a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Hello World!</h1>
            <br>
            <h2>My Name is Stella Li </h2>
            <p>I'm a <span class="typed" data-typed-items="Software Engineer, Full Stack Developer"></span></p>
            <div class="social-links">
                <a href="https://github.com/stella81088" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://www.youtube.com/channel/UCSXUn80Z5q94rH5GqmoLhDQ/featured?view_as=subscriber" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="https://www.linkedin.com/in/stella-li-744613141/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="assets/img/Stella_Li_Resume.pdf" download="Stella_Li_Resume"><i class="bx bxs-download"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <p> I graduated from Louisiana Tech University with a Bachelor's in Computer Science and concentrations in Cyber Security and Cloud Computing. I was also a NCAA D1 Student-Athelete during my undergrad. </p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <br><br>
                        <img src="assets/img/me.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">

                        <!-- <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p> -->
                        <div class="row">
                            <!-- <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 1 May 1995</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +123 456 7890</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : New York, USA</li>
                                </ul>
                            </div> -->

                            <!-- <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 30</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> email@example.com</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                                </ul>
                            </div> -->

                            <div class="fakeMenu">
                                <div class="fakeButtons fakeClose"></div>
                                <div class="fakeButtons fakeMinimize"></div>
                                <div class="fakeButtons fakeZoom"></div>
                            </div>
                            <div class="fakeScreen">

                                <span class="show"> &gt; Stella.Origin</span><br>
                                <span class="show">&nbsp;&nbsp;=&gt; "Toronto, Canada"<br><br></span>
                                <span class="show"> &gt; Stella.Undergrad_Involvements</span><br>
                                <span class="show">&nbsp;&nbsp;=&gt; "Upsilon Pi Epsilon: International Computing & Information Disciplines Honor Society"</span><br>
                                <span class=" show">&nbsp;&nbsp;=&gt; "Honors College at Louisiana Tech University"<br><br></span>
                                <span class="show"> &gt; Stella.Work_Experience->latest()->get();</span><br>
                                <span class="show">
                                    <span class="show">&nbsp;&nbsp;=&gt; Current Employment:</span><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [ "Company: Bartelmes Finance Lab", <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "Role: Junior Software Engineer", <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "StartDate: "October 2020" ] <br>
                                    <br></span>
                                <span class="show"> &gt; Stella.Interests</span><br>
                                <span class="show">&nbsp;&nbsp;=&gt; [ "Software Development", "Artificial Intelligence", "Space", "Sports", "Music" ]<br><br></span>
                                <span class="show"> &gt; Stella.Resume->download();</span><br>
                                <span class="show">&nbsp;&nbsp;=&gt; <a href="assets/img/Stella_Li_Resume.pdf" download="Stella_Li_Resume"> Stella_Li_Resume</a> <br></span>
                            </div>

                        </div>
                        <br>
                    </div>

                </div>
                <!-- <h3 class="center">Personal Statement:</h3>
                <p class="center">
                    The field of Computer Science excites me because it is a rapidly evolving industry that incorporates a large amount of critical thinking and is integrated into most of our daily activities. However, even when computers are such powerful machines, the very basic things that humans can do, a machine struggles with; for example, truly understanding and identifying what a cup is. The discrepancies and vulnerabilities are what intrigues me and I am very enthusiastic about closing the gaps between a machine and a human and how we can work together to make the world we live in more accessible, safer, and more convenient.
                </p> -->
            </div>

        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <!-- <section id="facts" class="facts">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="icofont-simple-smile"></i>
                            <span data-toggle="counter-up">232</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="icofont-document-folder"></i>
                            <span data-toggle="counter-up">521</span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-live-support"></i>
                            <span data-toggle="counter-up">1,463</span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-users-alt-5"></i>
                            <span data-toggle="counter-up">15</span>
                            <p>Hard Workers</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>
                <div class="row skills-content">
                    <div class="main_skills">
                        <input class="skills_tab" id="tab1" type="radio" name="tabs" checked>
                        <label for="tab1">Languages</label>
                        <input class="skills_tab" id="tab2" type="radio" name="tabs">
                        <label for="tab2">Platform & Frameworks</label>
                        <input class="skills_tab" id="tab3" type="radio" name="tabs">
                        <label for="tab3">Database</label>
                        <input class="skills_tab" id="tab4" type="radio" name="tabs">
                        <label for="tab4">Libraries</label>
                        <input class="skills_tab" id="tab5" type="radio" name="tabs">
                        <label for="tab5">Other</label>
                        <section class="skills_tab" id="content1">
                            <br><br>
                            <h5 class="center">Java&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Python&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;C#
                                &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;HTML5&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;CSS3&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;PHP&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;JavaScript</h5>
                        </section>
                        <section class="skills_tab" id="content2">
                            <br><br>
                            <h5 class="center">Laravel&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;XAMPP&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Apache
                                &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Node.js&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;macOS&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Linux&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Microsoft
                                &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;JSON&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Docker&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;MVC&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;REST•&nbsp;&nbsp;&nbsp;Selenium
                            </h5>
                        </section>
                        <section class="skills_tab" id="content3">
                            <br><br>
                            <h5 class="center">
                                MySQL&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;MongoDB
                            </h5>
                        </section>
                        <section class="skills_tab" id="content4">
                            <br><br>
                            <h5 class="center">
                                jQuery&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;pandas&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;NumPy
                            </h5>
                        </section>
                        <section class="skills_tab" id="content5">
                            <br><br>
                            <h5 class="center">
                                gRPC&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Figma&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Git&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;GPIO&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;AJAX&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Raspberry Pi
                                &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Mandarin&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Microsoft Office Suite•&nbsp;&nbsp;&nbsp;Maven
                            </h5>
                        </section>
                    </div>
                </div>
                <h3 class="center">Personal Statement:</h3>
                <p class="center">
                    The field of Computer Science excites me because it is a rapidly evolving industry that incorporates a large amount of critical thinking and is integrated into most of our daily activities. However, even when computers are such powerful machines, the very basic things that humans can do, a machine struggles with; for example, truly understanding and identifying what a cup is. The discrepancies and vulnerabilities are what intrigues me and I am very enthusiastic about closing the gaps between a machine and a human and how we can work together to make the world we live in more accessible, safer, and more convenient.
                </p>
            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <!-- <section id="work" class="work">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Work Experience</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Brandon Johnson</h4>
                            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                            <ul>
                                <li>Portland par 127,Orlando, FL</li>
                                <li>(123) 456-7891</li>
                                <li>alice.barkley@example.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Master of Fine Arts &amp; Graphic Design</h4>
                            <h5>2015 - 2016</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                        </div>
                        <div class="resume-item">
                            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                            <h5>2010 - 2014</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Senior graphic design specialist</h4>
                            <h5>2019 - Present</h5>
                            <p><em>Experion, New York, NY </em></p>
                            <ul>
                                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Graphic design specialist</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->

        <!-- End Resume Section -->

        <!-- ======= Work Experience Section ======= -->
        <section id="work_experience" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Work Experience</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>

                <div class="timeline">
                    <ul>
                        <li>
                            <div class="content">
                                <h4>Bartelmes Finance Lab</h4>
                                <div class="timelineinfo">
                                    Junior Software Engineer | Toronto, ON <br>

                                </div>
                                <div class="timelineinfoend">
                                    • &nbsp;&nbsp;Developed web application for client in Germany<br>
                                    • &nbsp;&nbsp;Used Laravel Framework, mySQL, PHP, HTML, CSS
                                </div>
                            </div>
                            <div class="point"></div>
                            <div class="date">
                                <h5>October 2020 - Present</h5>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <h4>Neighbourhood Watch Plus</h4>
                                <div class="timelineinfo">
                                    Full Stack Developer | Richmond Hill, ON <br>
                                </div>
                                <div class="timelineinfoend">
                                    • &nbsp;&nbsp;Front-End: used HTML, CSS, Javascript, Nodejs, <br>&nbsp;&nbsp;&nbsp;&nbsp;and JSON to create what the user sees with React <br>
                                    • &nbsp;&nbsp;Backend: user login with MongoDB <br>
                                    • &nbsp;&nbsp;Used Figma to create web and mobile application <br>&nbsp;&nbsp;&nbsp;&nbsp;prototypes and collaborated with the distributed <br>&nbsp;&nbsp;&nbsp;&nbsp;development team <br>
                                    • &nbsp;&nbsp;Integrated gRPC application in Neighbourhood <br>&nbsp;&nbsp;&nbsp;&nbsp;Watch service mesh <br>
                                </div>
                            </div>
                            <div class="point1"></div>
                            <div class="date">
                                <h5>June 2020 - August 2020, June 2019 - December 2019</h5>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <h4>Ruston Smart City IoT Lab</h4>
                                <div class="timelineinfo">
                                    Student Researcher | Ruston, LA <br>
                                </div>
                                <div class="timelineinfoend">
                                    • &nbsp;&nbsp;Used Raspberry Pi and Python to connect <br>&nbsp;&nbsp;&nbsp;&nbsp;different types of sensors and get readings around <br>&nbsp;&nbsp;&nbsp;&nbsp;campus <br>
                                    • &nbsp;&nbsp;Experimented with Docker Containers to allow <br>&nbsp;&nbsp;&nbsp;&nbsp;our code to be ran on different OS <br>
                                    • &nbsp;&nbsp;Analyzed correlations between readings and how <br>&nbsp;&nbsp;&nbsp;&nbsp;the sensors/motes can benefit the campus and <br>&nbsp;&nbsp;&nbsp;&nbsp;city of Ruston <br>

                                </div>
                            </div>
                            <div class="point"></div>
                            <div class="date">
                                <h5>November 2019 – May 2020 </h5>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <h4>CIBC GLOBAL MONEY TRANSFER</h4>
                                <div class="timelineinfo">
                                    Information Representative | Toronto, ON <br>
                                </div>
                                <div class="timelineinfoend">
                                    • &nbsp;&nbsp;Interacted with customers and informed them of <br>&nbsp;&nbsp;&nbsp;&nbsp;CIBC's new money transfer service <br>
                                    • &nbsp;&nbsp;Mandarin was the primary language used<br>
                                </div>
                            </div>
                            <div class="point1"></div>
                            <div class="date">
                                <h5>May 2017 – July 2017 </h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Work Experience Section -->

        <section id="projects" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Projects & Involvements</h2>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/channel.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>YouTube Content Creator</h4>
                                <p>Create videos introducing today’s technology and programming tutorials</p>
                                <div class="portfolio-links">
                                    <a href="https://www.youtube.com/channel/UCSXUn80Z5q94rH5GqmoLhDQ?view_as=subscriber" data-gall="portfolioDetailsGallery" title="Youtube Channel"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/lunchpad.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web Application For Food Selection</h4>
                                <p>The goal was to help people pick a place to eat based on their food preferences</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/lunchpadeg.png" data-gall="portfolioGallery" class="venobox" title="User's Home Page"><i class="bx bx-plus"></i></a>
                                    <a href="Https://www.lunchpad.app" data-gall="portfolioDetailsGallery" title="lunchpad.app"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/terminal.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>MNIST Hand-Written Digit Recognition Program</h4>
                                <p>Created a program in Java that is able to learn to recognize a 28*28 pixel handwritten digit - 96% accuracy</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/e3.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>E3 Smart City Challenge Guest Mentor</h4>
                                <p>Mentored highschool kids on presentation and coding skills</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/othello.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Othello Game - Python (Single and Two Players)</h4>
                                <p>Created the Othello Game with Min-Max algorithm and alpha and beta pruning for decision making</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/raspberrypi.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Ruston Smart City IoT Lab</h4>
                                <p>Used Raspberry Pi and Python to connect different types of sensors and get readings around campus</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/paper.pdf" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Research Paper Download"><i class="bx bx-file"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/soccer.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <iframe src="/soccerpics" name="iframe_a" height="300px" width="100%" title="Iframe Example"></iframe>
                                    <!-- <a href="/soccerpics" target="iframe_a"><i class="bx bx-link"></i></a> -->
                                    <!-- <a href="/soccerpics" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Louisiana Tech Soccer Pictures"><i class="bx bx-plus"></i></a> -->
                                    <a href="https://latechsports.com/sports/womens-soccer/roster/stella-li/3774" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Louisiana Tech Soccer Roster"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section><!-- End Portfolio Section -->



        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>AWARDS & PATENTS & COMMUNITY SERVICE</h2>
                </div>

                <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="200">

                    <div class="testimonial-item">
                        <h3>Awards&nbsp;<i class="bx bx-trophy"></i></h3>

                        <p>
                            • Dean’s Honor List (Fall 2019 & Spring 2019) <br>
                            • Conference USA Commissioner’s Honor Roll (2017, 2018, 2019, 2020)

                        </p>
                    </div>

                    <div class="testimonial-item">
                        <h3>Patents&nbsp;<i class="bx bxs-file-archive"></i></h3>

                        <p>
                            • Community Watch With Bot-Based Unified Social Network Group
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <h3>Community Service&nbsp;<i class="bx bx-shield"></i></h3>
                        <p>
                            • Louisiana Soccer Camp | August 2020, July 2017 <br>
                            • 4 Paws Rescue Inc | August 2016, May 2016, November 2017, March 2019 <br>
                            • Ruston High School Special Olympics | January 2017, January 2018 <br>
                            • Ninjas Soccer Club | August 2017 – October 2017 <br>
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">

                            <div class="address">
                                <i class="bx bx-briefcase-alt"></i>
                                <h4>Open to Work:</h4>
                                <p>
                                    • Software Engineer <br>
                                    • Full Stack Developer <br>
                                    • Incorporating Artifical Intelligence <br>
                                    • Freelance (Web Development) <br>
                                </p>
                            </div>

                            <div class="email">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>
                                    • Toronto, ON <br>
                                    • Open To Remote Work <br>
                                    • Open To Travel<br>
                                </p>
                            </div>

                            <div class="phone">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>stella.xingli18@gmail.com</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="#contact" method="post">
                            @csrf

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please enter a name greater than 2 characters</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please enter a valid email</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject" />
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Please enter a subject</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" placeholder="Message"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Please send me a message</strong>
                                </span>
                                @enderror
                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                                @endif
                            </div>
                            <div class="text-center php-email-form"><button type="submit">Send Message</button></div>

                        </form>

                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" style="background-color: #e6f0ff">
        <div class="container">
            <h3>Stella Li</h3>
            <p>There is always a reason to smile and to be thankful! - This site was made with Laravel :)</p>


            <div class="social-links">
                <a href="https://github.com/stella81088" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://www.youtube.com/channel/UCSXUn80Z5q94rH5GqmoLhDQ/featured?view_as=subscriber" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="https://www.linkedin.com/in/stella-li-744613141/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="assets/img/Stella_Li_Resume.pdf" download="Stella_Li_Resume"><i class="bx bxs-download"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong>MyResume</strong> .All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a style="color: black;" href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>