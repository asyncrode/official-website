@extends('layout-landing.template')
@section('content')
<!-- start hero -->
<section class="hero-one-3 justify-content-center position-relative overflow-hidden" id="home"
    style="background-image: url({{asset('assets/xolcy/images/hero-one-3-bg.png')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-5">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item mt-1 active">
                            <div class="hero-one-3-content text-center">
                                <span class="badge-lg bg-soft-primary text-primary text-uppercase rounded">Find Your
                                    Element</span>
                                <h1 class="fw-light hero-title my-4">
                                    Powering Business
                                </h1>
                                <p class="fs-16 text-muted">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
                                    Est error maxime ullam veritatis beatae impedit sit illo nulla nemo dolor
                                    mollitia ea unde.
                                </p>

                                <a href="#" class="btn btn-outline-primary mt-4">Discover more</a>
                                <a href="#" class="btn btn-primary ms-2 mt-4">Contact us</a>
                            </div>
                        </div>
                        <div class="carousel-item mt-1">
                            <div class="hero-one-3-content text-center">
                                <span class="badge-lg bg-soft-primary text-primary text-uppercase rounded">Multi
                                    purpose theme</span>
                                <h1 class="fw-light hero-title my-4">
                                    To Grow Business
                                </h1>
                                <p class="fs-16 text-muted mb-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
                                    Est error maxime ullam veritatis beatae impedit sit illo nulla nemo dolor
                                    mollitia ea unde.
                                </p>

                                <a href="#" class="btn btn-outline-primary">Discover more</a>
                            </div>
                        </div>
                        <div class="carousel-item mt-1">
                            <div class="hero-one-3-content text-center">
                                <span class="badge-lg bg-soft-primary text-primary text-uppercase rounded">Start
                                    Connecting</span>
                                <h1 class="fw-light hero-title my-4">
                                    With Online Customers
                                </h1>
                                <p class="fs-16 text-muted mb-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
                                    Est error maxime ullam veritatis beatae impedit sit illo nulla nemo dolor
                                    mollitia ea unde.
                                </p>

                                <a href="#" class="btn btn-outline-primary">Discover more</a>
                                <a href="#" class="btn btn-primary ms-2">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 hero-one-3-bottom p-0 position-absolute end-0 bottom-0 start-0">
                <img class="img-fluid d-block w-100" src="{{asset('assets/xolcy/images/hero-one-3-bottom-img.png')}}"
                    alt="" />
            </div>
        </div>
    </div>
</section>
<!-- end hero -->

<!-- start services -->
<section class="section" id="services">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h2 class="fs-3 fw-medium lh-1 text-dark mb-3">Our Services</h2>
                <p class="text-muted">
                    We craft digital, graphic and dimensional thinking, to create category leading brand experiences
                    that have meaning and add a value for our clients.
                </p>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card rounded service-box-one border">
                    <div class="card-body p-4 m-2">
                        <i class="icon-xl service-icon sw-1" data-feather="alert-octagon"></i>
                        <h5 class="service-title fs-18 my-4">Awesome Support</h5>
                        <p class="service-subtitle pb-4">Some quick example text to build on the card title and make up
                            the bulk of the card's content platform.</p>
                        <a class="fw-medium align-middle" href="">Learn More <i class="icon-xs"
                                data-feather="chevrons-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card rounded service-box-one border active">
                    <div class="card-body p-4 m-2">
                        <i class="icon-xl sw-1 service-icon" data-feather="droplet"></i>
                        <h5 class="service-title fs-18 my-4">Dynamic Growth</h5>
                        <p class="service-subtitle pb-4">Credibly brand standards compliant users without extensible
                            services. Anibh euismod tincidunt.</p>
                        <a class="fw-medium align-middle" href="">Learn More <i class="icon-xs"
                                data-feather="chevrons-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card rounded service-box-one border">
                    <div class="card-body p-4 m-2">
                        <i class="icon-xl sw-1 service-icon" data-feather="minimize"></i>
                        <h5 class="service-title fs-18 my-4">Branding Identity</h5>
                        <p class="service-subtitle pb-4">Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, and large language ocean neary.</p>
                        <a class="fw-medium align-middle" href="">Learn More <i class="icon-xs"
                                data-feather="chevrons-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card rounded service-box-one border">
                    <div class="card-body p-4 m-2">
                        <i class="icon-xl sw-1 service-icon" data-feather="message-circle"></i>
                        <h5 class="service-title fs-18 my-4">Solutions Business</h5>
                        <p class="service-subtitle pb-4">It is a paradisematic country, in which roasted parts of
                            sentences fly into your mouth leave for the far World.</p>
                        <a class="fw-medium align-middle" href="">Learn More <i class="icon-xs"
                                data-feather="chevrons-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card rounded service-box-one border">
                    <div class="card-body p-4 m-2">
                        <i class="icon-xl sw-1 service-icon" data-feather="copy"></i>
                        <h5 class="service-title fs-18 my-4">Digital Design</h5>
                        <p class="service-subtitle pb-4">Even the all-powerful Pointing has no control about the blind
                            texts it is an almost unorthographic.</p>
                        <a class="fw-medium align-middle" href="">Learn More <i class="icon-xs"
                                data-feather="chevrons-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card rounded service-box-one border">
                    <div class="card-body p-4 m-2">
                        <i class="icon-xl sw-1 service-icon" data-feather="shield"></i>
                        <h5 class="service-title fs-18 my-4">Goal Business</h5>
                        <p class="service-subtitle pb-4">Question Marks and devious Semikoli, but the Little Blind Text
                            didn’t listen. She packed her seven versalia.</p>
                        <a class="fw-medium align-middle" href="">Learn More <i class="icon-xs"
                                data-feather="chevrons-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end services -->

