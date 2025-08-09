<!DOCTYPE html>
 <?php

if(isset($_POST['submit'])) {
            
 
            require_once('/home/vfinetun/public_html/vendor/autoload.php');
  
            $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
// 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
            $apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(
                new GuzzleHttp\Client(),
                $config
            );
   
            
            $first_name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $sub = $_POST['message'];
            $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
            $sendSmtpEmail['subject'] = 'vFineTune Limited. Connected Successfully!! ';
            $sendSmtpEmail['htmlContent'] = "<html><body>
            <h1>Welcome to vFineTune Limited!! Thank you for contacting us.. We will contact you soon  </h1>
            <h2>User Details...</h2>
            <table>
            <tr>
            <th>Username</th>
            <th>:</th>
            <td>$first_name</td>
            </tr>
            <tr>
            <th>Email</th>
            <th>:</th>
            <td>$email</td>
            </tr>
            <tr>
            <th>Phone Number</th>
            <th>:</th>
            <td>$phone</td>
            </tr>
            <tr>
            <th>Message</th>
            <th>:</th>
            <td>$sub</td>
            </tr>
            </table>
            </body></html>";
            $sendSmtpEmail['sender'] = array('name' => 'vFineTune Limited', 'email' => 'contact@vfinetune.com');
            $sendSmtpEmail['to'] = array(
              array('email' => $email, 'name' => $first_name),  array('email' => 'contact@vfinetune.com', 'name' => 'vFineTune Limited')
            );

            try {
              echo "Your message has been sent. Thank you";
              $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
            } catch (Exception $e) {
              echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
            }
}

?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>vFineTune - We tune the oneness for fine future...</title>

    <!-- Bootstrap core CSS -->
    <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/vfinetune.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
     <!-- Bootstrap -->
     <script src="assets/js/bootstrap.bundle.min.js"></script>
     <!-- Lightbox -->
     <script src="assets/js/fslightbox.js"></script>
 
     <!-- Load jQuery require for isotope -->
     <script src="assets/js/jquery.min.js"></script>
     <!-- Isotope -->
     <script src="assets/js/isotope.pkgd.js"></script>
     <!-- Page Script -->
     <script>
         $(window).load(function() {
             // init Isotope
             var $projects = $('.projects').isotope({
                 itemSelector: '.project',
                 layoutMode: 'fitRows'
             });
             $(".filter-btn").click(function() {
                 var data_filter = $(this).attr("data-filter");
                 $projects.isotope({
                     filter: data_filter
                 });
                 $(".filter-btn").removeClass("active");
                 $(".filter-btn").removeClass("shadow");
                 $(this).addClass("active");
                 $(this).addClass("shadow");
                 return false;
             });
         });
     </script>

  </head>

