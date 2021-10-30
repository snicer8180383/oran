@extends('layout.master')

@section('title', 'Home | Oran')

@section('content')
        <!-- home
            ================================================== -->
        <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="{{asset('/images/hero-bg.jpg')}}"
            data-natural-width=3000 data-natural-height=2000 data-position-y=center>
            <div class="overlay"></div>
            <div class="shadow-overlay"></div>
            <div class="home-content">
                <div class="row home-content__main">
                    <h3>Welcome to oran</h3>
                    <h1>
                        We are a creative group <br>
                        of people who design.
                    </h1>
                    <div class="home-content__buttons">
                        <a href="#contact" class="smoothscroll btn btn--stroke">
                            Start a Project
                        </a>
                        <a href="#about" class="smoothscroll btn btn--stroke">
                            More About Us
                        </a>
                    </div>
                </div>
                <div class="home-content__scroll">
                    <a href="#about" class="scroll-link smoothscroll">
                        <span>Scroll Down</span>
                    </a>
                </div>
                <div class="home-content__line"></div>
            </div> <!-- end home-content -->
            <ul class="home-social">
                {{--<li>
                    <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
                </li>--}}
                <li>
                    <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                </li>
                {{--<li>
                    <a href="#0"><i class="fa fa-linkedin" aria-hidden="true"></i><span>LinkedIn</span></a>
                </li>--}}
                <li>
                    <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
                </li>
            </ul>
            <!-- end home-social -->
        </section>
        <!-- end s-home -->
        <!-- about
            ================================================== -->
        <section id='about' class="s-about">
            <div class="row section-header has-bottom-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead subhead--dark">Hello There</h3>
                    <h1 class="display-1 display-1--light">We Are oran</h1>
                </div>
            </div> <!-- end section-header -->
            <div class="row about-desc" data-aos="fade-up">
                <div class="col-full">
                    <p style="font-family: 'Poppins', sans-serif;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt.
                    </p>
                </div>
            </div> <!-- end about-desc -->
            <div class="about__line"></div>
        </section>
        <!-- end s-about -->

        <!-- services
            ================================================== -->
        <section id='services' class="s-services">
            <div class="row section-header has-bottom-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">What We Do</h3>
                    <h1 class="display-2">We’ve got everything you need to launch and grow your business</h1>
                </div>
            </div> <!-- end section-header -->
            <div class="row services-list block-1-2 block-tab-full">
                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-paint-brush"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Brand Identity</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                        </p>
                    </div>
                </div>
                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-megaphone"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Marketing</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                        </p>
                    </div>
                </div>
                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-earth"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Web Design</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                        </p>
                    </div>
                </div>
                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon"><i class="icon-lego-block"></i></div>
                    <div class="service-text">
                        <h3 class="h2">Web Development</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                        </p>
                    </div>
                </div>
            </div> <!-- end services-list -->
        </section>
        <!-- end s-services -->

        <!-- works
            ================================================== -->
        <section id='works' class="s-works">
            <div class="intro-wrap">
                <div class="row section-header light-sep" data-aos="fade-up">
                    <div class="col-full">
                        <h3 class="subhead">Recent Works</h3>
                        <h1 class="display-2 display-2--light">We love what we do, check out some of our latest works</h1>
                        <a href="{{ url('/projects') }}" class="btn btn--stroke white-hover">
                            Projects
                        </a>
                    </div>
                </div> <!-- end section-header -->
            </div> <!-- end intro-wrap -->
        </section>
        <!-- end s-works -->

        <!-- contact
            ================================================== -->
        <section id="contact" class="s-contact">
            <div class="contact__line"></div>
            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Contact Us</h3>
                    <h1 class="display-2 display-2--light">Reach out for a new project or just say hello</h1>
                </div>
            </div>
            <div class="row contact-content" data-aos="fade-up">
                <div class="contact-primary">
                    <h3 class="h6">Send Us A Message</h3>
                    <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                        <fieldset>
                            <div class="form-field">
                                <input name="contactName" type="text" id="contactName" placeholder="Your Name" value=""
                                    minlength="2" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value=""
                                    required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value=""
                                    class="full-width">
                            </div>
                            <div class="form-field">
                                <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10"
                                    cols="50" required="" aria-required="true" class="full-width"></textarea>
                            </div>
                            <div class="form-field">
                                <button class="full-width btn--primary">Submit</button>
                                <div class="submit-loader">
                                    <div class="text-loader">Sending...</div>
                                    <div class="s-loader">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <!-- contact-warning -->
                    <div class="message-warning">
                        Something went wrong. Please try again.
                    </div>
                    <!-- contact-success -->
                    <div class="message-success">
                        Your message was sent, thank you!<br>
                    </div>
                </div> <!-- end contact-primary -->
                <div class="contact-secondary">
                    <div class="contact-info">
                        <h3 class="h6 hide-on-fullwidth">Contact Info</h3>
                        <div class="cinfo">
                            <h5>Where to Find Us</h5>
                            <p>
                                Comming soon!
                            </p>
                        </div>
                        <div class="cinfo">
                            <h5>Email Us At</h5>
                            <p>
                                geral@oran.pt
                            </p>
                        </div>
                        <div class="cinfo">
                            <h5>Call Us At</h5>
                            <p>
                                Mobile: (+351) 910 536 024<br>
                            </p>
                        </div>
                        <ul class="contact-social">
                            <li>
                                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            </li>
                        </ul> <!-- end contact-social -->
                    </div> <!-- end contact-info -->
                </div> <!-- end contact-secondary -->
            </div> <!-- end contact-content -->
        </section>
        <!-- end s-contact -->
@endsection

@section('javascript')
    <script>
        
    </script>
@endsection