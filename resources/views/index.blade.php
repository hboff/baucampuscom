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
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="https://baucampus.com" class="w3-bar-item w3-button" onclick="toggleFunction()">Baucampus</a>
            <a href="https://baucampus.com/kontakt" class="w3-bar-item w3-button" onclick="toggleFunction()">Kontakt</a>
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

        <div id="vision" class="container-timeline mb-5 pb-5 mt-5 pt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 d-flex">
                    <img src="pictures/9.jpg" alt="Mein Haus"
                        style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
                </div>
                <div class="col-sm-12 col-md-6 d-flex flex-column">
                    <h2 class="mt-0 pt-0" style="border-bottom:solid 5px #c4c4c4; font-family:Montserrat,sans-serif;">Kunden finden Experten - Experten finden Kunden</h2>
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

                    <div class="timeline-content timeline-card pb-3 js--fadeInLeft">
                        <div class="timeline-img-header">
                            <img src="pictures/step-1.png" style="width: 100%;" alt="">
                            <h2 class="display-3">Über Uns</h2>
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

                    <div class="timeline-content timeline-card pb-3 js--fadeInRight">
                        <div class="timeline-img-header">
                            <img src="pictures/step-2.png" style="width: 100%;" alt="">
                            <h2 class="display-3">Marketing</h2>
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

                    <div class="timeline-content timeline-card pb-3 js--fadeInLeft">
                        <div class="timeline-img-header">
                            <img src="pictures/step-3.jpg" style="width: 100%;" alt="">
                            <h2 class="display-3">Netzwerk</h2>
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

                    <div class="timeline-content timeline-card pb-3 js--fadeInRight">
                        <div class="timeline-img-header">
                            <img src="pictures/step-4.jpg" style="width: 100%;" alt="">
                            <h2 class="display-3">Kundenzufriedenheit</h2>
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

                    <div class="timeline-content timeline-card pb-3 js--fadeInLeft">
                        <div class="timeline-img-header">
                            <img src="pictures/step-5.jpg" style="width: 100%;" alt="">
                            <h2 class="display-3">Selbständigkeit</h2>
                        </div>
                        <div class="date">Step 5</div>
                        <p>Baucampus - wie wir arbeiten. Das Zusammenspiel von Bausachverständigen und Kunden ist uns wichtig. Daher treten die Kunden direket mit unseren Partnern in Kontakt, per Telefon oder E-mail. Die Partner nehmen die Aufträge selbst an und bieten ihre Leistungen dem Kunden selbständig an. Es gibt keine Mindestauftragsverpflichtung. Auftragsannahme, die terminliche Festlegung und ihre Auftragsauslastung bleiben in ihrer Hand.</p>
                    </div>
                </div>

                <div class="timeline-item">

                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card pb-3 js--fadeInRight">
                        <div class="timeline-img-header">
                            <img src="pictures/step-6.jpg" style="width: 100%;" alt="">
                            <h2 class="display-3">Informationen</h2>
                        </div>
                        <div class="date">Step 6</div>
                        <p>Was wir brauchen. Ihr professioneller Internetauftritt mit Baucampus ist leicht zu verwirklichen: Wir benötigen</p>
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

                
            </div>
        </div>
  <!-- Grid -->

  
  <div class="container-timeline mb-5 pb-5 mt-5 pt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 d-flex">
                    <img src="pictures/teil-baucampus.jpg" alt="Mein Haus"
                        style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
                </div>
                <div class="col-sm-12 col-md-6 d-flex flex-column">
                    <h2 class="mt-0 pt-0" style="border-bottom:solid 5px #c4c4c4; font-family:Montserrat,sans-serif;">Werde Teil von Baucampus</h2>
                    <p>Werden Sie Teil unseres exklusiven Expertennetzwerks und profitieren Sie von einer risikolosen und fairen Partnerschaft. Treten Sie einer starken Gemeinschaft bei, die geballtes Fachwissen und modernste Geschäftsstrukturen vereint. Seien Sie Teil einer Elite-Gruppe von Bausachverständigen und sichern Sie sich jetzt schnell Ihren Platz in unserem stetig wachsenden Netzwerk. Werden Sie Teil der besten und erweitern Sie Ihr Netzwerk! (Schließen Sie sich den Besten an, werden Sie Teil der Baucampus-Expertengruppe und starten Sie jetzt!")
</p>
                </div>
            </div>
        </div>
<div style="background-color:#363636; padding-bottom: 5%;">
  <div class="container-plans" id="plans">
   
<div class="w3-center pb-5 pt-5">
    <h2 class="border-bottom:solid 5px #c4c4c4; text-white">Partnerschafts-Modelle</h2>
    <p>Wählen Sie das Partnerschafts-Modell, das am besten zu Ihren Bedürfnissen passt.</p>
    
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-4 d-flex">
    <div class="col card mb-5">
  <div class="card-header text-white text-center p-4 text-uppercase" style="background-color:#4162A4">
   <h3>Baucampus Starter</h3>
  </div><div class="card-body">
  <ul class="list-group list-group-flush text-center text-dark pb-5">
    <li class="list-group-item">Aufnahme in das Baucampus Gutachterverzeichnis</li>
    <hr>
    <li class="list-group-item">Listung als Servicepartner(Baucampus intern)</li>
  </ul>
  <br>
  <div class="position-absolute bottom-0 start-50 translate-middle-x">
  <p class="text-dark text-center"><b>kostenlos</b><p>
  <a href="#" class="btn btn-primary">Sign Up</a>
    </div>
    </div>
</div>
    </div>
   
    <div class="col-sm-12 col-md-4 d-flex">
    <div class="col card mb-5">
    <div class="card-header text-white text-center p-4 text-uppercase" style="background-color:#466AB0">
  <h3>Baucampus Classic</h3>
  </div><div class="card-body">
  <ul class="list-group list-group-flush text-center pb-5">
    <li class="list-group-item">Zugang zu unserem Netzwerk von Bausachverständigen, Kunden und Partnern</li>
    <hr>
    <li class="list-group-item">Zugang zur Baucampus-Plattform mit Tools und Ressourcen zur Geschäftsverbesserung</li>
    <hr>
    <li class="list-group-item">Regelmäßige Schulungen und Unterstützung in des Bauwesens</li>
    <hr>
    <li class="list-group-item">Persönlicher Support und Betreuung</li>
    <hr>
    <li class="list-group-item">Feste monatliche Pauschale</li>
  </ul>
  <br>
  <div class="position-absolute bottom-0 start-50 translate-middle-x">
  <p class="text-dark text-center"><b> 400 €</b> pro Monat<p>
  <a href="#" class="btn btn-primary">Sign Up</a>
    </div>
    </div>
</div>
    </div>

    <div class="col-sm-12 col-md-4 d-flex">
    <div class="col card mb-5">
    <div class="card-header text-white text-center p-4 text-uppercase" style="background-color:#4162A4">
  <h3>Baucampus Flex</h3>
  </div><div class="card-body">
  <ul class="list-group list-group-flush text-center pb-5">
    <li class="list-group-item">Aufnahme in das Baucampus Gutachterverzeichniso</li>
    <hr>
    <li class="list-group-item">Zugang zu Vorlagen & Datenbanken</li>
    <hr>
    <li class="list-group-item">Professionelles Online-Marketing</li>
    <hr>
    <li class="list-group-item">Regionale Webseite im Internet</li>
  </ul>
  <br>
  <div class="position-absolute bottom-0 start-50 translate-middle-x">
  <p class="text-dark text-center"><b>15%</b> Umsatzbeteiligung<p>
  <a href="#" class="btn btn-primary">Sign Up</a>
    </div>
    </div>
</div>
    </div>
    </div>

    </div>
    </div>
    </div>

    <div class="container" style="padding-top:3%;"><h2 class="display-2">Baucampus - Gemeinsam in eine bessere Zukunft</h2></div>
    <div class="container-timeline mb-5 pb-5 mt-5 pt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 d-flex">
                    <img src="pictures/13.jpg" alt="Mein Haus"
                        style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
                </div>
                <div class="col-sm-12 col-md-6 d-flex flex-column">
                    <h2 class="mt-0 pt-0" style="border-bottom:solid 5px #c4c4c4; font-family:Montserrat,sans-serif;">Qualität hat ein Gesicht</h2>
                    <p>Baucampus trägt dazu bei, die Zusammenarbeit von Experten effizienter und effektiver zu gestalten. Wenn Sie ein Experte auf Ihrem Gebiet sind, ermutigen wir Sie, sich uns anzuschließen!</p>
                </div>
            </div>
        </div>
        
        <video id="video" width="100%" controls>
            <source src="baucampus-commercial.mp4" type="video/mp4">
            Your browser does not support HTML video.
        </video>


    <div class="container-timeline container-fluid px-5 my-5">
  <div class="row justify-content-center">
      <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
        <div class="card-body p-0">
          <div class="row g-0">
            <div class="col-4 d-flex bg-image"><img src="pictures/kontakt.jpg" alt="" class="img-fluid" ></div>
            <div class="col-8 p-5">
              
                <h3 class="text-center">Kontakt</h3>
                
              

              <!-- * * * * * * * * * * * * * *
          // * * SB Forms Contact Form * *
          // * * * * * * * * * * * * * * *

          // This form is pre-integrated with SB Forms.
          // To make this form functional, sign up at
          // https://startbootstrap.com/solution/contact-forms
          // to get an API token!
          -->

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
                                        <p>Vorname:</p>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Nachname:</p>
                                        <input type="text" name="email" class="form-control" placeholder="E-Mail" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Telefonnummer:</p>
                                        <input type="text" name="phone" class="form-control" placeholder="Telefonnummer" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>E-mail:</p>
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
                                        <p>Nachricht:</p>
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
    </div>
  </div>
</div>
<!-- Slider Grid -->

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

        <div id="map" style="width:100%; height:400px;"></div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>
  <script>
      var map = L.map('map').setView([51.165691, 10.451526], 5);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
      }).addTo(map);

      var coords = [
        [52.261104, 9.048896],
        [52.288105, 8.916885],
        [52.261104, 9.048896],
        [52.265873, 6.792405],
        [51.340632, 12.374733],
        [51.680409, 7.815197],
        [53.619591, 10.867266],
        [47.767274, 11.157493],
        [50.011974, 8.712391],
        [50.668124, 7.585046],
        [52.517037, 13.388860],
        [50.992930, 7.127738],
        [50.555420, 9.975479],
        [49.301781, 8.163521]
      ];

      for (var i = 0; i < coords.length; i++) {
        L.marker([coords[i][0], coords[i][1]]).addTo(map);
      }
    </script>






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
                    <p style="font-size:16px; margin-bottom:10px;">E-Mail: kontakt@baucampus.com</p>

                </div>
                <div class="w3-third w3-container">
                    <h3 style="color:#26292c;">Themen</h3>
                    <p><a href="https://baucampus.de">Baucampus Deutschland</a></p>
                    <p><a href="https://baucampus.at">Baucampus Österreich</a></p>
                    <p><a href="https://baucampus.ch">Baucampus Schweiz</a></p>
                    <p><a href="https://baucampus.fr">Baucampus Frankreich</a></p>
                    <p><a href="https://baucampus.be">Baucampus Belgien</a></p>
                    <p><a href="https://baucampus.nl">Baucampus Niederlande</a></p>
                    <p><a href="https://baucampus.es">Baucampus Spanien</a></p>
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
