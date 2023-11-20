<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agung Rajib Nugraha's Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Agung Rajib Nugraha</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="http://x.com/homeisjib/" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="http://facebook.com/agungrajib/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="http://instagram.com/arn_95/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="http://linkedin.com/in/razibnugraha/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Agung Rajib Nugraha</h1>
      <p>I'm <span class="typed" data-typed-items="Web Developer, Senior Accountant, Pricing, Costing, Senior Tax"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Dedicated and detail-oriented Financial Accounting with 10 years of experience and being web developer for 2 years. 
            I helped with the preparation of financial reports to audit reports. 
            Apart from that, he led improvements by creating various web and application-based financial accounting automation systems.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Senior Accountant, Taxation  &amp; Web Developer.</h3>
            <p class="fst-italic">
            "Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work."
            - Steve Jobs
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>01 December 1995</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 812-2188-6477</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Subang, West Java</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>
                    <?php
                            $birthdate = "1995-12-01";
                            $currentDate = date("Y-m-d");
                            $age = date_diff(date_create($birthdate), date_create($currentDate))->y;
                            echo $age . " years";
                    ?>
                            </span></li>

                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor of Accounting</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>agungrajibnugraha@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
            Driven by a passion for process optimization, I specialize in creating seamless process automation solutions, fostering collaboration by consolidating requirements across departments. 
            With a keen eye for detail, I excel in identifying and addressing potential errors in financial processes, while my proficiency in developing customized applications ensures streamlined workflows. 
            My commitment to precision and efficiency makes me a valuable asset in delivering impactful results in the realm of finance and process improvement.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p></p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">Accounting <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Taxation <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Pricing & Costing <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">UI Design <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">MySQL <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Agung Rajib Nugraha</h4>
              <p><em>Experienced Financial Accountant with a decade of expertise and two years as a web developer. 
                Proficient in preparing financial reports and audits. 
                Skilled in leading improvements through the creation of web and application-based automation systems for financial accounting.</em></p>
              <ul>
                <li>Dangdeur, Subang, West Java, Indonesia</li>
                <li>(+62) 812-2188-6477</li>
                <li>(+62) 878-8485-7797 (Whatsapp)</li>
                <li>agungrajibnugraha@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Accounting</h4>
              <h5>GPA : 3.88</h5>
              <h5>2020 - 2024</h5>
              <p><em>Universitas Terbuka, Tangerang</em></p>
              <p>I pursued this qualification with the goal of fortifying my foundation in finance and accounting. 
                This educational background not only supports my current role in the finance and accounting department 
                but also serves as a valuable asset as I continuously seek to enhance my skill set, positioning me for success 
                in future career opportunities.</p>
            </div>

            <div class="resume-item">
              <h4>Graduated Software Engineer</h4>
              <h5>2010 - 2013</h5>
              <p><em> SMK Negeri 1 Subang, Subang</em></p>
              <p>As a proud graduate with a degree in Software Engineering from a vocational high school, I have acquired a strong foundation in programming and software development. 
                This educational background has equipped me with essential technical skills, problem-solving capabilities, and a systematic approach to software design. 
                It laid the groundwork for my journey into the dynamic field of technology, providing a solid basis for my subsequent professional endeavors and continuous growth in the ever-evolving realm of software engineering.</p>
            </div>

          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Group Leader of Fin Acc Department</h4>
              <h5>2014 - Present</h5>
              <p><em>PT SUAI, Subang, West Java </em></p>
              <ul>
               <li> Create process automation improvement ideas.</li>
               <li> Consolidate requirements between fin-acc dept and related departments.</li>
               <li> Detect potential fin-acc process errors.</li>
               <li> Developing application and web systems to simplify the fin-acc dept process.</li>
               <li> Analyze the monthly transaction cycle.</li>
               <li> Carrying out tax planning.</li>
               <li> Analyze foreign currency revaluation.</li>
               <li> Carrying out costing and pricing.</li>
               <li> Make sales forecasting calculations.</li>
               <li> Control and analyze the budget needs of each department.</li>
               <li> Fill in the blank financial report audit report.</li>
            </ul>
            </div>
            <div class="resume-item">
              <h4>Web Developer for Fin Acc</h4>
              <h5>2022 - Present</h5>
              <p><em>PT SUAI, Subang, West Java </em></p>
              <ul>
              <li>  Conceptualize and design the system architecture for financial accounting web applications.</li>
              <li>  Design and maintain a secure and efficient database structure for financial data.</li>
              <li>  Implement visually appealing and user-friendly interfaces.</li>
              <li>  Conduct thorough testing and quality assurance to identify and resolve issues.</li>
              <li>  Create comprehensive documentation for system architecture, database, and coding standards.</li>
              <li>  Propose and implement continuous improvements to enhance the efficiency of the financial accounting system.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portofolio</h2>
          <p>As a versatile professional excelling in both accounting and web development, 
            my portfolio showcases a harmonious blend of financial acumen and technical expertise, reflecting my ability to seamlessly bridge the gap between numbers and code for comprehensive and innovative solutions.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">IT Portofolio</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sicopat.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/sicopat.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="New SUAI Cost Packing System. Replace excel manual calculation to auto-calculate cost packing by system.">
                <i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/insaf.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/insaf.png" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                title="Invoice Sales Finance Maker. Replace manual invoicing one by one in excel into one-time upload and generate PDF.">
                <i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/bumi.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/bumi.png" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                title="Budgeting Management Information. Replace manual budget preparation and calculation by excel into auto-calculate web-based system.">
                <i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/derings.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/derings.png" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                title="Daily Integrated  Wiring Harness Pricing System. Replace manual recap by excel into system, reduce pricing working time by attending meeting into receiving request by system and informing user about request by auto-email.">
                <i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/circuss.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/circuss.png" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                title="Circuit STO System (Web Based System for STO Circuit). Replacing manual paper checksheet and manual recap STO result to automatize result and non-paper checksheet by web-system.">
                <i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/fams.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/fams.png" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                title="Fixed Asset Management Systems. System that managing and controlling fixed assets by system and also replace method of STO to mobile (Android).">
                <i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>For inquiries or collaboration opportunities, feel free to reach out to me.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Dangdeur, Subang, West Java, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>agungrajibnugraha@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 812-2188-6477</p>
                <p>+62 878-8485-7797 (Whatsapp)</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d7031.803549635281!2d107.74352011054647!3d-6.559111046126206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMzMnMzYuNCJTIDEwN8KwNDQnNTAuNCJF!5e1!3m2!1sid!2sid!4v1700457095170!5m2!1sid!2sid" width="100%" height="290px" style="border:0;" allowfullscreen="" frameborder="0"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="http://instagram.com/arn_95/">razibnugraha</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>