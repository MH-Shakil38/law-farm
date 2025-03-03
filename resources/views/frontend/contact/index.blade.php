@extends('frontend.layouts.app')
@section('content')
<!-- PAGE TITLE
        ================================================== -->
        <section class="top-position1 pt-0">
            <div class="page-title-section bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ asset('v1') }}/img/bg/bg-04.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title">
                                <h1>Contact Us</h1>
                                <div class="heading-seprator"></div>
                                <p class="text-white fs-4 mb-0 letter-spacing-2">“Please contact us so we can help you”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="#!">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT US
        ================================================== -->
        <section class="pt-0">
            <div class="container">
                <div class="section-heading">
                    <span class="alt-font">Contact Us</span>
                    <h2>We are here to help you</h2>
                </div>
                <div class="row mt-n1-9">
                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="bg-img cover-background py-6 secondary-overlay" data-overlay-dark="8" data-background="{{ asset('v1') }}/img/content/contact-img-01.jpg">
                            <div class="d-table h-100 w-100 text-center">
                                <div class="d-table-cell h-100 w-100 align-middle">
                                    <div class="position-relative z-index-1">
                                        <i class="ti-direction-alt display-4 text-white d-block mb-4"></i>
                                        <h4 class="text-white">Visit Our Place</h4>
                                        <p class="mb-2-3 mb-lg-5 text-white">14 Branches Over The World</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info">
                            <span class="d-block mb-1">Phone: (+44) 123 456 7892</span>
                            <span class="d-block">Email: addyour@emailhere</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="bg-img cover-background py-6 secondary-overlay" data-overlay-dark="8" data-background="{{ asset('v1') }}/img/content/contact-img-02.jpg">
                            <div class="d-table h-100 w-100 text-center">
                                <div class="d-table-cell h-100 w-100 align-middle">
                                    <div class="position-relative z-index-1">
                                        <i class="ti-headphone-alt display-4 text-white d-block mb-4"></i>
                                        <h4 class="text-white">Quick Contact</h4>
                                        <p class="mb-2-3 mb-lg-5 text-white">Get Quick Touch With Us</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info">
                            <span class="d-block mb-1">66 Guild Street 512B,</span>
                            <span class="d-block mb-0">Great NT.</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="bg-img cover-background py-6 secondary-overlay" data-overlay-dark="8" data-background="{{ asset('v1') }}/img/content/contact-img-03.jpg">
                            <div class="d-table h-100 w-100 text-center">
                                <div class="d-table-cell h-100 w-100 align-middle">
                                    <div class="position-relative z-index-1">
                                        <i class="ti-time display-4 text-white d-block mb-4"></i>
                                        <h4 class="text-white">Visit Between</h4>
                                        <p class="mb-2-3 mb-lg-5 text-white">Business Hours For Only Office</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info">
                            <span class="d-block mb-1">Mon - Sat: 9:00 to 6:00</span>
                            <span class="d-block mb-0">Sun : Holiday</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT FORM
        ================================================== -->
        <section class="pt-0">
            <div class="container">
                <div class="row justify-content-center mt-lg-3">
                    <div class="col-lg-12">
                        <div class="box-shadows">
                            <div class="row">
                                <div class="col-lg-6 pe-lg-0">
                                    <img class="h-100 w-100" src="{{ asset('v1') }}/img/content/contact-img-04.jpg" alt="...">
                                </div>
                                <div class="col-lg-6 ps-lg-0">
                                    <div class="p-1-6 p-sm-1-9 p-lg-2-5">
                                        <h3 class="mb-3 text-secondary">Call us or fill the form</h3>
                                        <p class="mb-1-6">If you're searching out advice, please fill out this form. We will discover you and get in touch.</p>
                                        <form class="quform" action="https://lawyer.websitelayout.net/quform/contact.php" method="post" enctype="multipart/form-data" onclick="">
                                            <div class="quform-elements">
                                                <div class="row">

                                                    <!-- Begin Text input element -->
                                                    <div class="col-md-6">
                                                        <div class="quform-element">
                                                            <label for="name">Your Name <span class="quform-required">*</span></label>
                                                            <div class="quform-input">
                                                                <input class="form-control" id="name" type="text" name="name" placeholder="Your name here">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- End Text input element -->

                                                    <!-- Begin Text input element -->
                                                    <div class="col-md-6">
                                                        <div class="quform-element">
                                                            <label for="email">Your Email <span class="quform-required">*</span></label>
                                                            <div class="quform-input">
                                                                <input class="form-control" id="email" type="text" name="email" placeholder="Your email here">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Text input element -->

                                                    <!-- Begin Text input element -->
                                                    <div class="col-md-6">
                                                        <div class="quform-element quform-select-replaced">
                                                            <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                                            <div class="quform-input">
                                                                <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- End Text input element -->

                                                    <!-- Begin Text input element -->
                                                    <div class="col-md-6">
                                                        <div class="quform-element">
                                                            <label for="phone">Contact Number</label>
                                                            <div class="quform-input">
                                                                <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- End Text input element -->

                                                    <!-- Begin Textarea element -->
                                                    <div class="col-md-12">
                                                        <div class="quform-element">
                                                            <label for="message">Message <span class="quform-required">*</span></label>
                                                            <div class="quform-input">
                                                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Textarea element -->

                                                    <!-- Begin Captcha element -->
                                                    <div class="col-md-12">
                                                        <div class="quform-element">
                                                            <div class="form-group">
                                                                <div class="quform-input">
                                                                    <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="quform-captcha">
                                                                    <div class="quform-captcha-inner">
                                                                        <img src="{{ asset('v1') }}/quform/images/captcha/courier-new-light.png" alt="...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Captcha element -->

                                                    <!-- Begin Submit button -->
                                                    <div class="col-md-12">
                                                        <div class="quform-submit-inner">
                                                            <button class="butn md butn-hover" type="submit"><span>Send Message</span></button>
                                                        </div>
                                                        <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                                    </div>
                                                    <!-- End Submit button -->

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAP
        ================================================== -->
        <div>
            <iframe width="100%" height="550" id="gmap_canvas" src="https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
        </div>

@endsection
