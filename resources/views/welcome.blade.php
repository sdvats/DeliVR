@extends('layouts.base_layout')
@section('slider')
  @include('layouts.slider')
  @stop
@section('content')



    <main>
        <div class="container">

            <div class="col-md-12 flex-center">
                <a class="navbar-brand" href="#">
                    <img src="{{url("/img/front/delivrlogo.svg") }}" height="100" alt="mdb logo"> DeliVR
                </a>

            </div>

            <!--First row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-12">

                    <div id="mdb-lightbox-ui"></div>

                    <!--Full width lightbox-->
                    <div class="mdb-lightbox">

                        <div class="row">
                            <figure class="col-md-4">
                                <a href="{{url("/img/front/10.png")}}" data-size="1600x1067">
                                    <img src="{{url("/img/front/10.png")}}" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="{{url("/img/front/11.png")}}" data-size="1600x1067">
                                    <img src="{{url("/img/front/11.png")}}" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="{{url("/img/front/2.jpg")}}" data-size="1600x1067">
                                    <img src="{{url("/img/front/3.jpg")}}" class="img-fluid z-depth-1">
                                </a>
                            </figure>
                        </div>

                        <div class="row">
                            <figure class="col-md-4">
                                <a href="{{url("/img/front/16.jpg")}}" data-size="1600x1067">
                                    <img src="{{url("/img/front/16.jpg")}}" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="{{url("/img/front/17.jpg")}}" data-size="1600x1067">
                                    <img src="{{url("/img/front/17.jpg")}}" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="{{url("/img/front/19.jpg")}}" data-size="1600x1067">
                                    <img src="{{url("/img/front/19.jpg")}}" class="img-fluid z-depth-1">
                                </a>
                            </figure>
                        </div>

                        <div class="row">
                            <figure class="col-md-4">
                                <a href="{{url("/img/front/load_1.jpg")}}" data-size="1600x1067">
                                    <img src="{{url("/img/front/load_1.jpg")}}" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="{{url("/img/front/load_2.png")}}" data-size="1600x1067">
                                    <img src="{{url("/img/front/load_2.jpg")}}" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="{{url("/img/front/load_3.jpg")}}" data-size="1600x1067">
                                    <img src="{{url("/img/front/load_3.jpg")}}" class="img-fluid z-depth-1">
                                </a>
                            </figure>
                        </div>

                    </div>
                    <!--/Full width lightbox-->

                </div>
                <!--/First column-->

            </div>
            <!--First row-->
            <!--Grid row-->
            <div class="col-md-12">
               <div class="mx-md-n5 row">
                   <div class="col-md-4 py-3 px-md-5">
                       <!-- Card -->
                       <div class="card">

                           <!-- Card image -->
                           <img class="card-img-top" src="{{url("/img/front/06.png")}}" alt="Card image cap">

                           <!-- Card content -->
                           <div class="card-body">

                               <!-- Title -->
                               <h4 class="card-title"><a>Truck</a></h4>
                               <!-- Text -->
                               <p class="card-text">I am the matched truck who is ordered by the loader and owned by the transporter..</p>
                               <!-- Button -->
                               <a href="#" class="btn btn-primary">Know more</a>

                           </div>

                       </div>
                       <!-- Card -->
                   </div>

                   <div class="col-md-4 py-3 px-md-5">
                       <!-- Card -->
                       <div class="card">

                           <!-- Card image -->
                           <img class="card-img-top" src="{{url("/img/front/07.png")}}" alt="Card image cap">

                           <!-- Card content -->
                           <div class="card-body">

                               <!-- Title -->
                               <h4 class="card-title"><a>Load</a></h4>
                               <!-- Text -->
                               <p class="card-text">I am the load and I wish to be delivered safely without people mocking at me.</p>
                               <!-- Button -->
                               <a href="#" class="btn btn-primary">Know more</a>

                           </div>

                       </div>
                       <!-- Card -->
                   </div>
                   <div class="col-md-4 py-3 px-md-5">
                       <!-- Card -->
                       <div class="card">

                           <!-- Card image -->
                           <img class="card-img-top" src="{{url("/img/front/08.png")}}" alt="Card image cap">

                           <!-- Card content -->
                           <div class="card-body">

                               <!-- Title -->
                               <h4 class="card-title"><a>Truck & Load</a></h4>
                               <!-- Text -->
                               <p class="card-text">Thank you “DeliVR” for bringing us together.</p>
                               <!-- Button -->
                               <a href="#" class="btn btn-primary">Know more</a>

                           </div>

                       </div>
                       <!-- Card -->
                   </div>
               </div>
            </div>
            <div class="col-md-12">

                <!-- Section: Contact v.1 -->
                <section class="my-5">

                    <!-- Section heading -->
                    <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
                    <!-- Section description -->
                    <p class="text-center w-responsive mx-auto pb-5">For customer and technical support call our support service @ +61-422-222-222 or write us @: support@delivr.com
                    </p>

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-5 mb-lg-0 mb-4">

                            <!-- Form with header -->
                            <div class="card">
                                <div class="card-body">
                                    <!-- Header -->
                                    <div class="form-header blue accent-1">
                                        <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
                                    </div>
                                    <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
                                    <!-- Body -->
                                    <div class="md-form">
                                        <i class="fas fa-user prefix grey-text"></i>
                                        <input type="text" id="form-name" class="form-control">
                                        <label for="form-name">Your name</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <input type="text" id="form-email" class="form-control">
                                        <label for="form-email">Your email</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-tag prefix grey-text"></i>
                                        <input type="text" id="form-Subject" class="form-control">
                                        <label for="form-Subject">Subject</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-pencil-alt prefix grey-text"></i>
                                        <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                                        <label for="form-text">Send message</label>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-light-blue">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Form with header -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-7">

                            <!--Google map-->
                            <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                                <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                        style="border:0" allowfullscreen></iframe>
                            </div>
                            <!-- Buttons-->
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <a class="btn-floating blue accent-1">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </a>
                                    <p>Melbourne, 3145</p>
                                    <p class="mb-md-0">Australia</p>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn-floating blue accent-1">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                    <p>+61 472-222-222</p>
                                    <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn-floating blue accent-1">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                    <p>support@delivr.com</p>
                                    <p class="mb-0">sale@delivr.com</p>
                                </div>
                            </div>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </section>
                <!-- Section: Contact v.1 -->
            </div>
            <!--Grid row-->
        </div>
    </main>

  @stop