<body>


  <!-- ***** Header Area Start ***** --> 
  <header class="header-area header-sticky">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <img style="height: 60px" src="assets/images/vfinetune_logo.jpeg" alt="vFineTune">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;</a></li>
                          <li class="scroll-to-section"><a href="#services">&nbsp;&nbsp;&nbsp;Competencies&nbsp;&nbsp;&nbsp;</a></li>
                          <li class="scroll-to-section"><a href="#courses">&nbsp;&nbsp;&nbsp;Services&nbsp;&nbsp;&nbsp;</a></li>
                          <li class="scroll-to-section"><a href="#testimonials">&nbsp;&nbsp;&nbsp;Clients&nbsp;&nbsp;&nbsp;</a></li> 
                          <li class="scroll-to-section"><a href="#contact-section">&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;</a></li> 
                        <!--  <li class="scroll-to-section">-->
                        <!--    <a href="javascript:void(0)">&nbsp;&nbsp;&nbsp;Kids Coding&nbsp;&nbsp;&nbsp;</a>-->
                        <!--</li>-->
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row" style="background:white; padding: 20px">
        <div class="col-lg-6">
          <div class="header-text">
            <div class="owl-carousel owl-banner">
              <div class="item header-text">
                <h6>Welcome To vFineTune</h6>
                <h2> <em>About </em> <span>Us</span></h2>
                <p>vFineTune committed to helping any person or community, regardless of background or previous education and aspire to look for new learnings and earnings, the opportunity to start a new Career or Job</p>
                <p>We are passionate and handhold all person by tuning their expertise to elevate for fine future. Bridge the skill gap and improve the greater Utilisation & Efficiency of the Resources from the Employers </p>
                <div class="down-buttons">
                  <div class="main-blue-button-hover">
                    <a href="#">Our Services</a>
                  </div>
                  <div class="call-button">
                    <a href="#"><i class="fa fa-phone"></i> +44 074367 11763</a>
                  </div>
                </div>
              </div>
              <div class="item header-text">
                <h6>Approach and Success Factor</h6>
                <h2><em>Candidates</em></h2>
                <ul>
                  <li>Individual Role Ambitions and Assessment</li>
                  <li>Mapping to appropriate Skills Required to the candidate</li>
                  <li>Individual Training focus, workshops, Assignments</li>
                  <li>Internship on Industrial Projects and Exposure</li>
                  <li>Project Experience Certificate</li>
                  <li>Interviews and New Job offers</li>
                  <li>Guidance and Mentoring to Post Job Assignment</li>
                  <li>Continuous support for your career path</li>
                </ul>
                <div class="down-buttons">
                  <div class="main-blue-button-hover">
                    <a href="#">Our Services</a>
                  </div>
                  <div class="call-button">
                    <a href="#"><i class="fa fa-phone"></i> 020 3963 4380</a>
                  </div>
                </div>
              </div>
              <div class="item header-text">
                <h6>Approach and Success Factor</h6>
                <h2><em>Employers</em></h2>
                <ul>
                  <li>Project Role and Skills requirement</li>
                  <li>Fitment Assessment on the Candidates</li>
                  <li>Technical Interview Panel Support</li>
                  <li>Security Clearing and Candidates Joining Formalities</li>
                  <li>Provide Backup resources for both Core & Flexi Model</li>
                  <li>Manage and support short lead time for onboarding</li>
                  <li>Zero recruitment fees and Resource replacements</li>
                  <li>Continuous Resource recruitment support</li>
                </ul>
                <div class="down-buttons">
                  <div class="main-blue-button-hover">
                    <a href="#">Our Services</a>
                  </div>
                  <div class="call-button">
                    <a href="#"><i class="fa fa-phone"></i> 020 3963 4380</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <div class="row">
              <div class="col-lg-4"></div>
              <div class="col-lg-6"> <a href="index.html" class="logo">
                <img  src="assets/images/vfinetune_logo.jpeg" alt="vFineTune">
            </a></div>
              <div class="col-lg-2"></div>
            </div>
           
            <img style="margin-top:20px" src="assets/images/20944387.jpg" alt="">
            <div class="row">
              <div class="col-lg-4"></div>
              <div class="col-lg-6"><div class="down-buttons">
                <div class="main-blue-button-hover1">
                  <a href="#contact">Contact Us</a>
                </div>
              </div></div>
              <div class="col-lg-2"></div>
            </div>
                
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="services">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4> <em>Our Competencies</em></h4>
          </div>
        </div>
          <div style="margin-top: -60px">
            <div class="row justify-content-center my-5">
                <div class="filter-btns shadow-md rounded-pill text-center col-auto">
                    <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 active" data-filter=".project" href="#">All</a>
                    <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".designer" href="#">Designer</a>
                    <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".developer" href="#">Developer</a>
                    <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".sdet" href="#">SDET</a>
                    <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".starter" href="#">Starter</a>
                </div>
            </div>
    
            <div class="row projects gx-lg-5">
                <a href="#contact" class="col-sm-6 col-lg-3 text-decoration-none project designer starter">
                    <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                        <img class="card-img-top" src="./assets/images/our-work-01.jpg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title light-300 text-dark">Website Designer & Developer</h5>
                              <span class="text-decoration-none" style="color: #800020; font-family: 'Ubuntu', sans-serif;
                              ">
                                 Join Now 
                              </span>
                        </div>
                    </div>
                </a>
                <a href="#contact" class="col-sm-6 col-lg-3 text-decoration-none project starter">
                    <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                        <img class="card-img-top" src="./assets/images/our-work-02.jpg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title light-300 text-dark">C & Data Structure</h5>
                            <span class="text-decoration-none" style="color: #800020; font-family: 'Ubuntu', sans-serif;
                            ">
                               Join Now 
                            </span>
                        </div>
                    </div>
                </a>
                <a href="#contact" class="col-sm-6 col-lg-3 text-decoration-none project designer developer">
                    <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                        <img class="card-img-top" src="./assets/images/our-work-03.jpg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title light-300 text-dark">Angular Developer</h5>
                            <span class="text-decoration-none" style="color: #800020; font-family: 'Ubuntu', sans-serif;
                            ">
                               Join Now 
                            </span>
                        </div>
                    </div>
                </a>
                <a href="#contact" class="col-sm-6 col-lg-3 text-decoration-none project designer developer">
                    <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                        <img class="card-img-top" src="./assets/images/our-work-04.jpg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title light-300 text-dark">React Developer</h5>
                            <span class="text-decoration-none" style="color: #800020; font-family: 'Ubuntu', sans-serif;
                              ">
                                 Join Now 
                              </span>
                        </div>
                    </div>
                </a>
                <a href="#contact" class="col-sm-6 col-lg-3 text-decoration-none project developer">
                    <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                        <img class="card-img-top" src="./assets/images/our-work-05.jpg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title light-300 text-dark">Python with Django</h5>
                            <span class="text-decoration-none" style="color: #800020; font-family: 'Ubuntu', sans-serif;
                            ">
                               Join Now 
                            </span>
                        </div>
                    </div>
                </a>
                <a href="#contact" class="col-sm-6 col-lg-3 text-decoration-none project developer">
                    <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                        <img class="card-img-top" src="./assets/images/our-work-06.jpg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title light-300 text-dark">Back End Developer</h5>
                            <span class="text-decoration-none" style="color: #800020; font-family: 'Ubuntu', sans-serif;
                              ">
                                 Join Now 
                              </span>
                        </div>
                    </div>
                </a>
                <a href="#contact" class="col-sm-6 col-lg-3 text-decoration-none project sdet starter ">
                  <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                      <img class="card-img-top" src="./assets/images/our-work-07.jpg" alt="...">
                      <div class="card-body">
                          <h5 class="card-title light-300 text-dark">SDET Test Engineer</h5>
                          <span class="text-decoration-none" style="color: #800020; font-family: 'Ubuntu', sans-serif;
                          ">
                             Join Now 
                          </span>
                      </div>
                  </div>
              </a>
              <a href="#contact" class="col-sm-6 col-lg-3 text-decoration-none project developer ">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/images/our-work-08.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Full Stack Developer</h5>
                        <span class="text-decoration-none" style="color: #800020; font-family: 'Ubuntu', sans-serif;
                        ">
                           Join Now 
                        </span>
                    </div>
                </div>
            </a>
            </div>
           
          </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h4><em>Our Services</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>Website Development</span></div>
                    <div class="gradient-border"><span>E-Commerce Portals</span></div>
                    <div class="gradient-border"><span>Digital Marketing</span></div>
                    <div class="gradient-border"><span>Digital QA Automation</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-01.jpg" alt="">
                          <div class="price"><a href="#contact"><h6>Reach Us</h6> </a></div>
                        </div>
                        <div class="right-content">
                          <h4>Website Design and Development</h4>

                            <p>vFineTune professional custom design business websites and transform your product or services to maximum brand value and help to sell across world customers.</p>
                            <p>vFineTune team helps here for all sized businesses that require a creative website design to attract all customer base. vFineTune helped with your services or products to promote online market and bring their business priority ranking in the internet while searching for product/service and raise impressions to website visitors.</p>
                            <p>We'll do all the hard work on the website user journey, look & feel, contents, blogs, availability, accessibility, security, and marketing channel. We make you relax and permit you to fully concentrate on your business growth and running your business!</p>
                            <p>Reach us on +44 7436711763, <a href="#contact"> contact@vfinetune.com</a> and happy to support Quicker Cheaper Better to Boost your business!</p>
                          <span>Innovative</span>
                          <span>Reasonable</span>
                          <span>Overwhelming</span>
                          <span>Responsive</span>
                          <span class="last-span">Bespoke</span>
                         
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-02.jpg" alt="">
                          <div class="price"><a href="#contact"><h6>Reach Us</h6> </a></div>
                        </div>
                        <div class="right-content">
                          <h4>E-Commerce Portals for ONLINE Stores</h4>
                          <p>Online Store Customisation/Shopping Cart Development|Multi store eCommerce platform/Interactive & Dynamic UI/Mobility/Beautiful Storefront/Smarter Checkout|Customer & Vendor Mangement/Data Management/Payment Gateway/SMS Whatsapp Notification/Web Security & Data Protection/High Performance & Scallability/Reports</p>
                          <p>vFineTune helps to transform your current Business to eCommerce Revenue Engine
                            vFineTune experts bring your traditional business model to smart life on a Digital Screen to sell all your products or services. We sit in your behind and digitalise all your business models to have better UX, shorter CX and higher Customer Satisfaction.
                            Whether you are a startup, growing business, reputable brand. vFineTune quickly analyses and engages the team to help you to adapt digital space and develop the business higher revenue conversion and we emerge as a trusted partner for your stable ecommerce platform.</p>
                            <p>Our focussed approach to deliver a competitive eCommerce website with fully compatible to all devices, fast page loads, responsive search, flawless checkout, comprehensive conversation tracking, quick payment system, automating the customer support.</p>
                            <p>Reach us on +44 7436711763, <a href="#contact"> contact@vfinetune.com</a> and happy to support Quicker Cheaper Better to Boost your business!</p>

                         
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-03.jpg" alt="">
                          <div class="price"><a href="#contact"><h6>Reach Us</h6> </a></div>
                        </div>
                        <div class="right-content">
                          <h4>Digital Marketing, Local SEO, Leads/Sales Generator</h4>
                          <p>QBranding/Business Visibility/Digital Marketing/SEO/SMO/CRO/Customer Acquisition/Business Expansion /Assured Business Turnover</p>
                          <p>vFineTune experts translate Traditional marketing campaigns to larger Digital Marketing Strategy, and that strategy serves a business goal to reach active Income Turnover and short period of Return on Investments. We build a partnership that is focused on getting results on the Digital Marketing Services. Our full-service Digital Marketing that provides a broad range of capabilities to attract the customers globally.</p>
                          <p>Reach us on +44 7436711763, <a href="#contact"> contact@vfinetune.com</a> and happy to support Quicker Cheaper Better to Boost your business!</p>

                          <span>SEO</span>
                          <span>Local SEO</span>
                          <span>Content Marketing</span>
                          <span>Social Media Marketing</span>
                          <span>Conversion Rate Optimisation (CRO)</span>
                          <span class="last-span">1 Certificate</span>
                         
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-04.jpg" alt="">
                          <div class="price"><a href="#contact"><h6>Reach Us</h6> </a></div>
                          </div>
                        <div class="right-content">
                          <h4>Digital Quality Assurance & QA Automation</h4>
                          <p>Trusted QA Test Partner/Meta Test Automation/Cloud Infrastructure/Test Anywhere & Anytime/Less Technical Expertise/High Efficient & Accuracy/Value for Money</p>
                          <p>We bring our competencies and capabilities to transform your expensive manual test process to  Meta Computing Test Automation, it will transform manual test processes to Digital Quality Assurance and QA Automation as NEW Generation testing which means all traditional software QA test methodology will align to current Software/Product Development methodology.</p>
                          <p>Reach us on +44 7436711763, <a href="#contact"> contact@vfinetune.com</a> and happy to support Quicker Cheaper Better to Boost your business!</p>

                          <span>Full-Code automation</span>
                          <span>Test Evidences</span>
                          <span>Comprehensive Testing</span>
                          <span> Accelerated Massive Parallel Testing (AMPT)</span>
                          <span>Provides a Page Object Builder (POB)</span>
                          <span>Test Case Management and version control</span>
                          <span>DevTestOps integration via pipeline configuration</span>
                          <span>Generates unlimited VUs for Load Testing</span>
                          <span class="last-span">Inbuilt Defect Tracking Tool</span>
                         
                        </div>
                      </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--<section class="simple-cta">-->
  <!--  <div class="container" >-->
  <!--    <div class="row">-->
  <!--      <div class="col-lg-5 offset-lg-1">-->
  <!--        <div class="left-image">-->
            <!--<img style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;" src="assets/images/cta-left-image_child.png" alt="">-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="col-lg-5 align-self-center">-->
          <!--<h6>Grab the opportunity now!</h6>-->
          <!--<h4>Kids Coding Summer Camp Coming Soon...</h4>-->
  <!--        <p></p>-->
          <!--
  <!--        <div class="white-button">-->
  <!--          <a href="contact-us.html">Registration</a>-->
  <!--        </div>-->
  <!--        -->-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->

  <section class="testimonials" id="testimonials">
    <div class="container">
       <!--
      <div class="row">
       <div class="col-lg-12">
          <div class="section-heading">
            <h4><em>Testimonials</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <p>“”</p>
                <h4>Edina</h4>
                <span>CEO &amp; Founder</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“think about our website first when you need free HTML templates for your website”</p>
                <h4>Sam</h4>
                <span>CTO of Aga Foods Factory</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“just think about our website wherever you need free templates for your website”</p>
                <h4>Sophia Whity</h4>
                <span>CEO and Co-Founder</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Helen Shiny</h4>
                <span>Tech Officer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>George Soft</h4>
                <span>Gadget Reviewer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Andrew Hall</h4>
                <span>Marketing Manager</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Maxi Power</h4>
                <span>Fashion Designer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Olivia Too</h4>
                <span>Creative Designer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
          </div>
        </div>
      </div>-->
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4><em>Clients</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item1">
              <img src="assets/images/info_logo.png" alt="">
            </div>
            <div class="item1">
              <img style="margin-top:30px;" src="assets/images/sprinkles_logo.png" alt="">
            </div>
            <div class="item1">
              <img style="margin-top:30px;" src="assets/images/naturaliy_logo.jpeg" alt="">
            </div>
             <div class="item1">
              <img src="assets/images/mayida_logo1.png" alt="">
            </div>
            <div class="item1">
              <img style="height: 130px" src="assets/images/jml.png" alt="">
            </div>
            <div class="item1">
              <img src="assets/images/aga.jpeg" alt="">
            </div>
            <div class="item1">
            <img style="height: 130px" src="assets/images/global.png" alt="">

            </div>
            <div class="item1">
            <img style="height: 130px" src="assets/images/logo.png" alt="">

            </div>
      
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">
          
            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d620.558456330737!2d-0.08931873033333694!3d51.527270998238635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTHCsDMxJzM4LjIiTiAwwrAwNScxOS4yIlc!5e0!3m2!1sen!2suk!4v1685961283904!5m2!1sen!2suk" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
            <div class="row" >
              <div  class="col-lg-5 offset-lg-1">
                <div class="contact-info">

                  <h4>Email</h4>
                  <p>contact@vfinetune.com</p>
                </div>
                
              </div>
              <div class="col-lg-4">
                <div class="contact-info">
                  <h4>Phone</h4>
                  <p>020 3963 4380</p>
                </div>
              </div>
            </div>
            <br>
            <br>
            <div class="row" >
              <div  class="col-lg-5 offset-lg-1">
                <div class="contact-info">

                  <h4>Our Office</h4>
                  <p>Methuen Park, Chippenham - SN14 0GT</p>
                  <p>United Kingdom</p>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
        <form id="contact" action="" method="post" onsubmit="return true" role="form">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h4> <em>Contact us</em></h4>
                  <p></p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" pattern="^[\+]?\d*" maxlength="20" minlength="10" id="phone" name="phone" placeholder="Your Phone Number" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" name="submit" class="main-gradient-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>

          <!--<div class="col-lg-12">-->
          <!--  <ul class="social-icons">-->
          <!--    <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
          <!--    <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
          <!--    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
             <!--
          <!--    <li><a href="#"><i class="fa fa-rss"></i></a></li>-->
          <!--    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
          <!--   --> -->
          <!--  </ul>-->
          <!--</div>-->
          <div class="col-lg-12">
            <p class="copyright">Copyright © 2023 vFineTune Limited
            
            <br>Design: <a rel="sponsored" href="https://vfinetune.com" target="_blank">vFineTune Limited</a></p>
          </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {

            var

            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              console.log(currentId)
              console.log(reqLink)
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>