<!-- our features -->
<section class="section bg-light" id="feature">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="position-relative">
                    <img class="img-fluid rounded" src="images/feature.jpg" alt="" />
                    <div class="rounded bg-primary text-center text-white user-box d-none d-lg-block px-5 py-4">
                        <img class="img-fluid" src="images/counter-img-3.png" alt="" />
                        <h3 class="fw-light mt-3 mb-0">200+ Users</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 mt-sm-0 mt-5">
                <h6 class="text-uppercase text-primary mb-3">Features</h6>
                <h3 class="text-dark mb-4">Modern & Powerful Interface</h3>
                <p class="text-muted mb-4">In an ideal world this website wouldn’t exist, a client would acknowledge the
                    importance design starts.</p>
                <h6 class="text-dark pb-3"><i class="icon-xs text-primary me-3" data-feather="activity"></i>Strategy
                    Solution</h6>
                <h6 class="text-dark pb-4"><i class="icon-xs text-primary me-3" data-feather="credit-card"></i>Easy to
                    Customize</h6>
                <a href="#" class="btn btn-primary">Learn more <i class="icon-xs" data-feather="chevrons-right"></i></a>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end features -->

<!--what client says -->
<section class="section" id="review">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h2 class="fs-3 fw-medium lh-1 text-dark mb-3">What Client Says</h2>
                <p class="text-muted">
                    It is a long established fact that create category leading brand experiences a reader will be
                    distracted by the readable content of a page when looking at its layout.
                </p>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <div class="client-slider-one">
                    <div>
                        <div class="border client-box">
                            <div class="row align-items-center">
                                <div class="col-lg-4 align-middle border-end name-box">
                                    <i class="icon-lg sw-1 text-primary mt-3" data-feather="message-circle"></i>
                                    <h5 class="text-dark fs-18 text-truncate mt-4">Jordan Dakin</h5>
                                    <p class="text-muted mb-3">Web Designer</p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-muted ps-lg-3">
                                        I feel confident imposing change on myself. It's a lot more fun progressing than
                                        looking back. That's why scelerisque pretium dolor, sit amet vehicula erat
                                        pelleque need throw curve balls.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border client-box">
                            <div class="row align-items-center">
                                <div class="col-lg-4 align-middle border-end name-box">
                                    <i class="icon-lg sw-1 text-primary mt-3" data-feather="message-circle"></i>
                                    <h5 class="text-dark fs-18 text-truncate mt-4">Ebony Downe</h5>
                                    <p class="text-muted mb-3">CEO, Founder</p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-muted ps-lg-3">
                                        Our task must be to free ourselves by widening our circle of compassion to
                                        embrace all living creatures Integer varius lacus non magna tempor congue
                                        natuasre the whole its beauty.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border client-box">
                            <div class="row align-items-center">
                                <div class="col-lg-4 align-middle border-end name-box">
                                    <i class="icon-lg sw-1 text-primary mt-3" data-feather="message-circle"></i>
                                    <h5 class="text-dark fs-18 text-truncate mt-4">Sophie Gant</h5>
                                    <p class="text-muted mb-3">Web Developer</p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-muted ps-lg-3">
                                        I've learned that people will forget what you said, people will forget what you
                                        did, but people will never aliquam in nunc quis tincidunt forget how you
                                        vestibulum egestas them feel.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border client-box">
                            <div class="row align-items-center">
                                <div class="col-lg-4 align-middle border-end name-box">
                                    <i class="icon-lg sw-1 text-primary mt-3" data-feather="message-circle"></i>
                                    <h5 class="text-dark fs-18 text-truncate mt-4">Ruben reed</h5>
                                    <p class="text-muted mb-3">Web Designer</p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-muted ps-lg-3">
                                        Those must scelerisque pretium dolor, sit amet vehicula be to free ourselves by
                                        widening our circle of compassion to embrace all living creatures and the whole
                                        of quis consectetur nunc sit
                                        amet semper justo. nature and its beauty.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border client-box">
                            <div class="row align-items-center">
                                <div class="col-lg-4 align-middle border-end name-box">
                                    <i class="icon-lg sw-1 text-primary mt-3" data-feather="message-circle"></i>
                                    <h5 class="text-dark fs-18 text-truncate mt-4">Eva Pearce</h5>
                                    <p class="text-muted mb-3">PHP Developer</p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-muted ps-lg-3">
                                        Our task must be to free ourselves by widening our circle of compassion to
                                        embrace all living creatures and the whole of quis consectetur nunc sit amet
                                        semper justo. nature and its beauty.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end what client says -->

