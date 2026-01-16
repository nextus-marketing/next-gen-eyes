<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="Next Gen Eyes delivers advanced smart alarms, video surveillance & smart-home security for homes and businesses. Secure your property 24/7 get a personalized consultation today!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="/frontend/my-img/favicon.png">
		<!-- CSS here -->
        <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="/frontend/css/animate.min.css">
        <link rel="stylesheet" href="/frontend/css/magnific-popup.css">
        <link rel="stylesheet" href="/frontend/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="/frontend/font-flaticon/flaticon.css">
        <link rel="stylesheet" href="/frontend/css/dripicons.css">
        <link rel="stylesheet" href="/frontend/css/slick.css">
        <link rel="stylesheet" href="/frontend/css/meanmenu.css">
        <link rel="stylesheet" href="/frontend/css/default.css">
        <link rel="stylesheet" href="/frontend/css/style.css">
        <link rel="stylesheet" href="/frontend/css/responsive.css">
        <link rel="stylesheet" href="/frontend/css/my.css">
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
        <link rel="canonical" href="{{ url()->current() }}" />
    </head>
    <body>
     <!-- header -->
<header class="header-area header-three">  

    <!-- Header Top -->
    <div class="header-top second-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-10 col-md-8">
                    <div class="header-cta">
                        <ul>
                            <li class="header-line rotate-text">
                                <span>
                                    <b class="highlight">Limited Time Offer:</b> 
                                    Talk To Our Security Experts & Get 3 Months Free Monitoring Services
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Main -->
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">

                    <!-- Logo -->
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="/">
                            <img src="/frontend/my-img/logo.png" alt="logo" style="max-width:220px;">
                            </a>
                        </div>
                    </div>

                    <!-- Main Menu -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="main-menu text-right text-xl-right">
                            <nav id="mobile-menu">
                                <ul>

                                    <li class="has-sub"><a href="/">Home</a></li>
                                    <li><a href="/#about">About Us</a></li>
                                    <li><a href="/#contact">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Call Now Button (Desktop only) -->
                    <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block mt-15 mb-15">
                        <a href="tel:+12544108166" class="top-btn">Call Now</a>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>



        @yield('content')
        <footer class="footer-bg footer-p" style="background:#222629;">
    <div class="footer-top pt-70 pb-40">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-xl-5 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-15">
                        <div class="f-widget-title mb-30">
                            <a href="/">
                            <img src="/frontend/my-img/footer-logo.png" alt="img" style="max-width:220px;">      
                            </a>                             
                        </div>
                        <p>Next Gen Eyes delivers advanced, smart‑security solutions to help protect homes and businesses. We combine cutting‑edge surveillance, alarms, and smart‑home integration with personalised consultations tailored to your needs. Our mission is to give you true peace of mind — reliable protection, 24/7 monitoring, and a commitment to your safety.</p>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Our Links</h2>
                        </div>
                        <div class="footer-link">
                            <ul>                                        
                                <li><a href="/">Home</a></li>
                                <li><a href="/#about"> About Us</a></li>
                                <li><a href="/#contact"> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <!-- Added email and phone -->
                                <li><a href="mailto:info@nextgeneyes.com">info@nextgeneyes.com</a></li> 
                                <li><a>Address: Jersey City, NJ 07097</a></li>
                                <li><a href="tel:+12544108166">+1(254) 410-8166</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-wrap">
    <div class="container">
        <div class="row align-items-center">

            <!-- RIGHT SIDE FIRST -->
            <div class="col-lg-6">
                <div class="text">Copyright © 2025 Next Gen Eyes. All rights reserved.</div>
            </div>

            <!-- LEFT SIDE SECOND -->
            <div class="col-lg-4">
                <ul>
                    <li>
                        <a href="/privacy-policy">
                            <div class="text2">Privacy Policy</div>
                        </a>
                    </li>
                    <li>
                        <a href="/terms-and-condition">
                            <div class="text2">Terms and Condition</div>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

</footer>

