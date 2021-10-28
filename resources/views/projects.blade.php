@extends('layout.master')

@section('title', 'Home | Oran')

@section('styles')
    <style>
        .Projects-cover-1nk {
            margin-left: auto;
            margin-right: auto;
            max-width: 404px;
        }
        .ProjectCover-root-1aD .ProjectCover-cover-iX9.ProjectCover-cover-iX9 {
            max-width: initial;
        }
        .ProjectCoverNeue-root-2lV:not(.ProjectCoverNeue-noConstraints-1fY) {
            max-width: 404px;
            min-width: 145px;
        }
        .ProjectCoverNeue-root-2lV {
            position: relative;
        }
        .ProjectCover-details-1U4 {
            height: 53px;
            -webkit-box-pack: justify;
            justify-content: space-between;
            margin: 8px 0 0;
            max-width: initial;
        }
        .ProjectCover-details-1U4 {
            display: -webkit-box;
            display: flex;
            flex-wrap: nowrap;
            pointer-events: none;
            position: relative;
            width: 100%;
        }
        .Cover-cover-2mr {
            position: relative;
        }
        .Cover-wrapper-300:not(.Cover-noConstraints-PzQ) {
            height: 0;
        }
        .Cover-wrapper-300 {
            border-radius: 4px;
            display: block;
            padding-top: 78.22%;
            position: relative;
            width: 100%;
        }
        .ProjectCoverNeue-wrapper-3CL {
            background-color: #f2f2f2;
            position: relative;
        }
        .Cover-content-2R2 {
            border-radius: 4px;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }
        .DominantColor-dominantColor-2PM {
            border-radius: inherit;
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }
        .ProjectCoverNeue-loaded-KKQ .ProjectCoverNeue-image-13g {
            will-change: auto;
        }
        .ProjectCoverNeue-image-13g {
            -o-object-fit: cover;
            object-fit: cover;
            -webkit-transition: opacity .15s linear;
            transition: opacity .15s linear;
            width: 100%;
            will-change: transform;
        }
        .ProjectCoverNeue-image-13g, .ProjectCoverNeue-coverLink-2Hl.ProjectCoverNeue-coverLink-2Hl {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }
        .ProjectCoverNeue-image-13g {
            border-radius: 4px;
            display: block;
            overflow: hidden;
            width: 100%;
        }
        .ProjectCover-info-2a- {
            line-height: 1.2;
        }
        .ProjectCover-info-2a- {
            min-width: 0;
            padding-right: 15px;
            text-align: left;
        }
        .TitleOwner-limitHeight-2_Y .TitleOwner-title-3nP {
            max-height: 39px;
            max-width: 100%;
            overflow: hidden;
            color: #FF7300;
        }
        .Title-mediumTitle-J-V {
            font-size: 15px;
            padding-bottom: 0;
        }
        .Title-title-3nk {
            color: inherit;
            display: inline-block;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: -2px;
            max-height: 43px;
            max-width: 100%;
            overflow: hidden;
            padding-bottom: 2px;
            pointer-events: all;
            text-overflow: ellipsis;
        }
        a.Title-title-3nk{
            cursor: pointer;
            text-decoration: none;
        }
        .Owners-overflowText-3Yn {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .Owners-root-3c9 {
            pointer-events: all;
        }
        .TitleOwner-mediumOwner-NDt {
            font-size: 12px;
        }
        .TitleOwner-owner-1aG {
            font-size: 13px;
        }
        .Owners-root-3c9.Owners-dark-1Vh .Owners-owner-2lB {
            color: #191919;
        }
        .Owners-owner-2lB {
            color: inherit;
            top: 1px;
        }
        a.Owners-owner-2lB{
            cursor: pointer;
            text-decoration: none;
        }
        .projects{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .project-item{
            padding:10px !important;
            margin:0 10px;
            -webkit-transition: all 1s;
            -moz-transition: all 1s;
            -o-transition: all 1s;
            transition: all 1s;
        }
        .project-item:hover{
            box-shadow: rgba(149, 157, 165, 0.2) 0px 4px 12px;
            border-radius:10px !important;
        }
        .btn-close{
            padding: 0.5rem 0.5rem;
            margin: -0.5rem 0 -0.5rem auto;
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            color: #fff;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/2em auto no-repeat;
            border: 0;
            border-radius: 0.25rem;
            opacity: .5;
            -webkit-filter: invert(1);
            filter: invert(1);
        }
        .modal-backdrop{
            opacity:0.8 !important;
        }
        .arrow-before{
            bottom:0;
            right:0;
            position:fixed;
            margin-right:68%;
            z-index: 99999;
            color:#fff;
            margin-bottom:25px;
        }
        .arrow-before i.fa {
            display: inline-block;
            background-color:#343434;
            border-radius: 50%;
            box-shadow: 0px 0px 2px #888;
            padding: 0.4em 0.7em 0.4em 0.6em;
        }
        .arrow-after{
            bottom:0;
            left:0;
            position:fixed;
            margin-left:67.5%;
            z-index: 99999;
            color:#fff;
            margin-bottom:25px;
        }
        .arrow-after i.fa {
            display: inline-block;
            background-color:#343434;
            border-radius: 50%;
            box-shadow: 0px 0px 2px #888;
            padding: 0.4em 0.6em 0.4em 0.7em;
        }
    </style>
@endsection
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

    <!-- works
        ================================================== -->
    <section id='works' class="s-services">
        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                {{--<h3 class="subhead">What We Have Done</h3>--}}
                <h1 class="display-2 color-oran">What We Have Done</h1>
            </div>
        </div> <!-- end section-header -->
        <div class="row projects" style="width:100%;max-width:100%;">
            @foreach($projects as $key => $proj)
                <div class="col-md-3 project-item" data-aos="fade-up" onclick="project({{ $key }})">
                    <div class="ProjectCover-root-1aD Projects-cover-1nk">
                        <div class="ProjectCoverNeue-root-2lV ProjectCover-cover-iX9">
                            <div class="Cover-cover-2mr ProjectCoverNeue-loaded-KKQ">
                                <div class="Cover-wrapper-300">
                                    <div class="Cover-content-2R2">
                                        <div class="DominantColor-dominantColor-2PM" style="background-color:rgb(239, 229, 232);"></div>
                                        <img sizes="404px" src="{{asset('/images/projects').'/'.$proj['logo'] }}" alt="{{ $proj['nome'] }} - {{ $proj['work'] }}" loading="lazy" class="ProjectCoverNeue-image-13g">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ProjectCover-details-1U4">
                            <div class="ProjectCover-info-2a-">
                                <span class="TitleOwner-limitHeight-2_Y">
                                    <a class="Title-title-3nk Title-mediumTitle-J-V TitleOwner-title-3nP">{{ $proj['nome'] }}</a>
                                    <div class="Owners-root-3c9 Owners-dark-1Vh Owners-overflowText-3Yn TitleOwner-owner-1aG TitleOwner-mediumOwner-NDt">
                                        <span>
                                            <a class="Owners-owner-2lB">{{ $proj['work'] }}</a>
                                        </span>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- end services-list -->
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
    <div class="modal fade" id="project1" tabindex="-1" aria-labelledby="project1Label" aria-modal="true" role="dialog">
        <div class="arrow-before"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></div>
        <div class="modal-dialog modal-lg setas">
            <div class="modal-content" style="background-color:transparent;box-shadow:none;border:none;">
                <div class="modal-header" style="border-bottom:none;padding:15px;">
                    <h5 class="modal-title h4" id="project1Label" style="margin:0;color:#fff;">Full screen modal</h5>
                    <button type="button" class="btn-close" onclick="$('#project1').modal('hide');"></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('/images/projects/box_studios/baixo.jpg')}}" alt="" id="imgModal">
                </div>
            </div>
        </div>
        <div class="arrow-after"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></div>
    </div>
@endsection

@section('javascript')
    <script>
        function project(id){
            $('#project'+id).modal("show");
        }
        $('#imgModal').onclick(function(){
            if($('.modal-dialog').hasClass('modal-lg')){
                $('.modal-dialog').removeClass('modal-lg');
                $('.modal-dialog').addClass('modal-fullscreen');
            }else{
                $('.modal-dialog').removeClass('modal-fullscreen');
                $('.modal-dialog').addClass('modal-lg');
            }
        });
    </script>
@endsection