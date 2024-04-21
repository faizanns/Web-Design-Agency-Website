<!--php for form-->
<?php

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    

    $error = $successMessage = "";

    if($_POST) {
        
        if (!$_POST['name']) {
            
            $error .= "An name field is required.<br>";
            
        } else if (!preg_match("/^[a-zA-z ]*$/", $_POST['name']) ) {  
            
            $error .= "The name should have only alphabets and whitespace.<br>";
            
        }
        
        if (!$_POST['email']) {
            
            $error .= "An email address field is required.<br>";
            
        } else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($_POST['subject'] == "") {
            
            $error .= "The subject field is required.<br>";
            
        }
        
        if (!$_POST['message']) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if ($error == "") {
            
            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
            // Create email headers
            $headers .= 'From: '.$_POST['email']."\r\n".
                'Reply-To: '.$_POST['email']."\r\n" .
                'X-Mailer: PHP/' . phpversion();

            $emailTo = "sheikhfaizan2002@gmail.com";

            $subject = $_POST['subject'];
            
            // Compose a simple HTML email message
            $message = '<html>
                <head>
                    <style type="text/css">
                        table, th, td {
                          border: 1px solid black;
                          border-collapse: collapse;
                        }

                        td:first-child{
                            width:20%;
                        }
                        
                        h1{
                            color:#1c1c1c;
                            text-align:center
                        }
                    </style>
                </head>
            <body>';
            $message .= '<h1>Client Message</h1>';
            $message .= '<table style="width:100%">
                            <tr>
                                <th colspan="2">Client Info</th>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>'.$_POST['name'].'</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>'.$_POST['email'].'</td>
                            </tr>
                            <tr>
                                <td>Company</td>
                                <td>'.$_POST['company'].'</td>
                            </tr>
                            <tr>
                                <td>Current Website</td>
                                <td>'.$_POST['current_website'].'</td>
                            </tr>
                            <tr>
                                <td>Topic</td>
                                <td>'.$_POST['subject'].'</td>
                            </tr>
                            <tr>
                                <th colspan="2">Message</th>
                            </tr>
                            <tr>
                                <td colspan="2">'.$_POST['message'].'</td>
                            </tr>
                        </table>';
            $message .= '</body></html>';

            if (mail($emailTo, $subject, $message, $headers)) {

                $successMessage = "<div id=\"success-div\">Your message was sent, we'll get back to you ASAP!</div>";

            } else {

                $error = '<div class="alert alert-danger" role="alert">Your message couldn\'t be sent, please try again later!</div>';

            }

        } else {

            $error = "<div id=\"errors-div\"><p>There were error(s) in your form:</p>".$error."</div>";
        }
        
    }

?>

<!DOCTYPE html>

