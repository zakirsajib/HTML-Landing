<?php
/**
 * Template name: Landing
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header('landing'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
            <section class="rotatingText">
              <div class="rotatingText-content">
                <h1 class="rotatingText-description">Let's create</h1>

                <h2 class="rotatingText-adjective">jobs together 👌</h2>
                <h2 class="rotatingText-adjective">a better world together 🌎</h2>
                <h2 class="rotatingText-adjective">opportunities together 🙏</h2>
                <h2 class="rotatingText-adjective">something extraordinary together 👌</h2>
              </div>
            </section>
          <a href="<?php echo get_home_url(); ?>/contact" class="btn-get-started">Get In Touch</a>
          <a href="<?php echo get_home_url(); ?>/about" class="btn-get-started">Learn More</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-img.png" class="img-fluid lazyload" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6" data-aos="zoom-in">
          <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about.png" class="img-fluid lazyload" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center what-hublearn" data-aos="fade-left">
          <div class="content pt-4 pt-lg-0">
            <h3>What is HubLearn?</h3>
            <p>
                HubLearn is a Danish social enterprise that operates internationally. We approach learning in a different way. We aim to upgrade local individuals and SMEs with less resources around the world by creating opportunities and jobs via sustainable, innovative and affordable learning projects.
            </p>
            <p>
                HubLearn guides and supports the people and SMEs into the latest technology and prepares them for the demands of the future via reskilling, upskilling and on-the-job learning.
            </p>
            <p>
                Talent is universal, but opportunities are not. With access to learning resources and instruction, anyone, anywhere, can gain skills and transform their lives in meaninful ways.
            </p>
            <a href="<?php echo get_home_url(); ?>/about" class="btn-get-started">Learn More</a>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">

      <!-- <div class="section-title" data-aos="fade-up">
        <h2>Business Areas</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div> -->

      <div class="row">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
          <div class="icon-box icon-box-pink">
            <div class="icon"><img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/Social-Enterprise-stamp-Compressed-1.png" class="img-fluid lazyload" alt=""></div>
            <p class="description">HubLearn is exclusively recognized by the Danish Government as a social enterprise and we are currently operating in Asia to establish closer relations between Europe and Asia.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box icon-box-cyan">
            <div class="icon"><img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/UN-World-Goals-min.png" class="img-fluid lazyload" alt=""></div>
            <p class="description">HubLearn’s mission is part of the United Nation’s world goals by actively contributing to 8 of the 17 goals.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box icon-box-green">
              <div class="icon">
                  <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/BeSocial-Compressed.jpg" class="img-fluid lazyload" alt="">
              </div>
            <p class="description">How can We help you learn more? Be a part of the journey and an influence together with us.</p>
          </div>
        </div>



      </div>

    </div>
</section>



  <!-- ======= Features Section ======= -->
  <!-- <section id="features" class="features">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item" data-aos="fade-up">
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                <h4>Recognized by the Danish Government</h4>
                <p>HubLearn is exclusively recognized by the Danish Government as a social enterprise and we are currently operating in Asia to establish closer relations between Europe and Asia.</p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
              <a class="nav-link" data-toggle="tab" href="#tab-2">
                <h4>HubLearn’s mission</h4>
                <p>HubLearn’s mission is part of the United Nation’s world goals by actively contributing to 8 of the 17 goals.</p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
              <a class="nav-link" data-toggle="tab" href="#tab-3">
                <h4>Engage yourself in lifelong learning!</h4>
                <p>How can We help you learn more?Be a part of the journey and an influence together with us.</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <figure>
                <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/features-1.png" alt="" class="img-fluid">
              </figure>
              <a href="<?php echo get_home_url(); ?>/social-enterprise/" class="btn-get-started">Learn More</a>
            </div>
            <div class="tab-pane" id="tab-2">
              <figure>
                <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/features-2.png" alt="" class="img-fluid">
              </figure>
              <a href="<?php echo get_home_url(); ?>/un-world-goals/" class="btn-get-started">Learn More</a>
            </div>
            <div class="tab-pane" id="tab-3">
              <figure>
                <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/features-3.png" alt="" class="img-fluid">
              </figure>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> -->

  <!-- End Features Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>How HubLearn Works</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in">
            <div class="pic"><img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/modern-steps-of-moving-business-escalator_rvMehzluhGg_SB_PM.jpg" class="img-fluid lazyload" alt=""></div>
            <div class="member-info">
              <h4>Step 1</h4>
              <span>&nbsp;</span>
              <div class="social">
                  <p>Contact & Align</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/modern-steps-of-moving-business-escalator_rvMehzluhGg_SB_PM.jpg" class="img-fluid lazyload" alt=""></div>
            <div class="member-info">
              <h4>Step 2</h4>
              <span>&nbsp;</span>
              <div class="social">
                <p>Gain Learning, tools & New Skills<br> for the Future</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/modern-steps-of-moving-business-escalator_rvMehzluhGg_SB_PM.jpg" class="img-fluid lazyload" alt=""></div>
            <div class="member-info">
              <h4>Step 3</h4>
              <span>&nbsp;</span>
              <div class="social">
                  <p>Get income via a new job <br>or selling your skills/product</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Who is HubLearn for?</h2>
      </div>
      <p>HubLearn is for anyone or any SME. Whether you have years of skill expertise or a special nugget of knowledge to share, you are welcome to contact us or join our projects. Regardless of your starting point in life (school, early career, mid-career, unemployed or silver years), we help people and SMBs obtain learning, creating opportunities and jobs.</p>
    </div>
  </section>

  <section class="faq">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h3>Our Ongoing Projects</h3>
        </div>
        <div class="row content">
            <div class="col-lg-6 aos-init aos-animate" data-aos="zoom-in">
                <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about.png" class="img-fluid lazyload" alt="">
            </div>

            <div class="col-lg-6 d-flex flex-column justify-contents-center aos-init aos-animate shop-locals" data-aos="fade-left">
                  <div class="content pt-4 pt-lg-0">
                    <h4>Shop By Locals</h4>
                    <p>
                        ShopByLocals.com is a project that aims to open doors of business opportunities for local people and shop owners to enter the global market. Many small players lack knowledge or technology to bring their products to the international scene. Our Local-to-Global project makes this possible.
                    </p>
                    <p>Would you like your products or services compete globally?</p>
                    <a href="https://shopbylocals.com/" class="btn-get-started" target="_blank">Join Shop by Locals</a>
                  </div>
              </div>
        </div>
        <div class="row content">
            <div class="col-lg-6 d-flex flex-column justify-contents-center aos-init aos-animate virtual-classroom" data-aos="fade-left">
                  <div class="content pt-4 pt-lg-0">
                    <h4>Tech Teaching Classes eLearning & Virtual classrooms</h4>
                    <p>
                        HubLearn is all about learning and knowledge-sharing. Thus, we take it as our duty to go the extra mile by providing teaching classes to the underprivileged. We have technical classes to equip locals on various latest technology – tools that they will need especially for their career. By doing this, we extend our helping hand to more people who are greatly benefited.
                    </p>
                    <p>
                        Need a FREE Virtual Classroom for your school or business?
                    </p>
                    <a href="<?php echo get_home_url(); ?>/about" class="btn-get-started">Contact us and let see what we can do</a>
                  </div>
              </div>
              <div class="col-lg-6 aos-init aos-animate" data-aos="zoom-in">
                  <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about.png" class="img-fluid lazyload" alt="">
              </div>
        </div>
        <div class="row justify-content-center content">
            <div class="col-lg-6 d-flex flex-column justify-contents-center aos-init aos-animate" data-aos="fade-up">
                <iframe width="100%" height="448" class="lazyload" data-src="https://www.youtube.com/embed/ziteLIf6m-U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="showcase-btn">
                    <a href="<?php echo get_home_url(); ?>/show" class="btn-get-started">Have a look some of our showcases</a>
                </div>
            </div>
        </div>
    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <section class="faq">
      <div class="container">
          <div class="section-title" data-aos="fade-up">
              <h2>Why We Do What We Do</h2>
          </div>
          <div class="row content">
              <div class="col-lg-6 aos-init aos-animate" data-aos="zoom-in">
                  <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Solution-Compressed.jpg" class="img-fluid lazyload" alt="">
              </div>

              <div class="col-lg-6 d-flex flex-column justify-contents-center aos-init aos-animate col-one" data-aos="fade-left">
                    <div class="content pt-4 pt-lg-0">
                      <p>
                          A big percentage of our global population lacks access to education and skills development. We also live in changing times. But why haven’t our schools and company hiring processes advanced with society? Skills mastery is more than having the right paper qualifications and being good at what you currently do – it is having a mindset of continually striving towards greater excellence through knowledge and experience. We promote skills mastery beyond simply having papers.
                      </p>
                      <p>We aim to help people develop a sustainable individual profile. We seek to improve the value of people for them to thrive and succeed in the global market.</p>
                      <a href="<?php echo get_home_url(); ?>/why" class="btn-get-started" target="_blank">Learn More</a>
                    </div>
                </div>
          </div>
          <div class="row content">
              <div class="col-lg-6 d-flex flex-column justify-contents-center aos-init aos-animate col-two" data-aos="fade-left">
                    <div class="content pt-4 pt-lg-0">
                      <p>
                          HubLearn also promotes a proactive mindset – that people are responsible for their own learning and self-management. We encourage people to engage in lifelong learning.
                      </p>
                      <p>
                          Let’s do things in a better and different way. Let’s do it the HubLearn way.
                      </p>
                      <a href="<?php echo get_home_url(); ?>/why" class="btn-get-started">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 aos-init aos-animate" data-aos="zoom-in">
                    <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/UTCCC-resize.jpg" class="img-fluid lazyload" alt="">
                </div>
          </div>
          <div class="row content no-gutters clearfix ceo-btn" data-aos="fade-down">
              <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Uganda-min.jpg" class="img-fluid lazyload" alt="">
              <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Bangkok-min.jpg" class="img-fluid lazyload" alt="">
          </div>

          <div class="row ceo-btn-container no-gutters clearfix ceo-btn" data-aos="fade-up">
              <a href="<?php echo get_home_url(); ?>/making-of-a-dream" class="btn-get-started">CEO - Making of a dream</a>
              <a href="<?php echo get_home_url(); ?>/mission-vision-values" class="btn-get-started">Our mission - Vision - Values</a>
          </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->




<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container">

    <div class="row" data-aos="zoom-in">
      <div class="col-lg-6 text-center text-lg-left">
        <h3>Join Our Newsletter</h3>
        <p>Be the first to know.</p>
      </div>
      <div class="col-lg-6 cta-btn-container text-center">
          <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>

  </div>
</section><!-- End Cta Section -->


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Business Areas</h2>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-shop">Shop</li>
            <li data-filter=".filter-elearning">e-Learning</li>
            <li data-filter=".filter-vr">Virtual Reality</li>
            <li data-filter=".filter-others">Others</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6 col-md-6 portfolio-item filter-shop">
          <div class="portfolio-wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/graphicstock-human-hands-holding-smartphone-connected-with-shopping-icons-online-shopping-online-store-e-commerce-mobile-shopping-concept-vector-flat-design-illustration-in-the-circle-isolated-on-background_H79nXYLIZ_SB_PM.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shop by Locals</h4>
              <p> Project that aims to open doors of business opportunities<br> for local people and shop owners to enter the global market.<br> Would you like your products to compete globally?</p>
            </div>
            <div class="portfolio-links">
              <a href="<?php echo get_home_url(); ?>/shopbylocals-info/" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 portfolio-item filter-elearning">
          <div class="portfolio-wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/graphicstock-student-sitting-at-the-table-with-laptop-student-using-laptop-for-education-man-working-on-laptop-and-writing-notes-concept-of-educational-technology-vector-flat-design-illustration-square-layout_B7zY79IIZ_SB_PM.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>e-Learning & Virtual classrooms</h4>
              <p><b>Online and In Person Small Tech Teaching Class.</b><br> We have small technical classes to equip locals on<br> various latest technology – tools that<br> they will need especially for their career.</p>
            </div>
            <div class="portfolio-links">
              <a href="<?php echo get_home_url(); ?>/online-and-in-person-small-tech-teaching-class/" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 portfolio-item filter-vr">
          <div class="portfolio-wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/graphicstock-businesswoman-in-virtual-reality-headset-looking-at-the-digital-display-with-business-graphs-woman-in-virtual-reality-headset-analyzing-visual-data-vector-flat-design-illustration-square-layout_rmMbYECLUb_SB_PM.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Virtual Reality (VR-360)</h4>
              <p> Presently, we have VR/360 technology-focused local projects<br> that contribute to society by introducing to <br>people and businesses the future of technology.</p>
            </div>
            <div class="portfolio-links">
              <a href="<?php echo get_home_url(); ?>/vr-services" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 portfolio-item filter-others">
          <div class="portfolio-wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/graphicstock-young-cheerful-operator-of-technical-support-wearing-headphone-set-friendly-technical-support-operator-and-speech-square-with-screwdriver-and-wrench-vector-flat-design-illustration-square-layout_SX4FeCIUZ_SB_PM.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Other Services</h4>
              <p> Other HubLearn services available for you.<br> Here are some of them:</p>
            </div>
            <div class="portfolio-links">
              <a href="<?php echo get_home_url(); ?>/service-by-locals" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>



      </div>

    </div>
  </section><!-- End Portfolio Section -->




  <!-- ======= Featured In Section ======= -->
  <section id="featured" class="featured">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Featured In</h2>
      </div>

      <div class="owl-carousel featured-carousel" data-aos="fade-up" data-aos-delay="100">

        <div class="featured-item">
            <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/featured/NTCC.png" class="lazyload featured-img" alt="">
            <p>
                ...He is passionate about VR/AR Technology and its applicability in many different sectors and its one of his goals to educate and inspire others to use this technology...
            </p>
            <h3>NTCCxTech</h3>
        </div>

        <div class="featured-item">
            <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/featured/EduTech.png" class="lazyload featured-img" alt="">
          <p>
              …one of the best speaker and presentation Adam Dollner gave it was top-notch! It is a pleasure to work with HubLearn and the inspiration that the company is given to local people around the world...
          </p>
          <h3>EduTech</h3>
        </div>

        <div class="featured-item">
            <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/featured/Ritzaus-bureau.png" class="lazyload featured-img" alt="">
          <p>
             ...Success stories are commonplace. But setbacks leading to comebacks are quite rare on media. Today, HubLearn features the story of its CEO/Founder, ADAM DOLLNER, and shares a lesson or two on the other side of being a Danish entrepreneur in Asia. In July 2017, Adam left his corporate job, sold all his belongings and stayed in Africa and Thailand for two years to share knowledge with locals. During his immersive travels, Adam got inspired by seeing many people in need...
          </p>
          <h3>Ritzau</h3>
        </div>

        <div class="featured-item">
            <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/featured/Startup-Nation.png" class="lazyload featured-img" alt="">
          <p>
              ...Southeast Asia’s biggest tech conference.<br> The top speakers, a Tech & Travel expert, Mr. Adam Dollner, Founder and CEO of HubLearn.....creating solutions for local tourism by letting the locals to attract more tourists into their area, as well as applying AR and VR technology all together with Thai culture, society and original environment, and makes it interesting and attractive for tourism...
          </p>
          <h3>Startup Nation</h3>
          <h4>Thailand</h4>
        </div>

        <div class="featured-item">
            <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/featured/VRARA.png" class="lazyload featured-img" alt="">
          <p>
              ...Adam Dollner is passionate about using Innovation and the Technology of Tomorrow to make people’s lives easier. Before leaving his corporate job and putting up the startup HubLearn, Adam had a lead role of building streaming services such as HBO Nordic, Blockbuster, etc. in Denmark’s biggest telco company TDC-Group...
          </p>
          <h3>VR/AR Association</h3>
        </div>

      </div>

    </div>
  </section><!-- End Featured Section -->


  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row" data-aos="zoom-in">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>Engage yourself in lifelong learning!</h3>
          <p>Be a part of the journey and an influence together with us.<br> Let’s be social and change the world for better!
          </p>
          <div class="social-links mt-3">
              <a href="https://www.linkedin.com/company/hublearn" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <a href="https://www.facebook.com/hublearn" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/hublearn" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://twitter.com/hublearn_com" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.youtube.com/hublearn" class="youtube"><i class="bx bxl-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="<?php echo get_home_url(); ?>/contact">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->



  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             <strong>I loved HubLearn's approach to business</strong>. I own a small handmade shop and I needed some help how to deal with taxes and accounting as I am rather a designer, not finance expert. HubLearn guided me to a free online course and now I have no worries about by business!
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/testimonials-1.jpg" class="lazyload testimonial-img" alt="">
          <h3>Jenny Claton</h3>
          <h4>Business Owner</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             <strong>HubLearn not only helped me to resolve my issues, but also showed me some directions how</strong>. I can develop and expand my business. Now I have business strategy, which I follow and implement my ideas. Thank you Team HubLearn!
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/testimonials-2.jpg" class="lazyload testimonial-img" alt="">
          <h3>Andrew Fairfield</h3>
          <h4>Client</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <strong>Thanks to HubLearn team I managed to get more customers and expand</strong>.  HubLearn helped me and my team to show my business innovative way via VR & 360, which have let to many more new bookings and customers. HubLearn is amazing and professional business partner!
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/testimonials-3.jpg" class="lazyload testimonial-img" alt="">
          <h3>Meji Kaikritkhongbun</h3>
          <h4>Owner and CEO</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            When you hire HubLearn, you get a polished, high-end product that can represent you and your business in the most positive way. But you also contribute to the learning of the locals. Our satisfied clients are sharing their reviews and passing the word along for us. Thank you!
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/testimonials-4.jpg" class="lazyload testimonial-img" alt="">
          <h3>Suphapong R</h3>
          <h4>Owner and CEO</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             <strong>HubLearn is a great company with professional and talented experts.</strong> I worked with several of them and I can say, they know their job perfectly. Thanks to HubLearn I've successfully passed fiscal audit and made some changes in my business.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/testimonials-5.jpg" class="lazyload testimonial-img" alt="">
          <h3>Tommy Hamilton</h3>
          <h4>CEO</h4>
        </div>

      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row" data-aos="zoom-in">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>To book a consultation is more than easy! </h3>
          <p>Just fill in the form <a href="<?php echo get_home_url(); ?>/contact">online</a> or send email to <a href="mailto:hello@hublearn.com">hello@hublearn.com</a> any time convenient for you. <br> Our representative will get in touch with you and make an appointment.
          </p>
          <div class="social-links mt-3">
              <a href="https://www.linkedin.com/company/hublearn" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <a href="https://www.facebook.com/hublearn" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/hublearn" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://twitter.com/hublearn_com" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.youtube.com/hublearn" class="youtube"><i class="bx bxl-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="<?php echo get_home_url(); ?>/contact">Book with us</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->



  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Supporting Partners</h2>
        <p>Our Partners Believe In Us – <b>Thank you for being world changers!</b></p>
        <p>When you avail of our services or do business with us, <b>you support and empower local communities.</b></p>
        <p>We ensure that <b>locals gain skills</b> and get them into <b>practical use.</b></p>
        <p>That is what HubLearn is about – <b>creating opportunities for LOCALS.</b></p>
      </div>

      <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/seal.jpg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="100">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/vrar.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="150">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/startupNation.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="200">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/Logo_Ritzau.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="250">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/eduTechlogo.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="300">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/Microsoft-Logo.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="350">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/Social-Enterprise-stamp-Compressed-1.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="client-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/UN-World-Goals-min.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="client-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/unity.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="client-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/edx-logo.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="client-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/thailand-boi-logo.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="client-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/Flag_of_Europe.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="client-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/aws.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="client-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/Adobe_Systems_logo.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="client-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/Danish.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="client-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clients/vuforia.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>
      <div class="row no-gutters clearfix partner-btn" data-aos="fade-up">
          <a href="<?php echo get_home_url(); ?>/partners" class="btn-get-started">See All Our Partners</a>
          <a href="<?php echo get_home_url(); ?>/contact" class="btn-get-started">Become a Partner</a>
      </div>



    </div>
  </section><!-- End Clients Section -->


  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row" data-aos="zoom-in">
        <div class="col-lg-6 text-center text-lg-left">
          <h3>Join Our Newsletter</h3>
          <p>Be the first to know.</p>
        </div>
        <div class="col-lg-6 cta-btn-container text-center">
            <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->




  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>HubLearn Thailand</h4>
    		  <p>
    			Empire Tower no.1 – M floor, Spaces <br>
    			1 South Sathorn Rd., Yannawan, <br>
    			Sathorn, Bangkok 10120 <br>
    			Kingdom of Thailand
    		   </p>
           </div>
           <div class="phone">
             <i class="icofont-phone"></i>
             <h4>Call:</h4>
             <p>+66 (0) 986 567 533</p>
           </div>
           <div class="address">
              <i class="icofont-google-map"></i>
              <h4>HubLearn Denmark</h4>
    		  <p>
    			Edvard Thomsens Vej 39 <br>
    		  	2300 Copenhagen <br>
    		  	Denmark
    		  </p>
            </div>
            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+45 538 532 76</p>
            </div>
            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p><a href="mailto:hello@hublearn.com">hello@hublearn.com</a></p>
            </div>

            <!-- <iframe data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
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


<?php
get_footer('landing');