<!-- start counter -->
<section class="section" style="background-image: url(images/counterbg.jpg); background-position: center;"
    id="portfolio">
    <div class="bg-overlay position-absolute top-0 end-0 bottom-0 start-0"></div>

    <div class="container">
        <div class="row" id="counter">
            <div class="col-sm-3 col-6">
                <div class="text-white text-center my-sm-0 my-5">
                    <img class="img-fluid mb-4" src="images/counter-img-1.png" alt="" />
                    <h3 class="mb-2"><span class="counter_value" data-target="2570">0</span><sup>+</sup></h3>
                    <h4 class="fw-light fs-18">Projects Done</h4>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="text-white text-center my-sm-0 my-5">
                    <img class="img-fluid mb-4" src="images/counter-img-2.png" alt="" />
                    <h3 class="mb-2"><span class="counter_value" data-target="300">0</span><sup>+</sup></h3>
                    <h4 class="fw-light fs-18">Awards Wins</h4>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="text-white text-center my-sm-0 my-5">
                    <img class="img-fluid mb-4" src="images/counter-img-3.png" alt="" />
                    <h3 class="mb-2"><span class="counter_value" data-target="4500">0</span><sup>+</sup></h3>
                    <h4 class="fw-light fs-18">Happy Clients</h4>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="text-white text-center my-sm-0 my-5">
                    <img class="img-fluid mb-4" src="images/counter-img-4.png" alt="" />
                    <h3 class="mb-2"><span class="counter_value" data-target="270">0</span><sup>+</sup></h3>
                    <h4 class="fw-light fs-18">Country</h4>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>

    <!-- end container -->
</section>
<!-- end counter -->

