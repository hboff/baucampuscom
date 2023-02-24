<!DOCTYPE html>
<html lang="de" >
<head>
  <meta charset="UTF-8">
  <title>Baucampus</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
    <link rel="stylesheet" href="style-timeline.css">
    <link rel="stylesheet" href="/w3.css">
    <link rel="stylesheet" href="/osk-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="https://baucampus.ch/style.css">
    <link rel="stylesheet" type="text/css" href="/kontakt-style-neu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style >
 @keyframes scroll {
	 0% {
		 transform: translateX(0);
	}
	 100% {
		 transform: translateX(calc(-250px * 7));
	}
}

a:hover{
        color: white;
        text-decoration: none;

      }
      .card a{
        border: 2px solid green;
      }
.card a:hover{
        text-decoration: none;
      }
      .card button{
        border: 2px solid green;
      }
 .slider {
	 background: white;
	 box-shadow: 0 10px 20px -5px rgba(0, 0, 0, .125);
	 height: 100px;
	 margin: auto;
	 overflow: hidden;
	 position: relative;
 	 filter: grayscale(30%);

}
 .slider::before, .slider::after {
	 background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
	 content: "";
	 height: 100px;
	 position: absolute;
	 width: 200px;
	 z-index: 2;
}
 .slider::after {
	 right: 0;
	 top: 0;
	 transform: rotateZ(180deg);
}
 .slider::before {
	 left: 0;
	 top: 0;
}
 .slider .slide-track {
	 animation: scroll 40s linear infinite;
	 display: flex;
	 width: calc(250px * 14);
}
 .slider .slide {
	 height: 100px;
	 width: 250px;
}
 </style>
<style>
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  background: rgba(255, 255, 255, .9); 
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  top: 40%;
  right:20%;
  width: 20%;
  text-align: center;
w3-padding w3-display-middle w3-xxlarge" style="background: rgba(255, 255, 255, .9); color:black;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
</head>
<body id="myPage">



    <div class="w3-top w3-text-white">

        <div class="w3-bar w3-text-white" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-left"
                href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                Baucampus
            </a>

            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                Nav<i class="fa fa-bars"></i>
            </a>

            <a href="https://baucampus.com" class="w3-hide-small w3-left hover-underline-animation oskkk"
                style="padding-left:100px;">Baucampus</a>
            <a href="https://baucampus.com/kontakt" class=" w3-hide-small w3-right hover-underline-animation oskkk"
                style="padding-right:100px;">Kontakt</a>
            <a href="#5" class=" w3-hide-small w3-right hover-underline-animation oskkk">Vorteile</a>
            <a href="#4" class=" w3-hide-small w3-right hover-underline-animation oskkk">Team</a>
            <a href="#3" class=" w3-hide-small w3-right hover-underline-animation oskkk">Netzwerk</a>
            <a href="#2" class=" w3-hide-small w3-right hover-underline-animation oskkk">Vision</a>




        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="https://baucampus.ch" class="w3-bar-item w3-button" onclick="toggleFunction()">Baucampus</a>
            <a href="https://baucampus.ch" class="w3-bar-item w3-button" onclick="toggleFunction()">Ideen</a>
            <a href="https://baucampus.ch" class="w3-bar-item w3-button" onclick="toggleFunction()">Über Uns</a>
            <a href="https://baucampus.ch" class="w3-bar-item w3-button" onclick="toggleFunction()">Kontakt</a>
        </div>
    </div>
    <script>
        // Change style of navbar on scroll
        window.onscroll = function () {
            myFunction()
        };

        function myFunction() {
            var navbar = document.getElementById("myNavbar");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                navbar.className = "w3-bar" + " w3-animate-top" + " w3-osk-customs";
            } else {
                navbar.className = navbar.className.replace(" w3-animate-top w3-osk-customs", "");
            }
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function toggleFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

    </script>

    <body>
        <div class="w3-display-container w3-animate-opacity w3-center" id="1">

            <img src="pictures/8.jpg" alt="Mein Haus"
                style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
            <div id="section03" class="demo">
                <a href="#about"><span></span>Scroll</a>
            </div>
        </div>

<div id="about" class="about pt-5 mt-5">
    <div class="container pt-5">

        <div class="section-title">
            <h1>Impressum</h1>
        </div>
        <h3>Betreiber der Website:</h3>
        <p>Der Betreiber FEOS - FZCO ist ein Unternehmen in Dubai und der Hauptsitz des Unternehmens befindet sich in
            Dubai.</p>
        <p>FEOS - FZCO</p>
        <p>Building A1</p>
        <p>Dubai Silicon Oasis</p>
        <p>Dubai</p>
        <p>Vereinigte Arabische Emirate</p>
        <p>Elektronische Kontaktdaten:</p>
        <p>Telefon: 057222890636</p>
        <p>E-mail: oskar_lohse@baucampus.de</p>
        <p>Internet: www.baucampus.de</p>
        <p>General Manager Oskar Lohse</p>
        <br />
        <h3>Kontaktadresse in Deutschland:</h3>
        <p>Casimir Arlabosse</p>
        <p>Waltherstraße 15</p>
        <p>80337 München</p>
        <p>Telefon: 057222890636</p>
        <p>E-mail: arlabosse@baucampus.de</p>
        <p>Internet: www.baucampus.de</p>
        <br />
        <h3>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV</h3>
        <p>Casimir Arlabosse</p>
        <p>Waltherstraße 15</p>
        <p>80337 München</p>
    </div>
    <footer style="padding-top:2vh; color:#9fa3a7; background-color:#F5F5F8; font-size:16px;">

<div class="w3-row " style="margin-bottom:5vh;padding-left:10vh;">
    <div class="w3-third w3-container">
        <h3 style="color:#26292c;">Baucampus</h3>
        <img src="https://baucampus.ch/bilder/baucampus.png" class="w3-center" style="width:20%;"
            alt="Baucampus">

    </div>
    <div class="w3-third w3-container">
        <h3 style="color:#26292c;margin-bottom:4vh;">Kontakt</h3>
        <p style="font-size:16px;">Tel.: 05722 / 913800</p>
        <p style="font-size:16px;">Fax: 05722 / 289 0638</p>
        <p style="font-size:16px; margin-bottom:10px;">E-Mail: oskar_lohse@baucampus.ch</p>

    </div>
    <div class="w3-third w3-container">
        <h3 style="color:#26292c;">Themen</h3>
        <p><a href="https://baucampus.de">Baucampus Deutschland</a></p>
        <p><a href="https://baucampus.at">Baucampus Österreich</a></p>
        <p><a href="https://baucampus.de">Baucampus Schweiz</a></p>
        <p><a href="https://baucampus.de">Baucampus Frankreich</a></p>

    </div>
</div>


<div class="w3-row"
    style="padding-left:10vh; padding-top:2vh; padding-bottom:2vh; border-top:1px solid #EBEBED; font-size:14px;">
    <div class="w3-third w3-container">
        <a href="/impressum">Impressum</a>
        <a href="/datenschutzerklaerung">Datenschutzerklärung</a>

    </div>
    <div class="w3-third w3-container">

    </div>
    <div class="w3-third w3-container">
        <a href="https://baucampus.de">Baucampus.de</a>
        <a href="https://baucampus.at">Baucampus.at</a>
        <a href="https://baucampus.ch">Baucampus.ch</a>
        <a href="https://baucampus.de">Baucampus.fr</a>

    </div>
</div>


</footer>
</body>