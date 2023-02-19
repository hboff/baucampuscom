<!DOCTYPE html>
<html lang="en" >
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

        <div id="vision" class="w3-container w3-padding-64"
            style="height:100vh;display: flex;align-items: center;justify-content: center; margin-left:15%!important;margin-right:15%!important">
            <div class="w3-row">
                <div class="w3-half w3-container">
                    <img src="pictures/9.jpg" alt="Mein Haus"
                        style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
                </div>
                <div class="w3-half w3-container">

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
            <div class="container">
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
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Pricing Plans</h3>
      <p>Choose a pricing plan that fits your needs.</p>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>


        <div id="vision" class="w3-container w3-padding-64"
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
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script><script  src="script.js"></script>

</body>
</html>