<!-- our pricing  -->
<section class="section pricing-bg" id="pricing">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h2 class="fs-3 fw-medium lh-1 text-dark mb-3">Our Pricing</h2>
                <p class="text-muted">
                    We thrive when coming up with innovative ideas but also understand that a smart concept should be
                    supported with faucibus sapien odio measurable results.
                </p>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="price-box border rounded bg-white text-center p-5">
                    <h1 class="fw-light text-dark mb-2 price-title">Free</h1>
                    <h4 class="text-muted fs-18 fw-normal pb-2">Per Month</h4>
                    <div class="mt-5">
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Online Space : 500MB</p>
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Bandwidth : 1.5GB</p>
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Support : Yes</p>
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Hidden Fees : No</p>
                    </div>
                    <a href="#" class="btn btn-primary mt-5">
                        Choose Plan
                        <i class="icon-xs" data-feather="chevrons-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="price-box border bg-white rounded text-center p-5">
                    <h1 class="fw-light text-dark mb-2 price-title">62<sup>$</sup></h1>
                    <h4 class="text-muted fs-18 fw-normal pb-2">Per Month</h4>
                    <div class="mt-5">
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Online Space : 500MB</p>
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Bandwidth : 1.5GB</p>
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Support : Yes</p>
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Hidden Fees : No</p>
                    </div>
                    <a href="#" class="btn btn-primary mt-5">
                        Choose Plan
                        <i class="icon-xs" data-feather="chevrons-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="price-box border rounded bg-white text-center p-5">
                    <h1 class="fw-light text-dark mb-2 price-title">299<sup>$</sup></h1>
                    <h4 class="text-muted fs-18 fw-normal pb-2">Per Month</h4>
                    <div class="mt-5">
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Online Space : 500MB</p>
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Bandwidth : 1.5GB</p>
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Support : Yes</p>
                        <p class="text-dark my-3 mb-0"><i class="icon-xs text-primary me-2"
                                data-feather="chevrons-right"></i>Hidden Fees : No</p>
                    </div>
                    <a href="#" class="btn btn-primary mt-5">
                        Choose Plan
                        <i class="icon-xs" data-feather="chevrons-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end our-pricing -->

<!-- brand-logo -->
<section class="brand-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 my-4">
                <img class="img-fluid mx-auto brand-logo" src="images/brand-logo-1.png" alt="" />
            </div>
            <div class="col-md-3 col-6 my-4">
                <img class="img-fluid mx-auto brand-logo" src="images/brand-logo-2.png" alt="" />
            </div>
            <div class="col-md-3 col-6 my-4">
                <img class="img-fluid mx-auto brand-logo" src="images/brand-logo-3.png" alt="" />
            </div>
            <div class="col-md-3 col-6 my-4">
                <img class="img-fluid mx-auto brand-logo" src="images/brand-logo-4.png" alt="" />
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end-container -->
</section>
<!-- end brand logo -->

<!-- start contact us -->
<section class="section bg-light"
    style="background: url(images/contact-bg.png); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h2 class="text-dark mb-3">Contact Us</h2>
                <p class="text-muted">To achieve this, it would be necessary to have uniform grammar, pronunciation and
                    more common that of the individual languages.</p>
            </div>
        </div>
        <!-- end row -->

        <!-- start form -->
        <form method="post" name="myForm" onsubmit="return validateForm()">
            <span id="error-msg"></span>
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="fw-medium form-label" for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Your name" id="name" />
                        </div>
                        <!-- end col -->
                        <div class="col-md-6 mb-3">
                            <label class="fw-medium form-label" for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Your email" id="email" />
                        </div>
                        <!-- end col -->
                        <div class="col-md-6 mb-3">
                            <label class="fw-medium form-label" for="subject">Subject</label>
                            <input type="text" class="form-control" placeholder="your subject" id="subject" />
                        </div>
                        <!-- end col -->
                        <div class="col-md-6 mb-3">
                            <label class="fw-medium form-label" for="number">Contact</label>
                            <input type="text" class="form-control" placeholder="+00 1234 5678 90" id="number" />
                        </div>
                        <!-- end col -->
                        <div class="col-12 mb-3">
                            <label class="fw-medium form-label" for="comments">Message</label>
                            <textarea class="form-control" id="comments" placeholder="Enter your message..."
                                rows="5"></textarea>
                        </div>
                        <!-- end col -->
                        <div class="col-12">
                            <input type="submit" id="submit" name="send" class="btn btn-primary mt-2"
                                value="Send message" />
                        </div>
                        <!-- end col -->
                    </div>
                </div>
            </div>
            <!-- end row -->
        </form>
        <!-- end form -->
    </div>
    <!-- end container -->
</section>
<!-- end contact us -->
@endsection