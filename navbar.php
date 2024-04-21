<!DOCTYPE html>

<html lang="en">
    <head>
        
        <style type="text/css">
        
            /* navbar css starts here */

            #navbar{
                top:0px;
                position:fixed;
                background-color:rgba(0,0,0,0.4);
                margin:0px;
                padding:0px;
                width:100%;
                z-index:5;
                overflow:hidden;
            }

            #navbar li a{
                display:block;
            }

            #navbar .outer-list{
                display:flex;
                flex-wrap:nowrap;
                justify-content:space-between;
                margin:0px;
                padding-left:40px;
                padding-right:15px;
            }

            #navbar .outer-list>li>ul:first-child{
                display:flex;
                flex-wrap:nowrap;
                justify-content:space-between;
            }

            #navbar .outer-list .nav-logo img{
                height:73px;
                margin-top:4px;
            }

            #navbar .logo-div li:last-child{
                margin:auto 0px;
                display:inline-block;
                position:relative;
                left:20px;
            }

            #navbar .logo-div li:last-child a{
                font-family:azonix;
                font-weight:500;
                letter-spacing:1px;
                color:white;
                font-size:20px;
                padding:0px 0px 0px 15px;
            }

            #navbar .inner-list-1, #navbar .inner-list-2{
                display:flex;
                flex-wrap:nowrap;
                justify-content: space-between;
                padding:0px;
            }

            #navbar .inner-list-1>li>a:not(.logo-name), #navbar .inner-list-2>li>a{
                font-weight:600;
                color:white;
                font-size:16px;
                display:block;
                padding:32px 15px 31px 15px;
            }

            #navbar .inner-list-2>li:first-child:hover>a{
                background-color:white;
                color:black;
            }

            #navbar .inner-list-1>li:hover>a{
                background-color:white;
                color:black;

            }

            #navbar .inner-list-1 .dropdown-content{
                display:block;
                position:fixed;
                visibility:hidden;
                opacity:0;
                background-color:white;
                box-shadow:0px 4px 15px rgba(0, 0, 0, 0.3);
                transition:opacity 0.2s ease-in-out 0s;
                -moz-transition:opacity 0.2s ease-in-out 0s;
                -webkit-transition:opacity 0.2s ease-in-out 0s;
                -o-transition:opacity 0.2s ease-in-out 0s;
            }

            #navbar .inner-list-1 .dropdown-content li{
                padding:2px;
            }

            #navbar .inner-list-1 li:hover > .dropdown-content{
                visibility:visible;
                opacity:1;
                transition:opacity 0.2s ease-in-out 0s;
                -moz-transition:opacity 0.2s ease-in-out 0s;
                -webkit-transition:opacity 0.2s ease-in-out 0s;
                -o-transition:opacity 0.2s ease-in-out 0s;
            }

            #navbar .dropdown-content li a{
                display:block;
                padding:10px 40px 8px 40px;
                color:rgb(38, 38, 38);
                font-weight:600;
                border-radius:4px;
                transition:all 0.1s ease-in-out 0s;
                -moz-transition:all 0.1s ease-in-out 0s;
                -webkit-transition:all 0.1s ease-in-out 0s;
                -o-transition:all 0.1s ease-in-out 0s;
            }

            #navbar .dropdown-content li a:hover{
                color:rgb(38, 38, 38);
                font-weight:800;
                transition:all 0.1s ease-in-out 0s;
                -moz-transition:all 0.1s ease-in-out 0s;
                -webkit-transition:all 0.1s ease-in-out 0s;
                -o-transition:all 0.1s ease-in-out 0s;
            }

            #navbar .hidden-navbar{
                display:none;
            }

            #navbar .hidden-navbar .fa-bars{
                font-size:29px;
                color:white;
                float: left;
                padding:28px 15px 28px 15px;
            }

            #navbar #btn-onclick-enter{
                display:none
            }

            #navbar .over-bars{
                width:27px;
                height:24px;
                position:fixed;
                top:31px;
                right:29px;
                z-index:4;
                cursor:pointer;
            }

            #navbar .navbar-container{
                position:fixed;
                top:0px;
                left:100%;
                height:100vh;
                width:100%;
                background-color:black;
                transition:all 0.25s ease-in-out 0s;
                -moz-transition:all 0.25s ease-in-out 0s;
                -webkit-transition:all 0.25s ease-in-out 0s;
                -o-transition:all 0.25s ease-in-out 0s;
            }

            #navbar .inner-list-3>li:not(:first-child){
                width:auto;
                padding:14px 62px !important;
            }

            #navbar .inner-list-3>li>a{
                display:inline-block !important;
                color:white;
                text-transform:uppercase;
                font-family: 'Open Sans', sans-serif;
                font-size:25px !important;
                letter-spacing:2px;
                font-weight:600 !important;
            }

            #navbar .inner-list-2 .close-img{
                width:32px;
                margin:27px 27px;
            }

            #navbar .inner-list-3>li:first-child{
                text-align:right;
            }

            #navbar #btn-onclick-enter:checked + label + .navbar-container{
                left:0px !important;
                transition:all 0.3s ease-in-out 0s;
                -moz-transition:all 0.3s ease-in-out 0s;
                -webkit-transition:all 0.3s ease-in-out 0s;
                -o-transition:all 0.3s ease-in-out 0s;
            }

            #navbar #btn-onclick-enter-2{
                display:none;
            }

            #navbar label .fa-chevron-down{
                font-size:28px;
                margin:0px 10px;
                color:white;
                cursor:pointer;
                position:relative;
                top:0px;
                transition:all 0.3s ease-in-out 0s;
                -moz-transition:all 0.3s ease-in-out 0s;
                -webkit-transition:all 0.3s ease-in-out 0s;
                -o-transition:all 0.3s ease-in-out 0s;
            }

            #navbar #btn-onclick-enter-2:checked + label .fa-chevron-down{
                -webkit-transform:rotate(180deg);
                transform:rotate(180deg);
                transition:all 0.3s ease-in-out 0s;
                -moz-transition:all 0.3s ease-in-out 0s;
                -webkit-transition:all 0.3s ease-in-out 0s;
                -o-transition:all 0.3s ease-in-out 0s;
            }

            #navbar .dropdown-content-2{
                display:block;
                position:absolute;
                visibility:hidden;
                opacity:0;
                transition:all 0.3s ease-in-out 0s;
                -moz-transition:all 0.3s ease-in-out 0s;
                -webkit-transition:all 0.3s ease-in-out 0s;
                -o-transition:all 0.3s ease-in-out 0s;
            }

            #navbar .dropdown-content-2 li a{
                color:white;
                font-size:20px;
                margin:10px 40px;
            }

            #navbar #btn-onclick-enter-2:checked + label + .dropdown-content-2{
                position:relative;
                visibility:visible;
                opacity:1;
                transition:all 0.3s ease-in-out 0s;
                -moz-transition:all 0.3s ease-in-out 0s;
                -webkit-transition:all 0.3s ease-in-out 0s;
                -o-transition:all 0.3s ease-in-out 0s;
            }

            .fixed-main-header{
                background-color:rgb(38, 38, 38) !important;
                transition:all 0.3s ease-in-out 0s;
                -moz-transition:all 0.3s ease-in-out 0s;
                -webkit-transition:all 0.3s ease-in-out 0s;
                -o-transition:all 0.3s ease-in-out 0s;
            }

            @media(max-width:980px){

                #navbar{
                    background-color:rgba(0,0,0,0.4);;
                }

                #navbar .inner-list-1{
                    display:none !important;
                }

                #navbar .hidden-navbar{
                    display:flex;
                }
            }

            @media(max-width:780px){

                #navbar .outer-list{
                    padding-left:20px;
                    padding-right:15px;
                }

                #navbar .inner-list-1>li>a:not(.logo-name), #navbar .inner-list-2>li>a{
                    font-size:16px;
                    padding:26px 15px 26px 15px;
                    font-weight:600 !important;
                }

                #navbar .logo-div img{
                    height:65px !important;
                }

                #navbar .logo-div li:last-child a{
                    font-size:17px !important;
                }

                #navbar .hidden-navbar .fa-bars{
                    font-size:29px;
                    padding:22px 15px 22px 15px;
                }

                #navbar .inner-list-2 .close-img{
                    width:32px;
                    margin:21px 26px 23px 31px;
                }

                #navbar .over-bars{
                    top:25px;
                    right:29px;
                }

            }

            @media(max-width:620px){

                #navbar .logo-div li:last-child{
                    line-height: 25px;
                    display:none;
                }

                #navbar .logo-div li:last-child a{
                    font-size:15px !important;
                }

                #navbar .outer-list{
                    flex-wrap:wrap;
                    max-width:100%;
                }

                #navbar .inner-list-2, #navbar .inner-list-1{
                    justify-content:center;
                }

                #navbar .inner-list-3>li>a{
                    font-size:20px !important;
                }

                #navbar .inner-list-3>li:not(:first-child){
                    padding:14px 30px !important;
                }

                #navbar label .fa-chevron-down{
                    font-size:20px;
                }

                #navbar .dropdown-content-2 li a{
                    font-size:18px;
                    margin:15px 40px;
                }

            }
        
        </style>
        
    </head>
    
    <body>
    
        <script type="text/javascript">
            
            $(document).ready(function(){
                $(window).on("scroll",function(){
                    if($(window).scrollTop()>50) { $("#navbar").addClass("fixed-main-header");
                    $(".nav-img").attr("src","images/universal-img/logo-white.png") 
                } else{
                        $("#navbar").removeClass("fixed-main-header");
                $(".nav-img").attr("src","images/universal-img/logo-orignal.png")}
                              });
            });
            
            // function to close navbar of previous page
            $(document).ready(function() {
                $(".close-navbar").on('click', function(event_close) {
                    $("#btn-onclick-enter").prop('checked', false);
                });
            });

        </script>
        
        <nav id="navbar">

            <ul class="outer-list">
                <li>
                    <ul class="logo-div">
                        <li><a href="index.html" class="nav-logo"><img class="nav-img" src="images/universal-img/logo-orignal.png" alt="ATDesigners logo"></a></li>
                        <li><a href="index.html" class="logo-name">Advance Tech Designers</a></li>
                    </ul>
                </li>
                <li>
                    <ul class="inner-list-1">
                        <li><a class="alt-1" href="index.php">Home</a></li>
                        <li>
                            <a class="dropdown-btn alt-2" href="services.php" >Services <i class="fas fa-caret-down"></i></a>
                                <ul class="dropdown-content">
                                    <li><a class="alt-1" href="services.php#website-design">Website Design</a></li>
                                    <li><a class="alt-2" href="services.php#graphic-design">Graphic Design</a></li>
                                </ul>
                        </li>
                        <li><a href="about-Us.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                    <div class="hidden-navbar">
                        <ul class="inner-list-2">
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li>
                                <input type="checkbox" id="btn-onclick-enter"/>
                                <label for="btn-onclick-enter">
                                    <i class="fas fa-bars"></i>
                                    <span class="over-bars"></span>
                                </label>
                                <div class="navbar-container">
                                    <ul class="inner-list-3">
                                        <li><img alt="close-icon" class="close-img" src="https://img.icons8.com/ios-filled/50/ffffff/delete-sign--v1.png"/></li>
                                        <li><a class="close-navbar" href="index.html">Home</a></li>
                                        <li>
                                            <a class="dropdown-btn-2 close-navbar" href="services.php" >Services</a>
                                            <input type="checkbox" id="btn-onclick-enter-2"/>
                                            <label for="btn-onclick-enter-2">
                                                <i class="fas fa-chevron-down"></i>
                                            </label>
                                            <ul class="dropdown-content-2">
                                                <li><a class="alt-1 close-navbar" href="services.php#website-design">Website Design</a></li>
                                                <li><a class="alt-2 close-navbar" href="services.php#graphic-design">Graphic Design</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.php" class="close-navbar">About Us</a></li>
                                        <li><a href="contact-us.php" class="close-navbar">Contact Us</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </nav>
    
    </body>
    
</html>





























