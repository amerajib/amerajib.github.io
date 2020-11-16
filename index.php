<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An awesome portfolio html template. You can easily design your portfolio website using this template.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cuda - An awesome portfolio html template</title>
    <link rel="shortcut icon" type="image/x-icon" href="resources/img/index.png">
    
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css">
    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!--VENDORS FILS-->
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/grid.css">
    
    <!--RESOURCES FILS-->
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/reponsive.css">
    
</head>
<body>
   <header id="home">
        <nav>
            <div class="row">
               <div class="ame">
                    <a href="#home" class="rajib">
                        AmerajiB
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="active"><a href="#home">home</a></li>
                    <li><a href="#service">service</a></li>
                    <li><a href="#team">team</a></li>
                    <li><a href="#skil">skil</a></li>
                    <li><a href="#protfolio">protfolio</a></li>
                    <li><a href="#testimonial">testimonial</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
                <div class="mobile-menu">
                    <span style="color: #fff;" onclick="openNav()">&#9776;</span>
                    <div class="overlay" id="myNav">
                        <a href="javascrip:tvoid(0)" onclick="closeNav()" class="closeBtn">&times;</a>
                        <div class="overlay-content">
                            <a onclick="closeNav()" href="#home">home</a>
                            <a onclick="closeNav()" href="#service">service</a>
                            <a onclick="closeNav()" href="#team">team</a>
                            <a onclick="closeNav()" href="#skil">skil</a>
                            <a onclick="closeNav()" href="#protfolio">protfolio</a>
                            <a onclick="closeNav()" href="#testimonial">testimonial</a>
                            <a onclick="closeNav()" href="#contact">contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="hero-text-box">
                <h1>Hi there! We are the new kids on the block and we build awesome websites and mobile apps.</h1>
                <a href="#contact" class="btn btn-hero">work with us!</a>
            </div>
        </div>
   </header>
   
   <!--START SERVICES SECTION-->
   
   <section class="services-section js--services-section" id="service">
        <div class="row">
            <h2>SERVICES WE PROVIDE</h2>
            <p class="little-description">We are working with both individuals and businesses from all over the globe to create awesome websites and applications.</p>
        </div>
        <div class="row">
            <div class="col span_1_of_4 box">
                <img src="resources/img/flag.png" alt="Flag" class="service-icon">
                <h3>Branding</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
            </div>
            <div class="col span_1_of_4 box">
                <img src="resources/img/pen.png" alt="Pen" class="service-icon">
                <h3>Design</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem Lorem ipsum.  </p>
            </div>
            <div class="col span_1_of_4 box">
                <img src="resources/img/setting.png" alt="Setting" class="service-icon">
                <h3>Development</h3>
                <p>At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.</p>
            </div>
            <div class="col span_1_of_4 box">
                <img src="resources/img/roket.png" alt="Roket" class="service-icon">
                <h3>ROCKET SCIENCE</h3>
                <p>Et harum quidem rerum est et expedita distinctio. Nam libero tempore.</p>
            </div>
        </div>
   </section> 
      
   <!--END SERVICES SECTION-->     
        
        
   <!--START TEAM SECTION-->
      
   <section class="team-section" id="team">
       <div class="row">
           <h2>MEET OUR BEAUTIFUL TEAM</h2>
           <p class="little-description">We are a small team of designers and developers, who help brands with big ideas.</p>
       </div>
       <div class="row">
           <div class="col span_1_of_4 box">
               <img src="resources/img/1.jpg" alt="ANNE HATHAWAY" class="team-member">
               <h3>ANNE HATHAWAY</h3>
               <span class="role">CEO / Marketing Guru</span>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
               <div class="social-icons">
                   <ul>
                       <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                       <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                   </ul>
               </div>
           </div>
           <div class="col span_1_of_4 box">
               <img src="resources/img/2.jpg" alt="Kate Upton" class="team-member">
               <h3>Kate Upton</h3>
               <span class="role">Creative Director</span>
               <p>Duis aute irure dolor in in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non diam proident Lorem.</p>
               <div class="social-icons">
                   <ul>
                       <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                       <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                   </ul>
               </div>
           </div>
           <div class="col span_1_of_4 box">
               <img src="resources/img/3.jpg" alt="Olivia Wilde" class="team-member">
               <h3>Olivia Wilde</h3>
               <span class="role">Lead Designer</span>
               <p>Nemo enim ipsam voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem nesciunt.</p>
               <div class="social-icons">
                   <ul>
                       <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                       <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                   </ul>
               </div>
           </div>
           <div class="col span_1_of_4 box">
               <img src="resources/img/4.jpg" alt="ANNE HATHAWAY" class="team-member">
               <h3>Ashley Greene</h3>
               <span class="role">SEO / Developer</span>
               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
               <div class="social-icons">
                   <ul>
                       <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
              
   </section>
                       
   <!--END TEAM SECTION-->     
        
   <!--START SKIL SECTION-->     
   
   <section class="skil-section" id="skil">
       <div class="row">
           <h2>WE GOT SKILLS!</h2>
           <p class="little-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       </div>
       <div class="row">
           <div class="col span_1_of_4 box">
               <svg class="radial-progress web-design" data-percentage="90" viewBox="0 0 80 80">
                  <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                  <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                  <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">90%</text>
               </svg>
               <h3>Web Design</h3>
           </div>
           
           <div class="col span_1_of_4 box">
               <svg class="radial-progress html-css" data-percentage="75" viewBox="0 0 80 80">
                  <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                  <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                  <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">75%</text>
               </svg>
               <h3>HTML / CSS</h3>
           </div>
           
           <div class="col span_1_of_4 box">
               <svg class="radial-progress graphic-design" data-percentage="70" viewBox="0 0 80 80">
                  <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                  <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                  <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">70%</text>
               </svg>
               <h3>GRAPHIC DESIGN</h3>
           </div>
           
           <div class="col span_1_of_4 box">
               <svg class="radial-progress ul-ux" data-percentage="85" viewBox="0 0 80 80">
                  <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                  <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                  <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">85%</text>
               </svg>
               <h3>UI / UX</h3>
           </div>
           
       </div>
   </section>
        
   <!--END SKIL SECTION-->      
        
   <!--START PROTFOLIO SECTION-->     
        
   <section class="protfolio-section" id="protfolio">
       <div class="row">
           <h2>OUR PORTFOLIO</h2>
           <p class="little-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam</p>
       </div>
       <div class="row">
           <div class="protfolio-filter">
               <button type="button" data-filter="all">all</button>
               <button type="button" data-filter=".web">web</button>
               <button type="button" data-filter=".apps">apps</button>
               <button type="button" data-filter=".icons">icons</button>
           </div>
       </div>
       <div class="row container">
           <div class="col span_1_of_2 mix web icons box">
               <img src="resources/img/protflio-1.png" alt="Isometric Perspective Mock-Up" class="protfolio-image">
               <h4>Isometric Perspective Mock-Up</h4>
           </div>
           <div class="col span_1_of_2 mix apps icons box">
               <img src="resources/img/protflio-2.png" alt="Time Zone App UI" class="protfolio-image">
               <h4>Time Zone App UI</h4>
           </div>
           <div class="col span_1_of_2 mix apps box">
               <img src="resources/img/protflio-3.png" alt="Viro Media Players UI" class="protfolio-image">
               <h4>Viro Media Players UI</h4>
           </div>
           <div class="col span_1_of_2 mix icons box">
               <img src="resources/img/protflio-4.png" alt="Blog / Magazine Flat UI Kit" class="protfolio-image">
               <h4>Blog / Magazine Flat UI Kit</h4>
           </div>
       </div>
       <!-- HIDDEN LOAD MORE BUTTON
       <div class="row">
           <a href="#" class="btn btn-load-more">LOAD MORE PROJECTS</a>
       </div>
       -->
   </section>
        
   <!--END PROTFOLIO SECTION-->     
        
   <!--START TESTIMONIAL SECTION-->     
       
   <section class="testimonial-section" id="testimonial">
       <div class="row">
           <h2>WHAT POEPLE SAY ABOUT US</h2>
           <p class="little-description">Our clients love us!</p>
       </div>
       <div class="row">
           <div class="col span_1_of_2 box">
               <div class="client-photo">
                   <img src="resources/img/1.jpg" alt="Chanel Iman">
               </div>
               <div class="client-review">
                   <p>“Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urn.”</p>
                   <h3>Chanel Iman</h3>
                   <span class="role">CEO of Pinterest</span>
               </div>
           </div>
           <div class="col span_1_of_2 box">
               <div class="client-photo">
                   <img src="resources/img/2.jpg" alt="ADRIANA LIMA">
               </div>
               <div class="client-review">
                   <p>“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”</p>
                   <h3>ADRIANA LIMA</h3>
                   <span class="role">Founder of Instagram</span>
               </div>
           </div>
           <div class="col span_1_of_2 box">
               <div class="client-photo">
                   <img src="resources/img/3.jpg" alt="ANNE HATHAWAY">
               </div>
               <div class="client-review">
                   <p>“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”</p>
                   <h3>ANNE HATHAWAY</h3>
                   <span class="role">Lead Designer at Behance</span>
               </div>
           </div>
           <div class="col span_1_of_2 box">
               <div class="client-photo">
                   <img src="resources/img/4.jpg" alt="EMMA STONE">
               </div>
               <div class="client-review">
                   <p>“Phasellus non purus vel arcu tempor commodo. Fusce semper, purus vel luctus molestie, risus sem.”</p>
                   <h3>EMMA STONE</h3>
                   <span class="role">Co-Founder of Shazam</span>
               </div>
           </div>
           
       </div>
   </section>    
         
   <!--END TESTIMONINAL SECTION-->     
          
    <!--START CONTACT SECTION-->    
    <section class="contact-section" id="contact">
        <div class="row">
            <h2>GET IN TOUCH</h2>
            <p class="little-description">1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>
        </div>
        <div class="row">
            <form action="https://formspree.io/f/xoqpljgq" method="post">
                <div class="row">
                    <div class="col span_1_of_2">
                        <input type="text" name="Name" placeholder="Your Name *" required>
                    </div>
                    <div class="col span_1_of_2">
                        <input type="email" name="Email" placeholder="Your Email *" required>
                    </div>
                 </div>
                <div class="row">
                        <textarea name="Message" cols="30" rows="10" placeholder="Your Message *" required></textarea>
                 </div>
                <div class="row">
                    <input type="submit" value="SEND MESSAGE" class="btn btn-submit">
                </div>
            </form>
        </div>
    </section>
    <!--END CONTACT SACTION-->
    
    <!--START FOOTER SACTION-->
    
    <footer class="footer-section">
        <div class="row">
            <ul>
                <li><a href="">facebook</a></li>
                <li><a href="">twitter</a></li>
                <li><a href="">google+</a></li>
                <li><a href="">linkedin</a></li>
                <li><a href="">behabce</a></li>
                <li><a href="">dribble</a></li>
                <li><a href="">github</a></li>
            </ul>
        </div>
    </footer>
    
    <!--END FOOTER SACTION-->
    
    <!--JS SCRIPTS LINKS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="vendors/js/html5shiv.min.js"></script>
    <script src="vendors/js/respond.min.js"></script>
    <script src="vendors/js/selectivizr.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="vendors/js/mixitup.min.js"></script>
    <script src="resources/js/main.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<UA->    </UA->183084156-2">
    </script>
    <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-183084156-2');
    </script>

</body>
</html>