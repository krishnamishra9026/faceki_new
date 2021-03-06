@extends('layouts.app')

@section('content')
        <!-- ======== Start Slider ======== -->
        <section class="slider d-flex align-items-center" id="slider">
            <div class="container">
                <div class="content">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <div class="left">
                                <h2>Create safer, more accessible <br>user experiences for all <br>powered by face recognition.
									<!--The next generation of user authontication technology--></h2>
                                    <p>
                                        <strong>Next generation log-in capability for your Portals & Apps.</strong>
                                    </p>
                                    <p>
                                    FACEKI is a Facial Recognition authentication platform. It's a highly secure cloud-based cross-devices technology. Which can be integrated easily with online platforms, websites, and apps to provide them with a powerful facial recognition login capabilities.

									We are not just make login to accounts so simple and seamless to access but  we are making it more secure than ever.
                                </p>
                               <!--  <a href="{{ route('register') }}" class="btn-1">Get Started</a> -->
                              <!--   <a href="/docs" class="btn-2">View documention</a> -->
                            </div>
                        </div>
                        <!-- Right-->
                        <div class="col-md-6">
                            <div class="right">
                                <img src="{{ asset('saas/img/faceki-login2.gif') }}" alt="slider-img" class="img-fluid wow fadeInRight" data-wow-offset="1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End Slider ======== -->
        <!-- ======== Start Features ======== -->
        <section class="features" id="features">
            <div class="container text-center">
                <div class="heading">
                    <h2>WHY FACEKI?</h2>
                </div>
                <div class="line"></div>
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('saas/img/homeicons/seamless.png') }}" alt="feature-1">
							<h3>Fast Seamless </br>
								& Highly Secure</h3>
                            <p>No more time wasted on remembering the correct password, or calling support to help accessing accounts. With face recognition technology you grantee access for right users when then need it, and where they need it. 
                            </p>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('saas/img/homeicons/Cross-plat-dev.png') }}" alt="feature-1">
							<h3>Cross-Platform</br>Cross-Devices</h3>
                            <p>Stop relying to different devices to provide such a technology and unify your user experience with FACEKI cross-devices cross-platform capabilities. It ensures a smooth user experience over the board.</p>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('saas/img/homeicons/api-fast.png') }}" alt="feature-1">
							<h3>Easy & Fast</br>to Integrate</h3>
                            <p>Our cloud based technology makes it easier for you to implement facial recognition technology to your current platforms with our easy to use APIs, documentation and support</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======== End Features ======== -->

        <!-- ======== Start Some Facts ======== -->
        <section class="some-facts">
            <div class="container text-center">
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <img src="{{ asset('saas/img/some-fact/1b.png') }}" alt="some-fact-1">
                            <h3>
                                <span class="counter">99.63</span>%</h3>
                            <div class="line mx-auto"></div>
                            <h4>ACCURACY</h4>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <img src="{{ asset('saas/img/some-fact/4.png') }}" alt="some-fact-1">
                            <h3><
                                <span class="counter">1</span> sec</h3>
                            <div class="line mx-auto"></div>
                            <h4>RESPONSE SPEED</h4>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <img src="{{ asset('saas/img/some-fact/1.png') }}" alt="some-fact-1">
                            <h3>
                                State of the Art</h3>
                            <div class="line mx-auto"></div>
                            <h4>SECURITY</h4>
                        </div>
                    </div>
                    <!-- Box-4 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <img src="{{ asset('saas/img/some-fact/3.png') }}" alt="some-fact-1">
                            <h3>
                                Millions of faces</h3>
                            <div class="line mx-auto"></div>
                            <h4>SCALABILITY</h4>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- ======== End Some Facts ======== -->

        <!-- ======== Start Project ======== -->
        <section class="project">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <!-- Left -->
                    <div class="col-md-6">
                        <img src="{{ asset('saas/img/Time.gif') }}" alt="project" class="img-fluid">
                    </div>
                    <!-- Right -->
                    <div class="col-md-5">
                        <div class="right">
                            <span>Take the hassle out of the equation </span>
                            <?php /*?><h1>Trully Seamless</h1>
							<h2>61% of users are unlikely to return to a site if they had trouble accessing it</h2><?php */?>
							<h1>Bad user experience is a weakness</h1>
                            <p>
                                It's more than a way of log-in. It's a user experience, 61% of users are unlikely to return to a site if they had trouble accessing it. The service or solution that you are providing are useless unless they are available for users when they want them and where they want them. 
                                <br><br>
                                The less hassle it is for a user to access your service the more frequent going to use it. With FACEKI, it's never been easier to access your data. No more searching for password, or calling customer supports, it's as easy as turning up in front of your device. 
								<br><br><br>
							<img src="{{ asset('saas/img/FK-icons.png') }}" alt="project" class="img-fluid">
							
							</p>
                         <!--   <a href="#0" class="btn-1">Get Started</a>  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End Project ======== -->

        <!-- ======== Start Video ======== -->
        <section class="video">
            <div class="container text-center">
                <div class="video-icon">
                    <div class="icon-abs">
                        <!-- <a href="https://www.youtube.com/watch?v=S6lzo-OWoqI" class="icon pulse expand video-link">  -->
						<a href="" class="icon pulse expand video-link">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End Video ======== -->

        <!-- ======== Start Benefits ======== -->
        <section class="benefits" id="benefits">
            <div class="container text-center">
                <div class="heading">
                    <h2>FEATURES</h2>
                </div>
                <div class="line"></div>
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box mb-30">
                            <img src="{{ asset('saas/img/homeicons/fast.png') }}" width="80" alt="benefits">
                            <h3>Seamless Verification</h3>
                            <p>Supper quick verification of uses in less that 1 sec.</p>

                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box mb-30">
                            <img src="{{ asset('saas/img/homeicons/secure.png') }}" width="80" alt="benefits">
                            <h3>Secure</h3>
                            <p>99.63% accuracy in verifying faces coupled with TLS validation, AES-128 XTS encryption.</p>

                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box mb-30">
                            <img src="{{ asset('saas/img/homeicons/anti-fraud.png') }}" width="80" alt="benefits">
                            <h3>Anti-Fraud & KYC</h3>
                            <p>Ensure security by checking the liveness of faces.</p>

                        </div>
                    </div>
                    <!-- Box-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="{{ asset('saas/img/homeicons/api.png') }}" width="80" alt="benefits">
                            <h3>Functional APIs</h3>
                            <p>Ready-to-use API for your application. Generate API tokens.</p>

                        </div>
                    </div>
                    <!-- Box-5 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="{{ asset('saas/img/homeicons/scale.png') }}" width="80" alt="benefits">
                            <h3>Built for Global Scale</h3>
                            <p>Grow with confidence, authenticate  10 million faces in approx. the same time as 1 face.</p>

                        </div>
                    </div>
                    <!-- Box-6 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                                <img src="{{ asset('saas/img/homeicons/fast-imp.png') }}" width="80" alt="benefits">
                            <h3>Easy & Fast Implementation</h3>
                            <p>It's cloud based and accessible from any where with ease.</p>

                        </div>
                    </div>
                    <!-- Box-7 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="{{ asset('saas/img/homeicons/cross-platform.png') }}" width="80" alt="benefits">
                            <h3>Cross-Platform</h3>
                            <p>Can be accessed and used from any platform a user uses.</p>

                        </div>
                    </div>
                    <!-- Box-8 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                                <img src="{{ asset('saas/img/homeicons/cross-devices.png') }}" width="80" alt="benefits">
                            <h3>Cross-Devices</h3>
                            <p>Its device independent, and not relying on any specific hardware or device.</p>

                        </div>
                    </div>
                    <!-- Box-9 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                                <img src="{{ asset('saas/img/homeicons/experience.png') }}" width="80" alt="benefits">
                            <h3>Unified Experience</h3>
                            <p>Give users the same login experience over the board not matter what they are using to access your service.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="{{ asset('saas/img/homeicons/ai.png') }}" width="80" alt="benefits">
                            <h3>Leading Edge AI</h3>
                            <p>Powered by our leading edge Artificial Intelligence technology to detect spoofing and Froud.</p>

                        </div>
                    </div>
                    <!-- Box-8 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                                <img src="{{ asset('saas/img/homeicons/cloud.png') }}" width="80" alt="benefits">
                            <h3>Cloud Based</h3>
                            <p>No need to costly hardware setup and implementation. FACEKI is available and accessible from anywhere.</p>

                        </div>
                    </div>
                    <!-- Box-9 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                                <img src="{{ asset('saas/img/homeicons/affordable.png') }}" width="80" alt="benefits">
                            <h3>Affordable</h3>
                            <p>Start-up friendly and affordable to all type of businesses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End Benifits ======== -->

        <!-- ======== Start Get Started ======== -->
        <section class="get-started">
            <div class="container text-center">
                <span>Get in-Touch</span>
                <h2>For your FREE trial today</h2>
             <!--   <a href="#0" class="btn-1">Get Started</a>  -->

            </div>
        </section>
        <!-- ======== End Get Started ======== -->

        <!-- ======== Start Testimonial section hidden ======== -->
	
      <?php /*?>  <section class="testimonials">
            <div class="container text-center">
                <div class="heading">
                    <h2>Testimonials</h2>
                </div>
                <div class="line"></div>
                <div class="slick-slider">
                    <!-- Box-1 -->
                    <div class="box">
                        <img src="{{ asset('saas/img/testimonials/1.png') }}" alt="" class="m-auto">
                        <h3>Jack Fritz</h3>
                        <span>Fullstack Devloper</span>
                        <p>
                            Using SaaSWeb I was able to build the SAAS of my dreams. It was so easy to get started and customize.
                        </p>
                    </div>
                    <!-- Box-1 -->
                    <div class="box">
                        <img src="{{ asset('saas/img/testimonials/2.png') }}" alt="" class="m-auto">
                        <h3>Mohamed Moaz</h3>
                        <span>Developer</span>
                        <p>
                            It's the best solution for creating the Software as a Service of your dreams.
                        </p>
                    </div>
                    <!-- Box-1 -->
                    <div class="box">
                        <img src="{{ asset('saas/img/testimonials/3.png') }}" alt="" class="m-auto">
                        <h3>Pascal Brin</h3>
                        <span>Developer</span>
                        <p>
                            Creating a SaaS is now easier with SaaSWeb.
                            I was able to save my development team hundreds of hours!
                        </p>
                    </div>
                    <div class="box">
                            <img src="{{ asset('saas/img/testimonials/4.png') }}" alt="" class="m-auto">
                            <h3>Hector Mark</h3>
                            <span>Developer</span>
                            <p>
                                    Everything worked perfectly. I was pleasantly surprised by how user-friendly the whole setup process was.
                            </p>
                        </div>
                </div>
            </div>
        </section>
        <!-- ======== End Testimonial ======== --><?php */?>

        <!-- ======== Start Our Price ======== -->




        <!-- ======== End Our Price ======== -->


        <!-- ======== Start Clients ======== -->
      <!--
		<section class="clients">
            <div class="container">
                <div class="slick-slider-clients">
                    <div class="item"><img src="{{ asset('saas/img/clients/1.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/2.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/3.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/4.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/5.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/1.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/2.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/3.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/4.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/5.png') }}" alt="" class="img-fluid"></div>
                </div>
            </div>
        </section>     -->
        <!-- ======== End Clients ======== -->

        <!-- ======== Start Contact Us ======== -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="heading text-center">
                    <h2>Keep In Touch</h2>
                    <div class="line"></div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="title">
                            <h3>Contact Us :</h3>
                            <p>Have a question? Give us a call or fill out the form. We'd love to hear from you.</p>
                        </div>
                        <div class="content">
                            <!-- Info-1 -->
                            <div class="info d-flex align-items-start">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h4 class="d-inline-block">PHONE :
                                    <br>
                                    <span>+973 77344377</span></h4>
                            </div>
                            <!-- Info-2 -->
                            <div class="info d-flex align-items-start">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h4 class="d-inline-block">EMAIL :
                                    <br>
                                    <span>info@faceki.com</span></h4>
                            </div>
                            <!-- Info-3 -->
                            <div class="info d-flex align-items-start">
                                <i class="fa fa-street-view" aria-hidden="true"></i>
                                <h4 class="d-inline-block">ADDRESS :<br>
                                    <span>Manama, Kingdom of Bahrain</span></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7" id="contact-form-id">

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form method="POST" action="/contact">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="name" required class="form-control" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="email" required class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" name="subject" class="form-control" required placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" required name="comment" rows="5" id="comment" placeholder="Message"></textarea>
                            </div>
                            <button class="btn btn-block" type="submit">Send Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('scripts')
<script type="text/javascript">
    var data = "{{ session('success') }}";
    if (data != '') {
        window.location.hash = '#contact';
        $.scrollTo($("#contact-form-id"), { duration: 0});
    }
    function goToLink() {
        window.location.hash = '#contact';
    }
</script>
@endsection
