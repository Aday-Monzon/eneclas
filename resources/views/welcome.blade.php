@extends('layouts.template')
@section('content')
            <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 class="h1-large">Centro de Estudios<br>Curso 2021/22 <span style="font-family: 'Lexend Giga', sans-serif;" class="replace-me">Matrículas abiertas</span></h1>
                            <p class="p-large">Plazas limitadas<br>Primaria - Secundaria- Bachillerato - Universidad</p>
                            {{-- <a class="btn-solid-lg" href="sign-up.html">Sign up for free</a> --}}
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/sinfondo.png" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->


        <!-- Features -->
        <div id="features" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">En el centro de estudios <span>Enaclas</span> ,le damos un valor añadido al aprendizaje de nuestros alumnos</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <img class="img-fluid" src="images/header-illustration.svg" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Plataforma Digital</h4>
                                <p>Hay múltiples ventajas al recibir clases virtuales y poder tener el material de aprendizaje en diferentes formatos. </p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon green">
                                <img class="img-fluid" src="images/details-1.svg" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Técnicas de Estudio</h4>
                                <p>Promueven el desarrollo cognitivo, así como la capacidad de aprender con menor dificultad nuevos contenidos y mejorar el rendimiento académico.</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon blue">
                                <img class="img-fluid" src="images/ReadingBooks.png" alt="alternative" style="padding-top: 11px;">
                               
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Clases Reducidas</h4>
                                <p>Impartimos clases para todos los niveles educativos, desde primaria hasta la universidad.</p>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of services -->


        <!-- Details 1 -->
        <div id="details" class="basic-1 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h2> Nuestro compromiso con los alumn@s y familia parte del análisis de necesidades y atención personalizada. </h2>
                            <p>Por ello, nuestros grupos serán de un maximo de 4 estudiantes.</p>
                           
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <img class="img-fluid" src="images/undraw_exams_g4ow.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-1 -->
        <!-- end of details 1 -->

        <!-- Details Modal -->
        <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="row">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="col-lg-8">
                            <div class="image-container">
                                <img class="img-fluid" src="images/table.png" alt="alternative">
                            </div> <!-- end of image-container -->
                        </div> <!-- end of col -->
                        <div class="col-lg-4">
                            <h3>Moodle de Enaclas</h3>
                            <hr>
                            <p>Permitirá acceder a contenido teórico,ejercicios y mucho más.</p>
                            <h4>Academia en casa</h4>
                            <p>No solo el aprendizaje será más dinámico: acercaremos la academia a casa</p>
                            <p>Gracias a ello podremos acompañar a nuestr@s alumn@os tanto dentro, como fuera del aula.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">En el aula podrá intercambiar opiniones e interactuar con los profesores.</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
                                </li>
                                
                            </ul>
                            <a id="modalCtaBtn" class="btn-solid-reg" href="#your-link">Acceder</a>
                            <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Cerrar</button>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of modal-content -->
            </div> <!-- end of modal-dialog -->
        </div> <!-- end of modal -->
        <!-- end of details modal -->


        <!-- Details 2 -->
        <div class="basic-2">
            <div class="container">
                <div class="row align-items-lg-end">
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/Clip.gif" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h2>Cualquiera puede empezar a utilizar la plataforma con un mínimo de conocimientos</h2>
                            <p> Podrás conocer diferentes herramientas de aprendizaje lo que también le permite estar más motivado y mantener el interés en el tema.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1"> Puedes acceder al contenido teórico y ejercicios 24/7 desde cualquier lugar.</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1">Accesibilidad y facilidad de uso.</div>
                                </li>
                            
                            </ul>
                             <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Campus</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-2 -->
        <!-- end of details 2 -->


        <!-- Testimonials -->
        <div class="slider-1 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Nuestros Profesores</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card Slider -->
                        <div class="slider-container">
                            <div class="swiper-container card-slider">
                                <div class="swiper-wrapper">
                                    
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="images/testimonial-1.jpg" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Tortor sodales eget. Vivamus imperdiet leo eu risus tincidunt uris. Proin placerat, urna hendrerit placerat erase convallis</p>
                                                <p class="testimonial-author">Jude Thorn - Designer</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="images/testimonial-2.jpg" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Eros volutpat ante mauris euismod sem, ut varius nisi lectus in urna. Integer luctus, nunc eget maximus intem, orci risus</p>
                                                <p class="testimonial-author">Roy Smith - Developer</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Sed congue ex quam, sit amet venenatis dolor lacinia vulputate. Nunc pulvinar ex ex, sit amet scelerisque tellus pretium semper</p>
                                                <p class="testimonial-author">Marsha Singer - Marketer</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Etiam est lorem, interdum non semper ut, bibendum vitae ante. Pellente sollicitun sagittis lectus. Aenean in comod</p>
                                                <p class="testimonial-author">Tim Shaw - Designer</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="images/testimonial-5.jpg" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Quisque nec turpis placerat, accumsan lorem lobortis, vestibulum elit. Fusce finibus nisl varius semper elementum vivamus</p>
                                                <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="images/testimonial-6.jpg" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Vulputate sed tellus nec, imperdiet luctus purus. Morbi lobortis massa a mi interdum condimentum. Integer non gravida nisi</p>
                                                <p class="testimonial-author">Ann Blake - Developer</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
                                
                                </div> <!-- end of swiper-wrapper -->
            
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <!-- end of add arrows -->
            
                            </div> <!-- end of swiper-container -->
                        </div> <!-- end of slider-container -->
                        <!-- end of card slider -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of slider-1 -->
        <!-- end of testimonials -->


        <!-- Invitation -->
        <div class="basic-3" id="contacto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="h2">Contacto</h4>
                        {{-- <a class="btn-outline-lg page-scroll" href="sign-up.html">Sign up for free</a> --}}
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="contact2"  id="contact">
        
  <div class="container">
    <div class="row contact-container">
      <div class="col-lg-12">
        <div class="card card-shadow border-0 mb-4">
          <div class="row">
            <div class="col-lg-8">
              <div class="contact-box p-4">
                <h4 class="title">Contacta con nosotros</h4>
                <form>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group mt-3">                    
                        <input class="form-control" type="text" placeholder="nombre">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mt-3">
                        <input class="form-control" type="text" placeholder="email">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mt-3">
                        <input class="form-control" type="text" placeholder="movil">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mt-3">
                        <input class="form-control" type="text" placeholder="asunto">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mt-3">
                        <textarea class="form-control" rows="6"></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <button type="submit" class="btn btn-danger-gradiant mt-3 mb-3 text-white border-0 py-2 px-3"><span> ENVIAR <i class="ti-arrow-right"></i></span></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-4 bg-image" style="background-image:url(https://cdn.pixabay.com/photo/2015/12/01/15/43/black-1072366_960_720.jpg)">
              <div class="detail-box p-4">
                <h5 class="text-white font-weight-light mb-3"><i class="fas fa-map-marker-alt"></i> DIRECCIÓN</h5>
                <p class="text-white op-7">C/ Isla de el Hierro 8<br> 35217 - Valsequillo<br> Las Palmas de GC
                   </p>
                <h5 class=" text-white font-weight-light mb-3 mt-4"><i class="fas fa-phone"></i> TELEFONO</h5>
                <p class=" text-white op-7">662 27 85 83
                  <br> 928 016 749</p>
                <h5 class=" text-white font-weight-light mb-3 mt-4"><i class="fas fa-envelope"></i> EMAIL</h5>
                <p class=" text-white op-7">estudioenaclas@gmail.com
                  </p>
                <div class="round-social light">
                  <a href="#" class="ml-0 text-decoration-none text-white border border-white rounded-circle"><i class="fab fa-facebook-square"></i></i></a>
                  <a href="#" class="text-decoration-none text-white border border-white rounded-circle"><i class="fab fa-twitter-square"></i></a>
                  <a href="#" class="text-decoration-none text-white border border-white rounded-circle"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
            </div> <!-- end of container -->
        </div> <!-- end of basic-3 -->
        <!-- end of invitation -->


        <!-- Pricing -->
        <div id="pricing" class="cards-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Precios</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Clases Sueltas</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
                                </div>
                                <div class="price">15€</div>
                                <a href="sign-up.html" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Bono 4 Horas</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
                                </div>
                                <div class="price">55€<span>/mes</span></div>
                                <a href="sign-up.html" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Bono 8 Horas</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
                                </div>
                                <div class="price">90€<span>/mes</span></div>
                                <a href="sign-up.html" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->

                         <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Bono 12 Horas</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
                                </div>
                                <div class="price">110€<span>/mes</span></div>
                                <a href="sign-up.html" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->
                         <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Bono 16 Horas</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
                                </div>
                                <div class="price">135€<span>/mes</span></div>
                                <a href="sign-up.html" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->

                         <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span></span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
                                </div>
                                <ul class="list-unstyled li-space-lg">
                                    <li>DESCUENTO HERMAN@S</li>
                                    <li>CARNET FAMILIA NUMEROSA</li>
                                </ul>
                                
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->

        <!-- Questions -->
        <div class="accordion-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Preguntas frecuentes</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion" id="accordionExample">
                            
                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">¿Qué bono elegir?</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">El bono más demandado es de 12h/mes, distribuidas de dos clases de una hora y media semanales. No obstante, es fundamental analizar las circunstancias y nivel de cada un@ para poder hacer una correcta elección. </div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">¿Cuando se realiza el pago?</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">El abono se realizará del 1 al 10 de cada mes. Podrá ejecutarse mediante efectivo, Bizum o transferencia bancaria. También puedes solicitar la factura para tu declaracion de la renta.</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">¿Qué pasa sino puedo ir a clases?</button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">!No te preocupes¡<br>Sólo tienes que avisarnos con 24h de antelación y reprogramaremos tu clase. Las recuperaciones deberán hacerse efectivas en un plazo máximo de 2 meses desde el momento en que se aplaza.</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                        </div> <!-- end of accordion -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of accordion-1 -->
        <!-- end of questions -->
@endsection