<div id="promoPopup" class="promo-popup-overlay">
        <div class="promo-popup">
            <!-- Logo Centered -->
            <div class="popup-logo">
                 <img src="/frontend/my-img/logo.png" alt="logo" style="max-width:220px;">
            </div>
            <span class="close-popup">&times;</span>
            <h2>Get <span style="color:#ff1749;">3 Months FREE</span> Monitoring!</h2>
            <p>Call now and secure your home with our exclusive limited-time offer.</p>
            <div class="slider-btn">                                          
                            <a href="tel:+12544108166" class="btn ss-btn">Call Now</a>					
                        </div>
        </div>
    </div>

    <script>
    // Show popup after 2 seconds
    setTimeout(function() {
        document.getElementById("promoPopup").style.display = "flex";
    }, 2000);

    // Close Popup
    document.querySelector(".close-popup").onclick = function () {
        document.getElementById("promoPopup").style.display = "none";
    };

    // Close when clicking outside the popup
    window.onclick = function (e) {
        if (e.target == document.getElementById("promoPopup")) {
            document.getElementById("promoPopup").style.display = "none";
        }
    };
</script>

<style>
    /* Popup Overlay */
/* Overlay */
.promo-popup-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    display: none;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(4px);
    z-index: 99999;
    animation: fadeIn 0.4s ease-out;
}

/* Popup Box */
.promo-popup {
    background: rgba(255, 255, 255, 0.97);
    width: 90%;
    max-width: 520px;
    padding: 40px 35px;
    border-radius: 28px;
    text-align: center;
    position: relative;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    animation: popupZoom 0.45s ease-in-out;
}

/* Logo */
.popup-logo {
    display: flex;
    justify-content: center;
    margin-bottom: 18px;
}

.popup-logo img {
    width: 180px;
    height: auto;
    object-fit: contain;
}

/* Title */
.promo-popup h2 {
    font-size: 30px;
    font-weight: 800;
    color: #111;
    margin-bottom: 12px;
    letter-spacing: -0.5px;
}

/* Content text */
.promo-popup p {
    font-size: 17px;
    color: #444;
    margin-bottom: 28px;
    line-height: 1.6em;
}

/* Close button */
.close-popup {
    position: absolute;
    top: 15px;
    right: 18px;
    font-size: 30px;
    font-weight: 600;
    cursor: pointer;
    color: #666;
    transition: 0.25s ease;
}

.close-popup:hover {
    color: #ff1749;
    transform: rotate(90deg);
}

</style>

   <a href="tel:+12544108166" class="call-now-float">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff">
        <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 
                 1 0 011-.24 11.05 11.05 0 003.47.56 1 1 0 011 1V21a1 
                 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.5a1 
                 1 0 011 1 11.05 11.05 0 00.56 3.47 1 
                 1 0 01-.24 1l-2.2 2.2z"/>
    </svg>
</a>


<style>
    .call-now-float {
    position: fixed;
    bottom: 70px;
    left: 25px;
   width: 50px;
    height: 50px;
    background: #c50a33ff;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    z-index: 9999;
    cursor: pointer;
    animation: pulseCall 1.6s infinite ease-in-out;
    box-shadow: 0 6px 20px rgba(238, 81, 178, 0.45);
}

.call-now-float i {
    color: #fff;
}

/* Keyframe Animation */
@keyframes pulseCall {
    0% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(232, 96, 171, 0.7);
    }
    50% {
        transform: scale(1.12);
        box-shadow: 0 0 0 12px rgba(202, 96, 232, 0);
    }
    100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(202, 96, 232, 0);
    }
}

#scrollUp {
    background: #c50a33ff;
    height: 45px;
    width: 45px;
    right: 50px;
    bottom: 77px;
    color: #fff;
    font-size: 20px;
    text-align: center;
    border-radius: 50%;
    font-size: 22px;
    line-height: 45px;
    transition: .3s;
}

</style>

        <!-- footer-end -->


		<!-- JS here -->
        <script src="/frontend/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="/frontend/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="/frontend/js/popper.min.js"></script>
        <script src="/frontend/js/bootstrap.min.js"></script>
        <script src="/frontend/js/slick.min.js"></script>
        <script src="/frontend/js/ajax-form.js"></script>
        <script src="/frontend/js/paroller.js"></script>
        <script src="/frontend/js/wow.min.js"></script>
        <script src="/frontend/js/js_isotope.pkgd.min.js"></script>
        <script src="/frontend/js/imagesloaded.min.js"></script>
        <script src="/frontend/js/parallax.min.js"></script>
         <script src="/frontend/js/jquery.waypoints.min.js"></script>
        <script src="/frontend/js/jquery.counterup.min.js"></script>
        <script src="/frontend/js/jquery.scrollUp.min.js"></script>
        <script src="/frontend/js/jquery.meanmenu.min.js"></script>
        <script src="/frontend/js/parallax-scroll.js"></script>
        <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
        <script src="/frontend/js/element-in-view.js"></script>
        <script src="/frontend/js/main.js"></script>
    </body>
</html>