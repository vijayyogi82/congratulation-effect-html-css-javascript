@extends('front.layouts.app')
@section('content')

    <!--==== sliders ====-->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('front/assets/images/banner1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('front/assets/images/banner1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('front/assets/images/banner1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--===== partners =====-->
    <div class="mb-4 clients py-5">
        <h2 class="text-center">Founders & Marketers Love Us</h2>
        <p class="text-center">Trusted by 50,000+ Businesses across 53+ Countries</p>
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="scroll-container">
                            <div class="scroll-content d-flex">
                                <!-- Company Logos -->
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img" src="{{ asset('front/assets/images/facebook.png') }}"
                                                alt="Facebook">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img" src="{{ asset('front/assets/images/linkdin.png') }}" alt="Company Logo">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img" src="{{ asset('front/assets/images/snapchat.png') }}" alt="Google">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img"
                                                src="{{ asset('front/assets/images/tiktok.png') }}"
                                                alt="TikTok">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img" src="{{ asset('front/assets/images/twitter.png') }}" alt="LinkedIn">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img" src="{{ asset('front/assets/images/telegram.png') }}" alt="Company Logo">
                                        </div>
                                    </a>
                                </div>
                                <!-- Repeat for Continuous Effect -->
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img" src="{{ asset('front/assets/images/google.png') }}"
                                                alt="Facebook">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img" src="{{ asset('front/assets/images/facebook.png') }}"
                                                alt="Facebook">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img" src="{{ asset('front/assets/images/linkdin.png') }}" alt="Company Logo">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img" src="{{ asset('front/assets/images/snapchat.png') }}" alt="Google">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img" src="{{ asset('front/assets/images/linkdin.png') }}" alt="LinkedIn">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="#">
                                        <div class="logo-item">
                                            <img class="logo-img"
                                                src="{{ asset('front/assets/images/tiktok.png') }}" alt="TikTok">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==== advance features ====-->
    <section id="advance-features mb-4">
        <div class="container">
            <h2 class="text-center">Advance Features</h2>
            <div class="row align-items-center mb-4">
                <div class="col-md-6 col-sm-12 mt-4">
                    <strong class="feature-heading">Run Ads that Click to WhatsApp</strong>
                    <p class="feature-paragraph">Run Ads on Facebook & Instagram that land on WhatsApp. 5X Your lead
                        generations & 2-3X
                        Conversions Instantly!</p>
                    <p class="feature-paragraph">Run Ads from AiSensy, smartly segregate your leads and build Chatbot
                        Flows to automate
                        everything!</p>
                    <a href="#" class="btn btn-success">Explore &rarr;</a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img id="feature-image1" class="img-fluid" src="{{ asset('front/assets/images/cv34jxb668zg37ir.png') }}" alt="Feature Image 1">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12">
                    <img id="feature-image2" class="img-fluid" src="{{ asset('front/assets/images/xtrgseoeah85459l.png') }}" alt="Feature Image 2">
                </div>
                <div class="col-md-6 col-sm-12 mt-4">
                    <strong class="feature-heading">Build WhatsApp Forms</strong>
                    <p class="feature-paragraph">Capture Leads & collect useful information Directly in WhatsApp Chats
                        with WhatsApp Forms.</p>
                    <p class="feature-paragraph">From feedback to gathering user insights, collect it all on WhatsApp.
                    </p>
                    <a href="#" class="btn btn-success">Explore &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== broadcast ======= -->
    <section id="broadcast" class="my-4">
        <div class="container mt-2">
            <div class="row align-items-center">
                <!-- Left Section with Text and Broadcast Items -->
                <div class="col-md-6">
                    <h2 class="mb-4">Broadcast Promotional Messages (Officially)</h2>
                    <p class="mb-4">Enjoy a Limitless Broadcasting experience on WhatsApp</p>
    
                    <div class="my-2 broadcast-item">
                        🔊
                        <strong>8+ Powerful Messaging Categories</strong>
                        <p>Send Promotions, Offers, Coupon codes, Carousels and More- Risk-Free!</p>
                    </div>
                    <div class="my-2 broadcast-item">
                        ❤️
                        <strong>Add CTAs. Drive 3x Conversions</strong>
                        <p>Turn conversations into conversions with eye-catching CTA and Quick Reply buttons</p>
                    </div>
                    <div class="my-2 broadcast-item">
                        Ⓜ️
                        <strong>Schedule your WhatsApp messages</strong>
                        <p>Streamline your work, Schedule Broadcasts 2 months ahead of time</p>
                    </div>
    
                    <button class="btn btn-success rounded-pill mt-2">Start 14-Day FREE Trial &rarr;</button>
                </div>
    
                <!-- Right Section with Image -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('front/assets/images/9cjgk3b00lqobza2.png') }}" alt="Broadcast Image" style="height: 400px; object-fit: contain;">
                </div>
            </div>
        </div>
    </section>

    <!--==== videos section ====-->
    <section id="short-videos" class="container mt-5">
        <h2 class="text-center mb-4">Whatsconnect Short Videos</h2>
        <div id="shortVideosCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Carousel Inner -->
            <div class="carousel-inner">
                <!-- First Row of Videos -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 1.2k 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 5.6k 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 900 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 2.1k 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 2.3k 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 4.5k 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 1.5k 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 3.8k 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 2.3k 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 4.5k 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 1.5k 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 3.8k 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Row of Videos -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 1.2k 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 5.6k 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 900 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 2.1k 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 2.3k 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 4.5k 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 1.5k 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 3.8k 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 2.3k 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 4.5k 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-4">
                            <div class="card bg-default text-white position-relative" style="aspect-ratio: 10/14;">
                                <video class="card-img" src="" autoplay muted loop
                                    style="object-fit: cover; height: 100%;"></video>
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <div class="badge bg-primary position-absolute bottom-0 start-0 m-2 px-3 py-1">
                                        ❤️ 1.5k 
                                    </div>
                                    <div class="badge bg-secondary position-absolute bottom-0 end-0 m-2 px-3 py-1">
                                        👀 3.8k 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#shortVideosCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#shortVideosCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!--==== Why WhatsApp? ====-->
    <section id="why-choose" class="my-5 p-5 bg-gradient">
        <h2 class="text-center text-white fw-bold mb-3">Why Choose Whatsconnect?</h2>
        <p class="text-center text-light fs-5 mb-5">The best platform for connecting, engaging, and sharing your moments</p>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <div class="reason-card text-center p-4">
                        <i class="fas fa-users fa-3x mb-3 text-primary"></i>
                        <h4 class="text-white fw-bold">Global Community</h4>
                        <p class="text-light">Join millions of users worldwide and expand your network like never
                            before.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="reason-card text-center p-4">
                        <i class="fas fa-video fa-3x mb-3 text-success"></i>
                        <h4 class="text-white fw-bold">High-Quality Video Sharing</h4>
                        <p class="text-light">Share your short videos with crystal-clear quality and stunning visuals
                            for your audience.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="reason-card text-center p-4">
                        <i class="fas fa-shield-alt fa-3x mb-3 text-danger"></i>
                        <h4 class="text-white fw-bold">Enhanced Security</h4>
                        <p class="text-light">Your data and privacy are our top priority. We ensure a safe and secure
                            environment for all users.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="reason-card text-center p-4">
                        <i class="fas fa-rocket fa-3x mb-3 text-warning"></i>
                        <h4 class="text-white fw-bold">Fast and Easy Navigation</h4>
                        <p class="text-light">Navigate the platform seamlessly with a clean and easy-to-use interface
                            designed for speed.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="reason-card text-center p-4">
                        <i class="fas fa-cogs fa-3x mb-3 text-info"></i>
                        <h4 class="text-white fw-bold">Customizable Features</h4>
                        <p class="text-light">Tailor your experience with a variety of customizable settings that suit
                            your needs.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="reason-card text-center p-4">
                        <i class="fas fa-heart fa-3x mb-3 text-danger"></i>
                        <h4 class="text-white fw-bold">Engage with Love</h4>
                        <p class="text-light">Stay connected with your followers and create meaningful interactions
                            using likes, shares, and comments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="my-5 p-5 bg-light">
        <div class="container">
            <h2 class="text-center text-dark fw-bold mb-4">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="faqAccordion">

                <!-- First FAQ Item -->
                <div class="accordion-item bg-transparent border-0">
                    <h2 class="accordion-header" id="faqHeadingOne">
                        <button class="accordion-button collapsed bg-gradient text-white" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="false"
                            aria-controls="faqCollapseOne">
                            What does AiSensy do?
                        </button>
                    </h2>
                    <div id="faqCollapseOne" class="accordion-collapse collapse" aria-labelledby="faqHeadingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body bg-white text-dark">
                            AiSensy provides advanced AI-driven solutions to enhance your marketing strategies, enabling
                            personalized and efficient customer engagement across various platforms.
                        </div>
                    </div>
                </div>

                <!-- Second FAQ Item -->
                <div class="accordion-item bg-transparent border-0">
                    <h2 class="accordion-header" id="faqHeadingTwo">
                        <button class="accordion-button collapsed bg-gradient text-white" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false"
                            aria-controls="faqCollapseTwo">
                            Is Whatsconnect an Official WhatsApp Marketing Platform?
                        </button>
                    </h2>
                    <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body bg-white text-dark">
                            Yes, Whatsconnect is an officially recognized WhatsApp Marketing Platform, designed to help
                            businesses effectively reach and engage their audience through WhatsApp.
                        </div>
                    </div>
                </div>

                <!-- Third FAQ Item -->
                <div class="accordion-item bg-transparent border-0">
                    <h2 class="accordion-header" id="faqHeadingThree">
                        <button class="accordion-button collapsed bg-gradient text-white" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false"
                            aria-controls="faqCollapseThree">
                            Does Whatsconnect offer a FREE Trial?
                        </button>
                    </h2>
                    <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body bg-white text-dark">
                            Absolutely! Whatsconnect offers a 14-day free trial, allowing you to explore all our premium
                            features and see how they can benefit your business without any commitment.
                        </div>
                    </div>
                </div>

                <!-- Add more FAQ items as needed -->

            </div>
        </div>
    </section>

    <!--==== testimonial =====-->
    <div class="my-custom-carousel">
        <h2>What Our Clients Say</h2>
        <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#customCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#customCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#customCarousel" data-bs-slide-to="2"></li>
                <li data-bs-target="#customCarousel" data-bs-slide-to="3"></li>
            </ol>
    
            <!-- Carousel Items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-box">
                        <div class="img-box"><img src="{{ asset('front/assets/images/review1.png') }}" alt=""></div>
                        <p class="testimonial"><strong> Phasellus vitae suscipit justo... </strong> </p>
                        <p class="overview">"WhatsConnect makes communication seamless and easy, improving business operations with fast, reliable messaging solutions."</p>
                        <div class="star-rating">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Additional Items -->
                <div class="carousel-item">
                    <div class="testimonial-box">
                        <div class="img-box"><img src="{{ asset('front/assets/images/review2.png') }}" alt=""></div>
                        <p class="testimonial"><strong>Lorem ipsum dolor sit amet...</strong></p>
                        <p class="overview">"A game-changer for businesses, WhatsConnect integrates messaging into workflow, saving time and boosting productivity."</p>
                        <div class="star-rating">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-box">
                        <div class="img-box"><img src="{{ asset('front/assets/images/review3.png') }}" alt=""></div>
                        <p class="testimonial"><strong>Lorem ipsum dolor sit amet...</strong></p>
                        <p class="overview">"WhatsConnect streamlines communication, offering simple integration and enhancing team collaboration with efficient messaging tools."</p>
                        <div class="star-rating">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-box">
                        <div class="img-box"><img src="{{ asset('front/assets/images/review4.png') }}" alt=""></div>
                        <p class="testimonial"><strong>Lorem ipsum dolor sit amet...</strong></p>
                        <p class="overview">"WhatsConnect is incredibly user-friendly, offering smooth messaging that enhances customer support and internal communication."</p>
                        <div class="star-rating">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Controls -->
            <a class="carousel-control-prev" href="#customCarousel" role="button" data-bs-slide="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                </svg>
            </a>
            <a class="carousel-control-next" href="#customCarousel" role="button" data-bs-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                </svg>
            </a>
        </div>
    </div>

    <!-- ===== lead form ===== -->
    <section id="whatsapp-lead-section" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row align-items-stretch">
                        <div class="col-md-6 p-0">
                            <div id="whatsapp-lead-form"
                                class="p-4 shadow rounded-start bg-light d-flex flex-column justify-content-center h-100">
                                <h4 class="text-success fw-bold mb-3 text-center">Connect with Us</h4>
                                <form action="#" method="POST">
                                    <div class="mb-2">
                                        <input type="text" id="name-input" name="name" class="form-control rounded-pill"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="mb-2">
                                        <input type="email" id="email-input" name="email"
                                            class="form-control rounded-pill" placeholder="Your Email" required>
                                    </div>
                                    <div class="mb-2">
                                        <input type="tel" id="phone-input" name="phone"
                                            class="form-control rounded-pill" placeholder="Your Phone" required>
                                    </div>
                                    <div class="mb-2">
                                        <textarea id="message-input" name="message" rows="2"
                                            class="form-control rounded-3" placeholder="Your Message"
                                            required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success w-100 rounded-pill fw-bold">
                                        Send <i class="bi bi-whatsapp"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div id="whatsapp-lead-image-container" class="h-100">
                                <img src="{{ asset('front/assets/images/cv34jxb668zg37ir.png') }}"
                                    alt="Contact Us on WhatsApp" id="whatsapp-lead-image"
                                    class="img-fluid rounded-end h-100 w-100 object-fit-cover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>

@endsection


    