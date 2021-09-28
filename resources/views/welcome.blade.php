@extends('layouts.template')

@section('content')
  <!-- Header -->
  <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 class="h1-large">Centro de Estudios <span style="font-family: 'Lexend Giga', sans-serif;" class="replace-me">enaclas</span></h1>
                            <p class="p-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim, neque ut vanic barem ultrices sollicitudin</p>
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
                                <span class="fas fa-laptop"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Campus Virtual</h4>
                                <p>Et blandit nisl libero at arcu. Donec ac lectus sed tellus mollis viverra. Nullam pharetra ante at nunc elementum</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon green">
                                <span class="far fa-clipboard"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Seguimiento</h4>
                                <p>Vulputate nibh feugiat. Morbi pellent diam nec libero lacinia, sed ultrices velit scelerisque. Nunc placerat justo sem</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon blue">
                                <span class="fas fa-university"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Todos los niveles</h4>
                                <p>Ety suscipit metus sollicitudin euqu isq imperdiet nibh nec magna tincidunt, nec pala vehicula neque sodales verum</p>
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
                            <h2>Mejoramos las expectativas de nuestros alumnos y hacemos que confíen en lograr sus objetivos.</h2>
                            <p>Vestibulum ullamcorper augue ex, imperdiet tincidunt tellus bibendum inconsectetur rutrum mauris orbi scelerisque cursus augue, ac suscipit sem mattis at ut suscipit</p>
                           
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
                            <h3>Goals Setting</h3>
                            <hr>
                            <p>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit semper magna ac tum nico vela spider</p>
                            <h4>User Feedback</h4>
                            <p>Sapien vitae eros. Praesent ut erat a tellus posuere nisi more thico cursus pharetra finibus posuere nisi. Vivamus feugiat</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Tincidunt sem vel brita bet mala</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Fusce interdum nec ravon fro urna</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Integer pulvinar biolot bat tortor</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Id ultricies fringilla fangor raq trinit</div>
                                </li>
                            </ul>
                            <a id="modalCtaBtn" class="btn-solid-reg" href="#your-link">Details</a>
                            <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
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
                            <h2>Cualquiera puede empezar a utilizar la aplicación con un mínimo de conocimientos</h2>
                            <p>Velit dictum non proin egestas convallis nunc, eu auctor massa. Nam hendrerit, eros ut viverra lobortis, mauris nisi porta risus, placerat dignissim tellus auctor masse</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1">Fusce ipsum augue, ultrices rutrum est accel, pulvin</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1">Fermentum elit. Vestibulum cursuso bibendum viverra</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1">Quisque blandit pulvinar metus, eu sta malesuada</div>
                                </li>
                            </ul>
                             <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Modal</a>
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
                <h4 class="title">Déjanos un mensaje</h4>
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
                <h5 class="text-white font-weight-light mb-3">DIRECCIÓN</h5>
                <p class="text-white op-7">C/ Isla de el Hierro <br> 35217 - Valsequillo<br> Las Palmas de GC
                   </p>
                <h5 class=" text-white font-weight-light mb-3 mt-4">TELEFONO</h5>
                <p class=" text-white op-7">662 27 85 83
                  <br> 928 016 749</p>
                <h5 class=" text-white font-weight-light mb-3 mt-4">EMAIL</h5>
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
                                    <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Individual</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
                                </div>
                                <ul class="list-unstyled li-space-lg">
                                    <li>Fusce pulvinar eu mi acm</li>
                                    <li>Curabitur consequat nisl bro</li>
                                    <li>Reget facilisis molestie</li>
                                    <li>Vivamus vitae sem in tortor</li>
                                    <li>Pharetra vehicula ornares</li>
                                    <li>Vivamus dignissim sit amet</li>
                                    <li>Ut convallis aliquama set</li>
                                </ul>
                                <div class="price">15€</div>
                                <a href="sign-up.html" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Mensual</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
                                </div>
                                <ul class="list-unstyled li-space-lg">
                                    <li>Nunc commodo magna quis</li>
                                    <li>Lacus fermentum tincidunt</li>
                                    <li>Nullam lobortis porta diam</li>
                                    <li>Announcing of invita mro</li>
                                    <li>Dictum metus placerat luctus</li>
                                    <li>Sed laoreet blandit mollis</li>
                                    <li>Mauris non luctus est</li>
                                </ul>
                                <div class="price">160€<span>/mes</span></div>
                                <a href="sign-up.html" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Bono 10</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
                                </div>
                                <ul class="list-unstyled li-space-lg">
                                    <li>Quisque rutrum mattis</li>
                                    <li>Quisque tristique cursus lacus</li>
                                    <li>Interdum sollicitudin maec</li>
                                    <li>Quam posuerei pellentesque</li>
                                    <li>Est neco gravida turpis integer</li>
                                    <li>Mollis felis. Integer id quam</li>
                                    <li>Id tellus hendrerit lacinia</li>
                                </ul>
                                <div class="price">75€<span>/month</span></div>
                                <a href="sign-up.html" class="btn-solid-reg">Sign up</a>
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How can I contact you quickly and get a reasonable quote more for my project?</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Sed lacinia cursus viverra. Nunc sed libero euismod, congue dui a, vulputate quam. Pellentesque neque nisi, ultrices ut ipsum ac, mattis sollicitudin neque. Ut ac nunc sem. Etiam id erat facilisis magna sagittis porta. Donec eu dolor eu dolor finibus sodales consectetur, et condimentum elit tincidunt</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Is the Free Tier available for unlimited time or it will end more words after a while?</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Mauris faucibus placerat nisl. Sed eros odio, posuere at felis quis, tincidunt facilisis nibh. Nulla in ante sem. Nam aliquam urna nisi, cursus semper dolor convallis at. Duis vulputate est in consectetur, et condimentum elit tincidunt libero consectetur, et condimentum suis vulputate est in libero</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Can I use the app on mobile devices or it’s limited more words to desktop use?</button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Nullam at diam at mi facilisis consectetur at non turpis. Proin a felis nisi. Sed at orci rutrum, tincidunt magna vel, pharetra libero. Proin mauris orci, faucibus eget malesuada vel, consectetur, et condimentum elit tincidunt pellentesque vitae ligula. Pellentesque euismod tincidun</div>
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