<html lang="en">
    <head>
    
        <title>Contact Us | ATDesigners | Mississauga Digital Design Agency</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1, width=device-width">
        <meta name="description" content="Advance Tech Designers is a digital designing agency in Mississauga, ON and specializes in Website Design and Graphic Design.">
        <meta name="author" content="Advance Tech Designers">
        <link rel="shortcut icon" href="images/universal-img/ATD-WT.jpg">
        <link rel="stylesheet" href="contact-us.css">
        <link rel="stylesheet" href="../php/contact-form-3.css">
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
                  // The optional number (1000) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 1000, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
            });
            
            // Changing color of the select input in gotm
            $(document).ready(function() {
               $('#subject').css('color','gray');
               $('#subject').change(function() {
                  var current = $('#select').val();
                  if (current != '') {
                      $('#subject').css('color','black');
                  } else {
                      $('#subject').css('color','gray');
                  }
               }); 
            });

            $("#c-form").submit(function (validateForm) {

                // Initializing Variables With Form Element Values
                var error = "";
                var name = $("#name").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();

                // Initializing Variables With Regular Expressions
                var name_regex = /^[a-zA-Z ]+$/;
                var email_regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                // Validating Name Field.
                if (name == "") {

                    error += "The name field is required.<br>"

                } else if (!name.match(name_regex)) {

                           error += "The name should have only alphabets and whitespace.<br>";

                }

                // Validating Email Field.
                if (email == "") {

                    error += "The email address field is required.<br>"

                } else if (!email.match(email_regex) || !(email.length > 1 && email.length < 27)) {

                           error += "The email address entered is invalid.<br>";

                }

                // Validating Subject Field.
                if (subject == "") {

                    error += "The selection field is required.<br>";

                }

                // Validating Message Field.
                if (message == "") {

                    error += "The message field is required.";

                }

                if (error != "") {

                    $("#error").html('<div id="errors-div"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');

                    return false;

                } else {

                    return true;

                }

            });
            
        </script>
        
        <div id="parent-container">
        
            <?php
                include('navbar.php');
            ?>
            
            <header id="header-main">
            
                <div class="header-container">
                    <div>
                        <h1>Contact Us</h1>
                    </div>
                </div>
            
            </header>
            
            <div class="body-section-1">
                
                <div>
                    <h3>Want to grow your business to another level?</h3>
                    <p>Share your project requirements and ideas with us. We will follow up with a business proposal that suits both, your business and your budget.</p>
                    <a href="#form-section">Fill the form to get started <i class="fas fa-arrow-down"></i></a>
                </div>
                
            </div>
            
            <div class="body-section-2" id="form-section">
                
                <div class="flex-container">
            
                    <div id="form-container" class="box box-1">
                        
                        <h2>Get in touch!</h2>
                        
                        <div class="container">
            
                            <div id="error"><?php echo $error.$successMessage; ?></div>

                            <form id="c-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                            <div class="half-row">
                                <p>
                                    <label for="name">Your Name&#42;</label>
                                </p>

                                <input id="name" type="text" name="name" placeholder="Name" value="<?php echo (isset($_POST['name']))?$_POST['name']:'';?>">
                            </div>

                            <div class="half-row">
                                <p>
                                    <label for="email">Email Address&#42;</label>
                                </p>

                                <input id="email" type="text" name="email" placeholder="you@example.com" value="<?php echo (isset($_POST['email']))?$_POST['email']:'';?>">
                            </div>

                            <div class="half-row">
                                <p>
                                    <label for="company">Company</label>
                                </p>

                                <input id="company" type="text" name="company" value="<?php echo (isset($_POST['company']))?$_POST['company']:'';?>">
                            </div>

                            <div class="half-row">
                                <p>
                                    <label for="current_website">Current Website</label>
                                </p>

                                <input id="current_website" type="text" name="current_website" value="<?php echo (isset($_POST['current_website']))?$_POST['current_website']:'';?>">
                            </div>

                            <div>
                                <p>
                                    <label for="subject">What can we help you with?&#42;</label>
                                </p>

                                <select name="subject" id="subject" value="<?php echo (isset($_POST['subject']))?$_POST['subject']:'';?>">
                                    <option value="" style="color:gray">Please select</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                    <option value="Website Design">Website Design</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div>
                                <p>
                                    <label for="message">Message&#42;</label>
                                </p>

                                <textarea id="message" type="textarea" name="message" rows="6"><?php if(isset($_POST['message'])) { 
                                        echo ($_POST['message']); }
                                     ?></textarea>
                            </div>

                            <div>
                                <input id="button" class="btn" type="submit">
                            </div>

                            </form>

                        </div>
                        
                    </div>
                    <div id="contact-info" class="box box-2">

                        <div class="small-section">
                            <p>Find us at:</p>
                            <a href="mailto:atdesigners@yandex.com"><span><i class="far fa-envelope"></i> atdesigners@yandex.com</span></a>
                            <p>Follow us at:</p>
                            <a href="https://www.instagram.com/atechdesigners/"><span><i class="fab fa-instagram"></i> atdesigners</span></a>
                        </div>

                    </div>
                    
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