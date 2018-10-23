<?php 
// header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
// header("Pragma: no-cache"); // HTTP 1.0.
// header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");


session_start();
$counter_name = "counter.txt";
$iplogfile = 'logs/ip-address-mainsite.html';

// Check if a text file exists.
// If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
- $f = fopen($counter_name, "w");
- fwrite($f,"0");
- fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
- $_SESSION['hasVisited']="yes";
- $counterVal++;
- $f = fopen($counter_name, "w");
- fwrite($f, $counterVal);
- fclose($f);

    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $webpage = $_SERVER['SCRIPT_NAME'];
    $timestamp = date('d/m/Y h:i:s');
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $fp = fopen($iplogfile, 'a+');
    chmod($iplogfile, 0777);
    fwrite($fp, '['.$timestamp.']: -- '.$ipaddress.'  -- '.$webpage.' -- '.$browser. "\n<br><br>");
    fclose($fp);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <title>Hackathon</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css?ver=1.1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <!-- Animate css -->
    <!-- <link rel="stylesheet" href="node_modules/animate.css/animate.min.css"> -->
    <link rel="stylesheet" href="node_modules/css3-animate-it/css/animations.css">
</head>




<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding">
                    <a class="logo" href="index.html">

                        <!-- logo image  -->
                        <img src="assets/images/logo.png" alt="Logo">

                        <!-- Hackathon 2018 -->
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                    <!-- navigation menu -->
                    <li class="active"><a data-scroll href="#about">Problemática</a></li>
                    <li><a data-scroll href="#premios">Premios</a></li>
                    <li><a data-scroll href="#schedule">Cronograma</a></li>
                    <li><a data-scroll href="#faq">¿Preguntas?</a></li>
                    <li><a data-scroll href="#partner">COLABORADORES</a></li>
                    <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->
                    <!-- <li><a data-scroll href="#photos">Photos</a></li> -->

                </ul>
            </div>
        </div><!-- /.container -->
    </nav>

    <header id="site-header" class="site-header valign-center">
        <div class="intro">

            <h2>26 de Octubre, 2018 / <a class='eventLocation' data-scroll href="#location">Salon de eventos: OSDE</a></h2>

            <h1>Basurales Urbanos</h1>

            <p>Co-creando Soluciones</p>

            <p>
                <a class="btn btn-white" target="_blank" href="https://goo.gl/forms/nffilMgAMlWcI3Nj1">Inscribite </a>
            </p>
            <p>
                <a class='bases' href="assets/files/BasesyCondiciones.pdf">Bases y Condiciones</a>
            </p>
        </div>
    </header>

    <section id="about" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <h3 class="section-title">Problematica</h3>

                    <p>
                        Diariamente la municipalidad recibe quejas por parte de los vecinos de los distintos barrios
                        declarando la existencia de basurales ubicados generalmente en terrenos baldíos o abandonados.

                        <p>
                            La municipalidad responde limpiando los basurales, pero en un plazo corto de tiempo vuelven
                            a convertirse en un terreno utilizado para arrojar los desperdicios. Repitiéndose así el
                            ciclo basural - queja - limpieza - basural. Con las consecuencias que significan para
                            cuestiones como la salud tener un lugar repleto de residuos en el barrio.
                        </p>
                    </p>

                    <figure>
                        <img alt="" class="img-responsive" src="assets/images/about-us.jpg">
                    </figure>

                </div><!-- /.col-sm-6 -->

                <div class="col-sm-6">

                    <h3 class="section-title multiple-title">¿Por qué participar?</h3>

                    <p>
                        Un hackaton es un espacio de encuentro en donde podemos materializar nuestras ideas y aprender
                        de los problemas, trabajando en forma colaborativa para hallar respuestas de manera rápida y
                        creativa a las distintas problemáticas públicas que afectan nuestra vida diaria. Es una
                        excelente oportunidad no solo para desafiarnos personal y profesionalmente sino también para
                        conocernos y crear nuevos vínculos con distintos sectores de la comunidad.
                    </p>
                    <p>
                        <em>
                            ¡Seamos participantes activos en la búsqueda de soluciones que hagan más fácil la vida de
                            todos
                            los correntinos!</em>
                    </p>


                </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section id="facts" class="section bg-image-1 facts text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="exp">
                        <i class="ion-android-arrow-up"></i>
                    </div>
                    <h3>Ganá <br>experiencia</h3>

                </div>
                <div class="col-sm-3">
                    <div class="share">
                        <i class="ion-android-share-alt"></i>
                    </div>
                    <h3>Conocé gente y<br> creá vinculos</h3>

                </div>
                <div class="col-sm-3">
                    <div class="egg">
                        <i class="ion-egg"></i>
                    </div>
                    <h3>Incubá<br> tu proyecto</h3>

                </div>
                <div class="col-sm-3">
                    <div class="paper">
                        <i class="ion-ios-paper"></i>
                    </div>
                    <!-- <h3>Corrientes<br>Argentina</h3> -->
                    <h3>Reconocimiento y <br>Publicación de tu idea</h3>

                </div>

            </div><!-- row -->
        </div><!-- container -->

    </section>


    <section id="premios" class="section bg-image-2 contribution">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase mt0 font-400">¡premios!</h3>
                </div>

                <div class="row ">
                    <div class="col-md-4 col-sm-6 col-lg-4 winner-box animatedParent animateOnce">
                        <div class="schedule-box animated  bounceInLeft slow">
                            <div class="price first">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h3>Viaje a los esteros del Ibera</h3>
                            <p>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4 winner-box animatedParent animateOnce ">
                        <div class="schedule-box animated  bounceInDown slow">
                            <div class="price second">
                                <i class="fas fa-tablet-alt"></i>
                            </div>
                            <h3>Tablets</h3>
                            <p> </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4 winner-box  animatedParent animateOnce  ">
                        <div class="schedule-box animated rotateInUpRight slower">
                            <div class="price third">
                                <i class="far fa-clock"></i>
                            </div>
                            <h3>Smartwatchs</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4 winner-box col-md-offset-2 col-lg-offset-2 animatedParent animateOnce ">
                        <div class="schedule-box animated growIn slower">
                            <div class="price forth">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <h3>Auriculares</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-sm-offset-3 col-lg-4  winner-box col-md-offset-0  animatedParent animateOnce ">
                        <div class="schedule-box animated rotateIn slower">
                            <div class="price ticket">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                            <i class="ios-pricetags"></i>

                            <h3>SORTEOS</h3>
                            <p>Además con tu asistencia participas de sorteos en el lugar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="schedule" class="section schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Calendario del evento</h3>
                </div>
            </div>

            <!-- timeline -->
            <div class="container">
                <div class="page-header">
                    <!-- <h1 id="timeline">Timeline</h1> -->
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><i class="glyphicon glyphicon-pencil"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Inscripción</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Hasta
                                        24/10/2018</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Inscripción abierta hasta el 24 de Octubre.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge warning"><i class="fas fa-users"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Acreditación</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>
                                        26/10/2018 8:30 AM.</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Acreditación al evento, y formación de grupos

                                </p>

                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="timeline-badge warning"><i class="far fa-comment"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Bienvenida e Introducción</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>
                                        26/10/2018 9:00 AM.</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Bienvenida al evento, introducción y presentación de los desafíos.
                                </p>

                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge info"><i class="fas fa-brain"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">¡Que empiecen los juegos!</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>
                                        26/10/2018 10:00 AM.</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Inicio de 6 hs de creatividad!</p>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="timeline-badge danger"><i class="far fa-clock"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Presentación de las ideas</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>
                                        26/10/2018 16:00.</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>

                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge success"><i class="fas fa-trophy"></i></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Nominación de equipo ganador</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>
                                        26/10/2018 18:00 AM.</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>

                                </p>
                                <hr>

                            </div>
                        </div>
                    </li>


                </ul>
            </div>

            <!-- timeline -->

    </section>






    <section id="faq" class="section faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Preguntas frecuentes</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> ¿Tengo
                                        que pagar para inscribirme?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <!-- <h3>Hello</h3> -->
                                    <p>
                                        ¡No! La inscripción es gratuita. Podes inscribirte ingresando en <a href="https://goo.gl/forms/nffilMgAMlWcI3Nj1">este
                                            link</a>.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> ¿ Quién
                                        puede participar ?</a>
                                </h4>
                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>
                                        Si te gusta proponer ideas y superar desafíos, entonces estás invitado a
                                        participar.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Cómo deben ser los equipos ?</a>
                                </h4>
                            </div>

                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>
                                        Los equipos deben estar conformados con un mínimo de 3(tres) y un máximo de
                                        5(cinco) participantes..
                                        Todos los integrantes del equipo deben inscribirse al evento de forma
                                        individual y al momento de acreditarse se anotan los equipos.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> ¿Y si
                                        no tengo equipo ?</a>
                                </h4>
                            </div>

                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>
                                        Si no tenes equipo igual podés participar. Te inscribis de manera individual y
                                        el día del Hackathon llegas al lugar con media hora de anticipación así te
                                        invitamos a conformar un equipo junto a otros participantes.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> ¿Tengo
                                        que saber programar?</a>
                                </h4>
                            </div>

                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <p>
                                        No. Si bien muchos eventos de este tipo son orientados a la programación, aquí
                                        nos interesa más las distintas ideas que pueden surgir y la participación, por
                                        lo que no es un requisito saber programar.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> ¿Cómo se
                                        elige al ganador?</a>
                                </h4>
                            </div>

                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <p>
                                        Los equipos serán calificados de acuerdo a los siguientes criterios:
                                    </p>
                                </div>
                            </div>
                        </div> -->



                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseEight" aria-expanded="false" aria-controls="collapseEight"> ¿Qué
                                        tengo que llevar?</a>
                                </h4>
                            </div>

                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <p>
                                        Recomendamos que traigas cuadernos, post-its o cualquier cosa donde se puedan
                                        anotar ideas.
                                        Ademas cada equipo debe contar con al menos una computadora.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseNine" aria-expanded="false" aria-controls="collapseNine"> ¿Tenés
                                        mas preguntas?</a>
                                </h4>
                            </div>

                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                <div class="panel-body">
                                    <p>
                                        Contactate con nosotros enviado un e-mail a subsecmodernizacionmcc@gmail.com o
                                        llamando al
                                        379 506-3979
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>


    <section id="partner" class="section partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Colaboradores</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-2" href="http://www.unne.edu.ar/"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-5" href="http://www.ucp.edu.ar/"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-4" href="http://www.exa.unne.edu.ar/"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-8" href="https://www.facebook.com/unnetec.innovar1/"></a>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-9" href="http://www.agentia.unne.edu.ar/"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-1" href="https://www.manosnobles.org/"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-3" href="http://www.manos-verdes.org/"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-6" href="https://www.facebook.com/emergenciasinformaticascorrientes"></a>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-7" href="https://www.gigared.com.ar/"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-10" href="http://www.redinnovacionlocal.org/"></a>
                </div>
                <!-- <div class="col-sm-3">
                    <a class="partner-box partner-box-11"></a>
                </div> -->
                <!-- <div class="col-sm-3">
                    <a class="partner-box partner-box-12"></a>
                </div> -->
            </div>
    </section>




    <section id="location" class="section location">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="section-title">Ubicación del Evento </h3>
                    <address>
                        <p>Salon de Eventos OSDE<br> H. Yrigoyen 371<br> Corrientes<br> Telefono: 379-506-3979<br>
                            Email: subsecmodernizacionmcc@gmail.com</p>
                    </address>
                </div>
                <div class="col-sm-9">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96706.50013548559!2d-78.9870674333782!3d40.76030630398601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sbd!4v1436299406518" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                    <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=450&amp;hl=en&amp;q=%20371%20hipolito%20Yrigoyen%2C%20Corrientes%2Cargentina+(Salon%20de%20Eventos%20OSDE)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Create
                                Google Map</a></iframe></div><br />
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">Invita <br>
                        <a href="http://ciudaddecorrientes.gob.ar">
                            <img class='mcc' src="assets/images/logo2.png" alt="Logo">
                        </a>
                    </p>
                    <ul class="social-block">
                        <li><a href="https://twitter.com/municorrientes"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/corrientesmuni/"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/municorrientes/"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/tilt.js/src/tilt.jquery.js"></script> <!-- Load Tilt.js library -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <script src='node_modules/css3-animate-it/js/css3-animate-it.js'></script>
</body>

</html>