<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Nosso principal objetivo é que nossos pacientes encontrem o médico perfeito e agende uma consulta do modo mais fácil possível. Essa jornada precisa ser agradável, por isso sempre estamos dispostos a ajudar." />
        <meta name="keywords" content="medico, agendar, consulta, online, agendar consulta, clinica"/>
        <meta name="author" content="Eduardo Nascimento"/>
        <title>COVID | Prise de rendez-vous en ligne</title>
        <link rel="icon" href="{{ asset('img/landing/favicon.png') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/bootstrap.min.css') }}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/animate.css') }}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/owl.carousel.min.css') }}">
        <!-- themify CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/themify-icons.css') }}">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/flaticon.css') }}">
        <!-- magnific popup CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/magnific-popup.css') }}">
        <!-- nice select CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/nice-select.css') }}">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/slick.css') }}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/style.css') }}">
    </head>
    <body>
        <!--::header part start::-->
        <header class="main_menu home_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{ route('index') }}"> <img src="{{ asset('img/landing/logo.png') }}"
                                    alt="logo"> COVID
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">À propos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#doctors">Docteurs</a>
                                    </li>
                                </ul>
                            </div>
                            <a class="btn_2 d-none d-lg-block" href="{{ route('login') }}">Entrer</a>
                            <a class="btn d-none d-lg-block" href="{{ route('register') }}">Registre</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xl-5">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                            <h5>Nous sommes là pour vous</h5>
                                <h1>Meilleurs médecins</h1>
                                <p>Ici, à FANN , vous pouvez trouver les meilleurs médecins de la région,
                                    avec un service différencié et une planification très simple.</p>
                                <a href="{{ route('login') }}" class="btn_2">Planifiez votre requête</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner_img">
                            <img src="{{ asset('img/landing/doctors1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

        <!-- about us part start-->
        <section class="about_us padding_top" id="about">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="about_us_img">
                            <img src="{{ asset('img/landing/calendar.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="about_us_text">
                        <h2>À propos de nous</h2>
                            <p>Notre objectif principal est que nos patients trouvent le médecin
                                parfait et prenez rendez-vous le plus facilement possible. ce voyage
                                il doit être agréable, nous sommes donc toujours prêts à vous aider. </p>
                            <div class="banner_item">
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_1.svg') }}" alt="">
                                    <h5>Docteurs</h5>
                                </div>
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_2.svg') }}" alt="">
                                    <h5>    
Planification</h5>
                                </div>
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_3.svg') }}" alt="">
                                    <h5>
Qualifié</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us part end-->

        <!-- feature_part start-->
        <section class="feature_part" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section_tittle text-center">
                            <h2>
Nos services</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-3 col-sm-12">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon"><img src="{{ asset('img/landing/children.png') }}"
                                        alt=""></span>
                                        <h4>Pédiatrie</h4>
                                <p>Notre mission est de fournir un soutien préventif,
                                    pourquoi les enfants et les adolescents
                                    grandir en bonne santé et heureux.</p>
                            </div>
                        </div>
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon"><img src="{{ asset('img/landing/heart.png') }}"
                                        alt=""></span>
                                        <h4>Cardiologie</h4>
                                <p>Nos cardiologues sont hautement qualifiés
                                    d'identifier les maladies de l'un des principaux
                                    organes du corps humain.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="{{ asset('img/landing/doctors2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon"><img src="{{ asset('img/landing/eye.png') }}"
                                        alt=""></span>
                                        <h4>Ophtalmologie</h4>
                                <p>Soigner les maladies qui affectent les yeux et
                                    vision sont réalisées par nos ophtalmologistes.</p>
                            </div>
                        </div>
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon"><img src="{{ asset('img/landing/bone.png') }}"
                                        alt=""></span>
                                <h4>Orthopédie</h4>
                                <p>Nos orthopédistes ont pris soin de vos os, muscles, articulations,
                                    ligaments et autres composants de votre système.</p>
                            </div>
                            <h4>prise de rendez pour covid</h4>
                                <p>Se preparer a une prise de dose du vaccin covid pour le bien de tout un chacun</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature_part start-->

        <!-- our depertment part start-->
        <section class="our_depertment section_padding" id="doctors">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-12">
                        <div class="depertment_content">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <h2>
Nos médecins</h2>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/gZD2DE.jpeg') }}" alt="doctor">
                                            <h3>pr.Seydi</h3>
                                            <p>Cardiologue</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/O3QF27.jpeg') }}" alt="doctor">
                                            <h3>Dr. Bouso</h3>
                                            <p>Pediatre</p>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/yevwZM.jpeg') }}" alt="doctor">
                                            <h3>Dr.Awa Diagne Sy</h3>
                                            <p>Ophtalmologiste</p>
                                        </div>
                                      
                                      
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our depertment part end-->

        <!-- footer part start-->
        <footer class="footer-area">
            <div class="copyright_part">
                <div class="container">
                    <div class="row align-items-center">
                        <p class="footer-text m-0 col-lg-8 col-md-12">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Y U N U S
                        </p>
                        <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                            <a href="https://web.facebook.com/santegouvsenegal/?_rdc=1&_rdr"><i class="ti-facebook"></i></a>
               
                           
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer part end-->

        <!-- jquery plugins here-->
        <script src="{{ asset('js/landing/jquery-1.12.1.min.js') }}"></script>
        <!-- popper js -->
        <script src="{{ asset('js/landing/popper.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('js/landing/bootstrap.min.js') }}"></script>
        <!-- owl carousel js -->
        <script src="{{ asset('js/landing/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/landing/jquery.nice-select.min.js') }}"></script>
        <!-- contact js -->
        <script src="{{ asset('js/landing/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/landing/jquery.form.js') }}"></script>
        <script src="{{ asset('js/landing/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/landing/mail-script.js') }}"></script>
        <script src="{{ asset('js/landing/contact.js') }}"></script>
        <!-- custom js -->
        <script src="{{ asset('js/landing/custom.js') }}"></script>
    </body>
</html>
