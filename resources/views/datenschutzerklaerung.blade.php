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
            <h1>Datenschutzerklärung</h1>
        </div>


        <p>
            Ihr Datenschutz ist uns ausgesprochen wichtig, daher erklären wir Ihnen:
            Daten aus Mails, Faxe oder per Post versandte Schriftstücken werden bei uns nicht extrahiert um diese weiter
            zu verarbeiten.
            Wir geben keinerlei Daten aus unserem Geschäftsverkehr anderen bekannt sofern es keine gesetzliche Pflicht
            dazu gibt (Strafverfolgungsbehörden Steuerprüfung).
            Der Schriftverkehr wird bei uns nach steuer-und handelsrechtlichen Grundsätzen lediglich während der
            gesetzlichen Aufbewahrungsfrist archiviert. Nach Ablauf der gesetzlichen Fristen werden die Schriftstücke
            automatisch gelöscht bzw. vernichtet.
        </p>
        <p>

            Verantwortlicher für die Datenverarbeitung personenbezogener Daten bei Nutzung dieser Website ist Casimir Arlabosse Waltherstraße 15,80337 München, Telefon: 057222890636, E-mail: arlabosse@baucampus.de
            Erfassung Anonymisierte Daten beim Besuch unserer Website
            Bei der bloß informatorischen Nutzung unserer Website, also wenn Sie sich nicht registrieren oder uns
            anderweitig Informationen übermitteln, erheben wir nur solche Daten, die Ihr Browser an unseren Server
            übermittelt (sog. „Server-Logfiles“). Wenn Sie unsere Website aufrufen, erheben wir die folgenden Daten, die
            für uns technisch erforderlich sind, um Ihnen die Website anzuzeigen:
            • Unsere besuchte Website
            • Datum und Uhrzeit zum Zeitpunkt des Zugriffes
            • Menge der gesendeten Daten in Byte
            • Quelle/Verweis, von welchem Sie auf die Seite gelangten
            • Verwendeter Browser
            • Verwendetes Betriebssystem
            • Verwendete IP-Adresse (ggf.: in anonymisierter Form)
            Die Verarbeitung erfolgt gemäß Art. 6 Abs. 1 lit. f DSGVO auf Basis unseres berechtigten Interesses an der
            Verbesserung der Stabilität und Funktionalität unserer Website. Eine Weitergabe oder anderweitige Verwendung
            der Daten findet nicht statt. Wir behalten uns allerdings vor, die Server-Logfiles nachträglich zu
            überprüfen, sollten konkrete Anhaltspunkte auf eine rechtswidrige Nutzung hinweisen.
        </p>
        <p>

            3) Cookies
        </p>

        <p>
            Um den Besuch unserer Website attraktiv zu gestalten und die Nutzung bestimmter Funktionen zu ermöglichen,
            verwenden wir auf verschiedenen Seiten sogenannte Cookies. Hierbei handelt es sich um kleine Textdateien,
            die auf Ihrem Endgerät abgelegt werden. Einige der von uns verwendeten Cookies werden nach dem Ende der
            Browser-Sitzung, also nach Schließen Ihres Browsers, wieder gelöscht (sog. Sitzungs-Cookies). Andere Cookies
            verbleiben auf Ihrem Endgerät und ermöglichen uns oder unseren Partnerunternehmen (Cookies von
            Drittanbietern), Ihren Browser beim nächsten Besuch wiederzuerkennen (persistente Cookies). Werden Cookies
            gesetzt, erheben und verarbeiten diese im individuellen Umfang bestimmte Nutzerinformationen wie Browser-
            und Standortdaten sowie IP-Adresswerte. Persistente Cookies werden automatisiert nach einer vorgegebenen
            Dauer gelöscht, die sich je nach Cookie unterscheiden kann.
            Sofern durch einzelne von uns implementierte Cookies auch personenbezogene Daten verarbeitet werden, erfolgt
            die Verarbeitung gemäß Art. 6 Abs. 1 lit. f DSGVO zur Wahrung unserer berechtigten Interessen an der
            bestmöglichen Funktionalität der Website sowie einer kundenfreundlichen und effektiven Ausgestaltung des
            Seitenbesuchs.
            Wir arbeiten unter Umständen mit Werbepartnern zusammen, die uns helfen, unser Internetangebot für Sie
            interessanter zu gestalten. Zu diesem Zweck werden für diesen Fall bei Ihrem Besuch unserer Website auch
            Cookies von Partnerunternehmen auf Ihrer Festplatte gespeichert (Cookies von Drittanbietern). Wenn wir mit
            vorbenannten Werbepartnern zusammenarbeiten, werden Sie über den Einsatz derartiger Cookies und den Umfang
            der jeweils erhobenen Informationen innerhalb der nachstehenden Absätze individuell und gesondert
            informiert.
            Bitte beachten Sie, dass Sie Ihren Browser so einstellen können, dass Sie über das Setzen von Cookies
            informiert werden und einzeln über deren Annahme entscheiden oder die Annahme von Cookies für bestimmte
            Fälle oder generell ausschließen können. Jeder Browser unterscheidet sich in der Art, wie er die
            Cookie-Einstellungen verwaltet. Diese ist in dem Hilfemenü jedes Browsers beschrieben, welches Ihnen
            erläutert, wie Sie Ihre Cookie-Einstellungen ändern können. Diese finden Sie für die jeweiligen Browser
            unter den folgenden Links:
            Internet Explorer:
            https://support.microsoft.com/de-de/help/17442/windows-internet-explorer-delete-manage-cookies
            Firefox: https://support.mozilla.org/de/kb/cookies-erlauben-und-ablehnen
            Chrome: https://support.google.com/chrome/answer/95647?hl=de&hlrm=en
            Safari: https://support.apple.com/kb/ph21411?locale=de_DE
            Opera: https://help.opera.com/en/latest/web-preferences/#cookies
            Bitte beachten Sie, dass bei Nichtannahme von Cookies die Funktionalität unserer Website eingeschränkt sein
            kann.
        </p>
        <p>
            4) Kontaktaufnahme
        </p>
        <p>
            Im Rahmen der Kontaktaufnahme mit uns (z.B. per Kontaktformular oder E-Mail) werden personenbezogene Daten
            erhoben. Welche Daten im Falle eines Kontaktformulars erhoben werden, ist aus dem jeweiligen Kontaktformular
            ersichtlich. Diese Daten werden ausschließlich zum Zweck der Beantwortung Ihres Anliegens bzw. für die
            Kontaktaufnahme und die damit verbundene technische Administration gespeichert und verwendet.
            Rechtsgrundlage für die Verarbeitung der Daten ist unser berechtigtes Interesse an der Beantwortung Ihres
            Anliegens gemäß Art. 6 Abs. 1 lit. f DSGVO. Zielt Ihre Kontaktierung auf den Abschluss eines Vertrages ab,
            so ist zusätzliche Rechtsgrundlage für die Verarbeitung Art. 6 Abs. 1 lit. b DSGVO. Ihre Daten werden nach
            abschließender Bearbeitung Ihrer Anfrage gelöscht, dies ist der Fall, wenn sich aus den Umständen entnehmen
            lässt, dass der betroffene Sachverhalt abschließend geklärt ist und sofern keine gesetzlichen
            Aufbewahrungspflichten entgegenstehen.
        </p>
    </div>
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