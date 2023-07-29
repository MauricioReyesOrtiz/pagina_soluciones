<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Soluciones Dentales</title>
        <!--Bootstrap-->
        <!--Css-->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
        <!--JavaScript-->
        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <img src="assets/img/logocompleto.png" alt="..." width="200px"/>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul  class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a style="font-size: 13px" class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a style="font-size: 13px" class="nav-link" href="#portfolio">Portafolio</a></li>
                        <li class="nav-item"><a style="font-size: 13px" class="nav-link" href="#about">Sobre Nosotros</a></li>
                        <li class="nav-item"><a style="font-size: 13px" class="nav-link" href="#team">Odontologos</a></li>
                        <li class="nav-item"><a style="font-size: 13px" class="nav-link" href="#contact">Contactanos</a></li>
                        <li class="nav-item"><a style="font-size: 13px" class="nav-link" href="#location">Ubicacion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenidos a!</div>
                <div class="masthead-heading text-uppercase">Soluciones Dentales</div>
                <a target="_blank" class="btn btn-info btn-xl text-uppercase" href="https://wa.link/7cb9c8">Haz tu reserva</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Conoce nuestros servicios</h3>
                </div>
                <div class="row">
                    @foreach (servicios() as $servicio)
                    <div class="col-lg-4">
                        <div class="team-member">
                            {{-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> --}}
                            <img class="mx-auto rounded-circle" src="{{ $servicio->logo }}" alt="..." />
                        
                        <h4>{{ $servicio->nombre }}</h4>
                        <p class="text-muted">{{ $servicio->descripcion }}</p>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </section>


        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portafolio</h2>
                    <h3 class="section-subheading text-muted">Mira nuestras postales y ofertas</h3>
                </div>
                <div class="row portfolio-item-contenedor">
                    @foreach (@portafolios() as $portafolio)
                    <div class="col-lg-4 col-sm-6 mb-4"><!--Begin-->
                        <!-- Portfolio item 1 mb-lg-0| mb-sm-0   -->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal"  href="#portfolioModal{{ $portafolio->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img  class="img-fluid" src="{{ $portafolio->logo }}" alt="..."  />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $portafolio->nombre }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $portafolio->descripcion_corta }}</div>
                            </div>
                        </div>
                        <!-- Portfolio Modals-->
                        <!-- Portfolio item 1 modal popup-->
                        <div class="portfolio-modal modal fade" id="portfolioModal{{ $portafolio->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="modal-body">
                                                    <!-- Project details-->
                                                    <h2 class="text-uppercase">{{ $portafolio->nombre }}</h2>
                                                    <p class="item-intro text-muted">{{ $portafolio->descripcion_corta }}</p>
                                                    <img class="img-fluid d-block mx-auto" src="{{ $portafolio->logo }}" alt="..." />
                                                    <p>{{ $portafolio->descripcion_larga }}</p>

                                                    <button class="btn btn-secondary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                        <i class="fas fa-xmark me-1"></i>
                                                        Cerrar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End-->
                    @endforeach
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section about" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sobre Nosotros</h2>
                    <h3 style="color: rgb(255, 255, 255); font-size: 35px" class="section-subheading ">Conoce un poco más sobre nosotros</h3>
                </div>
                <ul class="timeline">
                    @foreach (sobrenosotros() as $sobrenosotro)
                        <li><!--Sobre Nosotros 1 | class="timeline-inverted" -->
                        
                            <div class="timeline-image" ><!--Imagen-->
                                <img class="rounded-circle img-fluid" src="{{ $sobrenosotro->logo }}" alt="..."  />
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{$sobrenosotro->fecha }}</h4><!--Fecha-->
                                    <h4 class="subheading">{{ $sobrenosotro->titulo }}</h4><!--titulo-->
                                </div>
                                <div class="timeline-body text-muted-descripcion"><!--descripcion-->
                                    <p class="">{{ $sobrenosotro->descripcion }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    @foreach (sobrenosotroequipamientos() as $sobrenosotroequipamiento)
                        <li class="timeline-inverted"><!--Sobre Nosotros 1 | class="timeline-inverted" -->
                        
                            <div class="timeline-image" ><!--Imagen-->
                                <img class="rounded-circle img-fluid" src="{{ $sobrenosotroequipamiento->logo }}" alt="..."  />
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{$sobrenosotroequipamiento->fecha }}</h4><!--Fecha-->
                                    <h4 class="subheading">{{ $sobrenosotroequipamiento->titulo }}</h4><!--titulo-->
                                </div>
                                <div class="timeline-body text-muted-descripcion"><!--descripcion-->
                                    <p class="">{{ $sobrenosotroequipamiento->descripcion }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
        
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div  class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestros Odontologos</h2>
                    <h3 class="section-subheading text-muted">Conoce nuestro equipo de Medicos Dentistas</h3>
                </div>
                <div  class="row">
                    @foreach (categorias() as $categoria)
                    <div class="col-lg-6">
                        <div  class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset($categoria->logo) }}" alt="..." />
                            <h4>{{ $categoria->nombre }} {{ $categoria->paterno }} {{ $categoria->materno }}</h4>
                            <p class="text-muted">{{ $categoria->profesion }}</p>
                            <a target="_blank" class="btn btn-dark btn-social mx-2" href="{{ $categoria->linkredsocialuno }}" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-whatsapp"></i></a>
                            <a target="_blank" class="btn btn-dark btn-social mx-2" href="{{ $categoria->linkredsocialdos }}" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" class="btn btn-dark btn-social mx-2" href="{{ $categoria->linkredsocialtres }}" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-tiktok"></i></a>
                          
                        </div>
                    </div>
                    @endforeach 
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">" Nuestro mayor satisfaccion es cuidar y brindar una linda sonrisa a nuestros pacientes."</p></div>
                </div>
            </div>
        </section>

        <!-- Clients-->
        <div  class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <center><h4 class="section-subheading text-muted">Nuestras marcas amigas</h4></center>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/colgate.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/listerine.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/OralB.svg.png" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/fixodent.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonios Clientes-->
        <section class="page-section bg-light" id="">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestros Clientes dicen</h2>
                </div>
                <!--Inicio Carrusel-->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    
                    <div class="carousel-inner">
                        @foreach (testimoniounos() as $testimoniouno)
                            <div class="carousel-item active">
                              <div  class="team-member team-member-carrusel">
                                  <img class="mx-auto rounded-circle" src="{{ $testimoniouno->logo }}" alt="..." />
                                  <h4>{{ $testimoniouno->nombre }} {{ $testimoniouno->paterno }} {{ $testimoniouno->materno }}</h4>
                                  <h5 class="text-muted">{{ $testimoniouno->profesion }}</h5>
                                  <p class="">"{{ $testimoniouno->comentario }}"</p>
                              </div>
                            </div>
                        @endforeach
                        @foreach (testimoniodos() as $testimoniodo)
                            <div class="carousel-item">
                                <div  class="team-member team-member-carrusel">
                                    <img class="mx-auto rounded-circle" src="{{ $testimoniodo->logo }}" alt="..." />
                                    <h4>{{ $testimoniodo->nombre }} {{ $testimoniodo->paterno }} {{ $testimoniodo->materno }}</h4>
                                    <h5 class="text-muted">{{ $testimoniodo->profesion }}</h5>
                                    <p class="">"{{ $testimoniodo->comentario }}"</p>
                                </div>
                            </div>
                        @endforeach
                        @foreach (testimoniotres() as $testimoniotre)
                            <div class="carousel-item">
                                <div  class="team-member team-member-carrusel">
                                    <img class="mx-auto rounded-circle" src="{{ $testimoniotre->logo }}" alt="..." />
                                    <h4>{{ $testimoniotre->nombre }} {{ $testimoniotre->paterno }} {{ $testimoniotre->materno }}</h4>
                                    <h5 class="text-muted">{{ $testimoniotre->profesion }}</h5>
                                    <p class="">"{{ $testimoniotre->comentario }}"</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                <!--Fin Carrusel-->
            </div>
        </section>


        
        <!-- Contacto-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center text-center-dos">
                    <h2 class="section-heading text-uppercase">Contactanos</h2>
                    <h3 class="section-subheading">Envianos un mensaje y te responderemos de inmediato.</h3>
                </div>
                <!--FORMULARIO PARA ENVIO DE CORREOS -->
                <form action="{{ route('/.store') }}" method="POST" id="contactForm">
                    @csrf  <!--TOKEN-->
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">

                            <div class="form-group"><!-- Asunto-->
                                <input type="text" class="form-control" name="asunto" id="asunto"  placeholder="Ingrese el Asunto" />
                                @error('asunto')<!--mensaje de validacion del campo asunto-->
                                  <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group"><!-- Nombre-->
                                <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Ingrese su nombre" />
                                @error('nombre')<!--mensaje de validacion del campo nombre-->
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group"><!-- Correo Remitente del cliente-->
                                <input type="text" class="form-control" name="correo_remitente" id="correo_remitente"  placeholder="Ingrese su correo" />
                                @error('correo_remitente')<!--mensaje de validacion del correo remitente-->
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group"><!-- Correo Destinatario-->
                                <input type="text" class="form-control" name="correo_destino" id="correo_destino"  placeholder="Ingrese correo destinatario">
                                @error('correo_destino')<!--mensaje de validacion del correo destinatario-->
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6"><!-- Mensaje del correo-->
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Ingresa tu mensaje aqui"></textarea>
                                @error('mensaje')<!--mensaje de validacion del: mensaje del correo-->
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Boton de Envio-->
                    <div class="text-center">
                        <button type="submit" class="btn btn-info" >Enviar Correo</button>
                    </div>
                </form>

                <!--MENSAJE ALERTA DE VERIFICACION DE ENVIO DEL CORREO-->
                <center>
                    @if (Session::has('info'))
                        <div>
                           
                            <strong style="color: rgb(255, 255, 255);"><i style="font-size: 100px; color: rgb(149, 238, 15);" class="fas fa-check-circle"></i> {{Session::get('info')}} </strong>
                        </div>
                    @endif
                </center>
            </div>
        </section>



        
        <!-- Nuestra Ubicacion-->
        <section class="page-section bg-light" id="location">
            <div class="container"><!--Contenedor del Mapa-->
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestra Ubicacion</h2>
                    <h3 class="section-subheading text-muted">Ubícanos mediante el Mapa</h3>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d952.1031158429602!2d-63.25159984754008!3d-17.343874655361613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93ee3e8744955f35%3A0x4cf7fa309ea0dfe!2sSOLUCIONES%20DENTALES%20D.R.S.!5e0!3m2!1ses!2sbo!4v1690387000353!5m2!1ses!2sbo" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Soluciones Dentales DRS 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-info btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-info btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-info btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="text-decoration-none me-3" href="#!">Privacidad de Uso</a>
                        <a class=" text-decoration-none" href="#!">Terminos y Condiciones</a>
                    </div>
                </div>
            </div>
        </footer>
        
        

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
