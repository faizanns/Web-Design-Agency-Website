<!DOCTYPE html>

<html lang="en">
    <head>
    
        <title>About Us | ATDesigners | Mississauga Digital Design Agency</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1, width=device-width">
        <meta name="description" content="Advance Tech Designers is a digital designing agency in Mississauga, ON and specializes in Website Design and Graphic Design.">
        <meta name="author" content="Advance Tech Designers">
        <link rel="shortcut icon" href="images/universal-img/ATD-WT.jpg">
        <link rel="stylesheet" href="about-us.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/azb4dqu.css">
        <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
        
    </head>
    
    <body>
    
        <script type="text/javascript">
            
            $(document).ready(function(){
              // Add smooth scrolling to all links
              $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 1000, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
});
            
        </script>
        
        <div id="parent-container">
        
            <?php
                include('navbar.php');
            ?>
            
            <header id="header-main">
            
                <div class="header-container">
                    <div class="box-1 box">
                        <h1>About Us</h1>
                        <h3>A team of passionate individuals at your service</h3>
                        <p>Advance Tech Designers is an agecny that specializes in Graphic Design and Web Development.</p>
                        <a href="#details-section">Get to know us more <i class="fas fa-arrow-down"></i></a>
                    </div>
                </div>
            
            </header>
            
            <div class="body-section-1" id="details-section">
            
                <h2>Our Clients Remember Us For A Reason</h2>
                <div>
                    <div></div>
                    <p>Our <span class="color-1 c-text">customer oriented</span> approach enables us to fully understand what your business requires and our <span class="color-6 c-text">talented team</span> works to structure those ideas into reality.</p>
                    
                    <p>Our work reflects our abilities. Our <span class="color-3 c-text">creative and eye-catching</span> graphic designs are built while keeping the human nature in mind. This help us create designs that <span class="color-8 c-text">outstand</span> those of others. Our designs are <span class="color-7 c-text">relevant</span> for your wok. We go with the flow. Our designs are <span class="color-2 c-text">decent</span> and <span class="color-10 c-text">easy to remember</span>.</p>
                    
                    <p>The <span class="color-2 c-text">responsiveness</span> and <span class="color-10 c-text">compatibility</span> of our web designs make them <span class="color-7 c-text">user-friendly</span> and <span class="color-1 c-text">beautiful</span> over all platforms. We make websites that feel <span class="color-5 c-text">superior</span> when you look at their layout. At the same time, they effectively <span class="color-8 c-text">address businesses' needs</span> through appropriate features and divisions that make them <span class="color-3 c-text">easy to navigate</span>. We give your business an online image, not just a website.</p>

                    <p>We have kept our services <span class="color-5 c-text">inexpensive</span> so that even small businesses and startups can <span class="color-2 c-text">afford</span> great websites and graphic designs. This encourages small businesses to built their <span class="color-9 c-text">online presence</span>. And this is also beneficial for us because we earn money when you earn money. Thats it!</p>
                    
                </div>
            
            </div>
            
            <div class="body-section-2" id="our-team">
            
                <h2>Meet Our Amazing Team</h2>
                
                <div class="grid-container">
                    <div>
                        <div class="img-box box-a"></div>
                        <div class="box box-1">
                            <h3>Fazi S.</h3>
                            <p>Founder/ Web Developer</p>
                        </div>
                    </div>
                    <div>
                        <div class="img-box box-b"></div>
                        <div class="box box-2">
                            <h3>Momi K.</h3>
                            <p>Founder/ Senior Graphic Designer</p>
                        </div>
                    </div>
                    <div>
                        <div class="img-box box-c"></div>
                        <div class="box box-3">
                            <h3>Muhammad F.</h3>
                            <p>CEO/ Senior Web Developer</p>
                        </div>
                    </div>
                    <div>
                        <div class="img-box box-d"></div>
                        <div class="box box-4">
                            <h3>Cristina A.</h3>
                            <p>Artwork Manager</p>
                        </div>
                    </div>
                    <div>
                        <div class="img-box box-e"></div>
                        <div class="box box-5">
                            <h3>Carlos R.</h3>
                            <p>Graphic designer</p>
                        </div>
                    </div>
                    <div>
                        <div class="img-box box-f"></div>
                        <div class="box box-6">
                            <h3>Emma D.</h3>
                            <p>Sales Leader</p>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="body-section-3">
            
                <div>
                    <h3>Ready To Get Started &#63;</h3>
                    <a name="request-a-quote" class="req-quote-btn btn" href="contact-us.php">REQUEST A QUOTE</a>
                </div>
            
            </div>
            
            <div class="body-section-4">
            
                <div class="logo-display">
                    <a href="index.html">
                        <img src="images/universal-img/logo-orignal.png">
                    </a>
                </div>
                <a href="index.html">
                    <p>Advance Tech Designers</p>
                </a>
            
            </div>
            
            <div class="body-section-5">
            
            <p>
                <span>Photo by <a href="https://unsplash.com/@ryoji__iwata?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Ryoji Iwata</a> on <a href="https://unsplash.com/images/people?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></span>

                <span>&nbsp;<a href='https://www.freepik.com/vectors/background'>Background vector created by pikisuperstar - www.freepik.com</a></span>

                <span>&nbsp;<a href='https://www.freepik.com/vectors/people'>People vector created by pikisuperstar - www.freepik.com</a></span>

            </p>
            
        </div>
            
        </div>
        
    </body>
    
</html>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            