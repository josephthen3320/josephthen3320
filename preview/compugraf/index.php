<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>compugraf</title>

    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css" type="text/css">
</head>

<style>
    body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }
    html { scroll-behavior: smooth; }

    /* Create a Parallax Effect */
    .bgimg-2, .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        /* Set the background color to the desired solid color */
        background-color: rgba(255, 255, 255, 0.8); /* Change this to the desired color and opacity */

        /* Set the background image to the desired image */
        background-image: url("img/bg1.jpg"); /* Change this to the filename of your image */

        /* Set the background position to center */
        background-position: center;

        /* Set the background size to cover */
        background-size: cover;

        /* Set the background attachment to fixed to enable parallax scrolling */
        background-attachment: fixed;

        /* Set the height of the element to 100% of the viewport height */
        height: 100vh;

        /* Create a gradient overlay that fades out the solid color towards the right */
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%), url("img/bg1.jpg"); /* Change this to the filename of your image */
    }


    /* Second image (Portfolio) */
    .bgimg-2 {
        background-color: black;
        min-height: 25%;
    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: linear-gradient(to right, #897ff3, #55b7f7);;
        min-height: 25%;
    }
</style>



<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="w3-bar-item w3-button">HOME</a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
            <i class="fa fa-search"></i>
        </a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
        <a href="#" class="w3-bar-item w3-button">SEARCH</a>
    </div>
</div>


<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container " id="home" style="min-height: 100vh;">
    <div class=" w3-hide-small w3-hide-medium">
        <div class="w3-display-left w3-display-container w3-text-black w3-twothird w3-border-black w3-padding-64" style="white-space:nowrap;">
            <div class="w3-display-middle" style="line-height: 400%;">
                <span class="w3-center w3-animate-left w3-xlarge" style="font-weight: 500;">THIS IS ME</span><br>
                <span class="w3-center w3-text-white w3-animate-opacity" style="font-weight: 600; font-size: 64px">compu<span class="w3-text-red">graf</span></span><br>
                <span class="w3-center w3-animate-opacity w3-medium" style="font-weight: 300;">A curious mind lost in code and logic, I am passionate about immersive technology and education<br> - also coffee!</span><br>
                <div class="w3-xlarge w3-section">
                    <a href="https://linkedin.com/in/josephthenara" target="_blank" class="logo-linkedin"><i class="fa-brands fa-linkedin w3-hover-opacity"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://instagram.com/josephthen3320" target="_blank" class="logo-instagram-grad"><i class="fa-brands fa-instagram"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.youtube.com/channel/UCfNHTA6gx2Q1acF8klhU9GQ" target="_blank" class="logo-youtube"><i class="fa-brands fa-youtube w3-hover-opacity"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://orcid.org/0000-0002-7584-0245" target="_blank" class="logo-orcid"><i class="fa-brands fa-orcid w3-hover-opacity"></i></a>
                </div>
                <a href="#about" class="w3-button w3-padding-large w3-hover-shadow" style="line-height: 100%; background-image: linear-gradient(to right, #897ff3, #55b7f7);"><span class="w3-large w3-text-white" style="font-weight: 500;"><b>LEARN MORE</b></span></a>
            </div>
        </div>
        <div class="w3-display-right w3-display-container w3-text-black w3-half" style="height:100%;">
            <div class="w3-display-bottommiddle">
                <!--img src="img/placeholder/blanket.png"-->
                <img src="img/me/jt-profile-main-alt.png" width="125%">
            </div>
        </div>
    </div>

    <div class="w3-hide-large w3-container w3-display-middle" style="min-height: 100vh">
        <div class="w3-container w3-text-black w3-display-middle">
            <span class="w3-center w3-animate-left w3-xlarge" style="font-weight: 500;">THIS IS ME</span><br>
            <span class="w3-center w3-animate-opacity" style="font-weight: 600; font-size: 84px; line-height: 110%">JOSEPH THEN</span><br>
            <span class="w3-center w3-animate-opacity w3-medium" style="font-weight: 300;">A curious mind lost in code and logic, I am passionate about immersive technology and education - also coffee!</span><br>
            <div class="w3-xxlarge w3-section w3-center">
                <a href="https://linkedin.com/in/josephthenara" target="_blank" class="logo-linkedin"><i class="fa-brands fa-linkedin w3-hover-opacity"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://instagram.com/josephthen3320" target="_blank" class="logo-instagram-grad"><i class="fa-brands fa-instagram"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.youtube.com/channel/UCfNHTA6gx2Q1acF8klhU9GQ" target="_blank" class="logo-youtube"><i class="fa-brands fa-youtube w3-hover-opacity"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://orcid.org/0000-0002-7584-0245" target="_blank" class="logo-orcid"><i class="fa-brands fa-orcid w3-hover-opacity"></i></a>
            </div>
            <br><br><br><br>
            <div class="w3-center">
                <a href="#about" class="w3-button w3-padding-16 w3-hover-shadow" style="width: 100%; line-height: 100%; background-image: linear-gradient(to right, #897ff3, #55b7f7);">
                    <span class="w3-large w3-text-white" style="font-weight: 500;">
                        <b>LEARN MORE</b>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!--div class="w3-display-bottommiddle w3-center w3-text-white">
        <a href="#about" style="text-decoration: none;"><span class="w3-center w3-animate-opacity" style="font-weight: 100;">Learn More</span><br><i class="fa-solid fa-angles-down"></i></a><br><br><br>
    </div-->
</div>




</body>



</html>