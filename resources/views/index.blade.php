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
                <a href="#vision"><span></span>Scroll</a>
            </div>
        </div>
<div id="vision" class="container" style="padding-top:3%;"><h1>Baucampus - Gemeinsam in eine bessere Zukunft</h1></div>
        <div class="w3-container"
            style="height:100vh;display: flex;align-items: center;justify-content: center; margin-left:15%!important;margin-right:15%!important">
            <div class="w3-row">
                <div class="w3-half w3-container">
                    <img src="pictures/9.jpg" alt="Mein Haus"
                        style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
                </div>
                <div class="w3-half w3-container">
                            <p>Baucampus - Gemeinsam in eine bessere Zukunft</p>

                    <h2 style="border-bottom:solid 5px #c4c4c4; font-family:Montserrat,sans-serif;">Kunden finden
                        Experten - Experten finden Kunden</h2>
                    <p>Wir glauben an die Kraft der Zusammenarbeit und sind der Meinung, dass wir gemeinsam mehr
                        erreichen können, als wir es alleine jemals könnten. Außerdem setzen wir auf Qualität: Wir
                        arbeiten nur mit Experten zusammen, die auf ihrem Gebiet qualifiziert und erfahren sind.</p>
                </div>
            </div>
        </div>

        <!-- partial:index.partial.html -->
        <div id="timeline" class="timeline">
            <div class="container-timeline">
                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInLeft">
                        <div class="timeline-img-header">
                            <img src="pictures/1.jpg" style="width: 100%;" alt="">
                            <h2>Über Uns</h2>
                        </div>
                        <div class="date">Step 1</div>
                        <p>Baucampus betreibt Webseiten im deutschsprachigen Raum zur Akquise von Aufträgen in den Bereichen:</p>
                        <ul>
                            <li>Baubegleitende Qualitätssicherung</li>
                            <li>Bauschäden</li>
                            <li>Energieberatung</li>
                            <li>Hauskaufberatung</li>
                            <li>Immobilienbewertung</li>
                            <li>Schimmelpilzschäden</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInRight">
                        <div class="timeline-img-header">
                            <img src="pictures/2.jpg" style="width: 100%;" alt="">
                            <h2>Card Title</h2>
                        </div>
                        <div class="date">Step 2</div>
                        <p>Baucampus bietet seinen Partnern:</p>
                        <ul>
                            <li>professioneller Internetauftritt auf Baucampus -  Webseite und regionale Sachverständigen - Webseiten</li>
                            <li>umfangreiches Unterlagenpaket erleichtert den Einstieg in das Baucampus-Netzwerk und das Sachverständigenwesen</li>

                        </ul>
                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInLeft">
                        <div class="timeline-img-header">
                            <img src="pictures/3.jpg" style="width: 100%;" alt="">
                            <h2>Card Title</h2>
                        </div>
                        <div class="date">Step 3</div>
                        <p>Netzwerkgedanke nimmt eine zentrale Stellung bei Baucampus ein und wird gelebt</p>
                        <ul>
                            <li>Netzwerk aus Experten</li>
                            <li>Hilfestellung bei Sonderfällen in der Gutachtenbearbeitung</li>
                            <li>gemeinsame Schulungen/Workshops</li>
                            <li>Servicepartner</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInRight">
                        <div class="timeline-img-header">
                            <img src="pictures/4.jpg" style="width: 100%;" alt="">
                            <h2>Card Title</h2>
                        </div>
                        <div class="date">Step 4</div>
                        <p>Kundenbindung/Kundenzufriedenheit</p>
                        <ul>
                            <li>kompetente, kundenorientierte Vorort-Beratung</li>
                            <li>zügige Bearbeitung der Gutachtenaufträge</li>
                            <li>kundenfreundliche, überschaubare Festpreispolitik</li>
                        </ul>
                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInLeft">
                        <div class="timeline-img-header">
                            <img src="pictures/5.jpg" style="width: 100%;" alt="">
                            <h2>Card Title</h2>
                        </div>
                        <div class="date">Step 5</div>
                        <p>Baucampus - wie wir arbeiten. Das Zusammenspiel von Bausachverständigen und Kunden ist uns wihtig. Daher treten die Kunden direket mit unseren Partnern in Kontakt, per Telefon oder E-mail. Die Partner nehmen die Aufträge selbst an und bieten ihre Leistungen dem Kunden selbständig an. Es gibt keine Mindestauftragsverpflichtung. Auftragsannahme, die terminliche Festlegung und ihre Auftragsauslastung bleiben in ihrer Hand.</p>
                    </div>
                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInRight">
                        <div class="timeline-img-header">
                            <img src="pictures/6.jpg" style="width: 100%;" alt="">
                            <h2>Card Title</h2>
                        </div>
                        <div class="date">Step 6</div>
                        <p>Was wir brauche. Ihr professioneller Internetauftritt mit Baucampus ist leicht zu verwirklichen: Wir benötigen</p>
                            <ul>
                                <li>ein Foto von Ihnen </li>
                                <li>eine Telefonnummer</li>
                                <li>Lebenslauf</li>
                                <li>fachliche Eignung</li>
                                <li>Zustimmung zur Veröffentlichung ihrer Daten auf Baucampus</li>
                            </ul>
                        <p>Sie erhalten dann umgehend eine personalisierte Baucampus E-mailadresse und die Webseiten in ihrer Region werden mit ihren Kontaktdaten versehen</p>
                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInLeft">
                        <div class="timeline-img-header">
                            <img src="pictures/7.jpg" style="width: 100%;" alt="">
                            <h2>Card Title</h2>
                        </div>
                        <div class="date">Step 7</div>
                        <p>Honorierung Für die Honorierung unserer Leistungen stehen Ihnen 2 Modelle zur Verfügung (A) 15%, (B) 400€</p>
                    </div>
                </div>
            </div>
        </div>
  <!-- Grid -->
  <div class="w3-row-padding container-plans" id="plans">
    <div class="w3-center">
       <h3>Werden Sie Teil der Baucampus-Expertengruppe und starten Sie jetzt!</h3>
        <p>Werden Sie Teil unseres exklusiven Expertennetzwerks und profitieren Sie von einer risikolosen und fairen Partnerschaft. Treten Sie einer starken Gemeinschaft bei, die geballtes Fachwissen und modernste Geschäftsstrukturen vereint. Seien Sie Teil einer Elite-Gruppe von Bausachverständigen und sichern Sie sich jetzt schnell Ihren Platz in unserem stetig wachsenden Netzwerk. Werden Sie Teil der besten und erweitern Sie Ihr Netzwerk! (Schließen Sie sich den Besten an, werden Sie Teil der Baucampus-Expertengruppe und starten Sie jetzt!")
</p>
    <h3>Partnerschafts-Modelle</h3>
    <p>Wählen Sie das Partnerschafts-Modell, das am besten zu Ihren Bedürfnissen passt.</p>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-grey w3-xlarge w3-padding-32">Baucampus Starter</li>
        <li class="w3-padding-16"><b>Aufnahme in das Baucampus Gutachterverzeichnis</li>
        <li class="w3-padding-16"><b>Listung als Servicepartner(Baucampus intern)</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">kostenlos</h2>
          <span class="w3-opacity"></span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom" style="padding-right:10px; padding-left:10px;">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-grey w3-xlarge w3-padding-32">Baucampus Classic</li>
        <li class="w3-padding-16"><b>Zugang zu unserem Netzwerk von Bausachverständigen, Kunden und Partnern</li>
        <li class="w3-padding-16"><b>Zugang zur Baucampus-Plattform mit Tools und Ressourcen zur Geschäftsverbesserung</li>
        <li class="w3-padding-16"><b>Regelmäßige Schulungen und Unterstützung in des Bauwesens</li>
        <li class="w3-padding-16"><b>Persönlicher Support und Betreuung</li>
        <li class="w3-padding-16"><b>Feste monatliche Pauschale</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">400 €</h2>
          <span class="w3-opacity">pro Monat</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-grey w3-xlarge w3-padding-32">Baucampus Flex</li>
        <li class="w3-padding-16"><b>Aufnahme in das Baucampus Gutachterverzeichnis</li>
        <li class="w3-padding-16"><b>Zugang zu Vorlagen & Datenbanken</li>
        <li class="w3-padding-16"><b>Professionelles Online-Marketing</li>
        <li class="w3-padding-16"><b>Regionale Webseite im Internet</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"> 15%</h2>
          <span class="w3-opacity">Umsatzbeteiligung</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>


        <div id="vision" class="w3-container"
            style="height:100vh;display: flex;align-items: center;justify-content: center; margin-left:15%!important;margin-right:15%!important">
            <div class="w3-row">
                <div class="w3-half w3-container">
                    <img src="pictures/13.jpg" alt="Mein Haus"
                        style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
                </div>
                <div class="w3-half w3-container">

                    <h2 style="border-bottom:solid 5px #c4c4c4; font-family:Montserrat,sans-serif;">Qualität hat ein Gesicht</h2>
                    <p>Baucampus trägt dazu bei, die Zusammenarbeit von Experten effizienter und effektiver zu gestalten. Wenn Sie ein Experte auf Ihrem Gebiet sind, ermutigen wir Sie, sich uns anzuschließen!</p>
                </div>
            </div>
        </div>
        <video id="video" width="100%" controls>
            <source src="alterminddesktop.mp4" type="video/mp4">
            Your browser does not support HTML video.
        </video>









    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Laravel 9 Contact US Form Example - ItSolutionStuff.com</h3>
                    </div>
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                            {{ csrf_field() }}                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Subject:</strong>
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Message:</strong>
                                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div id="map" style="width:100%; height:400px;" class="mt-5"></div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>
        <script>
            var map = L.map('map').setView([51.165691, 10.451526], 5);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

        </script>

<!-- Slider Grid -->
<h2>Kooperationspartner</h2>
<div class="slider">
	<div class="slide-track">
		<div class="slide">
			<a href="https://bauherrenverband.com/" title="Der Bauherrenverband"><img src="https://gutachterverband.com/bauherrenverband-small.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://eigenheimverband.de/" title="Eigenheimverband"><img src="https://gutachterverband.com/eigenheimverband.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://gutachterverband.com/" title="Der Gutachterverband"><img src="https://gutachterverband.com/gutachterverband.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://architekturinstitut.com/" title="Architekturinstitut"><img src="https://gutachterverband.com/architekturinstitut.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://mein-haus.eu/" title="Mein Haus"><img src="https://gutachterverband.com/mein-haus.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://baucampus.de/" title="Baucampus"><img src="https://gutachterverband.com/baucampus.png" height="100" width="250" alt="" /></a>
		</div>

		<div class="slide">
			<a href="https://premiumhandwerker.com/" title="Der Premiumhandwekerer"><img src="https://gutachterverband.com/premiumhandwerker.png" height="100" width="250" alt="" /></a>
		</div>

		<div class="slide">
			<a href="https://bauherrenverband.com/" title="Der Bauherrenverband"><img src="https://gutachterverband.com/bauherrenverband-small.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://eigenheimverband.de/" title="Eigenheimverband"><img src="https://gutachterverband.com/eigenheimverband.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://gutachterverband.com/" title="Der Gutachterverband"><img src="https://gutachterverband.com/gutachterverband.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://architekturinstitut.com/" title="Architekturinstitut"><img src="https://gutachterverband.com/architekturinstitut.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://mein-haus.eu/" title="Mein Haus"><img src="https://gutachterverband.com/mein-haus.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://baucampus.de/" title="Baucampus"><img src="https://gutachterverband.com/baucampus.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://premiumhandwerker.com/" title="Der Premiumhandwekerer"><img src="https://gutachterverband.com/premiumhandwerker.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://bauherrenverband.com/" title="Der Bauherrenverband"><img src="https://gutachterverband.com/bauherrenverband-small.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://eigenheimverband.de/" title="Eigenheimverband"><img src="https://gutachterverband.com/eigenheimverband.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://gutachterverband.com/" title="Der Gutachterverband"><img src="https://gutachterverband.com/gutachterverband.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://architekturinstitut.com/" title="Architekturinstitut"><img src="https://gutachterverband.com/architekturinstitut.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://mein-haus.eu/" title="Mein Haus"><img src="https://gutachterverband.com/mein-haus.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://baucampus.de/" title="Baucampus"><img src="https://gutachterverband.com/baucampus.png" height="100" width="250" alt="" /></a>
		</div>
		<div class="slide">
			<a href="https://premiumhandwerker.com/" title="Der Premiumhandwekerer"><img src="https://gutachterverband.com/premiumhandwerker.png" height="100" width="250" alt="" /></a>
		</div>
	</div>
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
                    <a href="">Impressum</a>
                    <a href="">Datenschutzerklärung</a>

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

        <!-- partial -->

    </body>
    <script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script><script  src="script.js"></script>

</body>
</html>
