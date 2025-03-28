@extends('website.layouts.master')
@section('content')


<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('website/images/bg_1.jpg') }}');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
        data-scrollax-parent="true">
        <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We are here
                to help!</h2>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                <span>Law Office of Pema Lhamu Bhutia</span>
            </h1>
            {{-- <p><a href="{{ route('client.agreement') }}" class="btn btn-primary py-3 px-4"> <b>Entry Your Case</b> </a></p> --}}
        </div>
    </div>
</div>
</div>

<section class="ftco-section ftco-no-pb services-section">
<div class="container">
    <div class="row no-gutters d-flex">
        <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-auction"></span></div>
            <div class="media-body">
                <h3 class="heading mb-3"><a href="#">Get Your Legal Advice</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                </p>
            </div>
        </div>
        <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-lawyer"></span></div>
            <div class="media-body">
                <h3 class="heading mb-3"><a href="#">Work with Expert Lawyers</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                </p>
            </div>
        </div>
        <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-money"></span></div>
            <div class="media-body">
                <h3 class="heading mb-3"><a href="#">Have Great Discounted Rates</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                </p>
            </div>
        </div>
        <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="ion-ios-help-circle-outline"></span></div>
            <div class="media-body">
                <h3 class="heading mb-3"><a href="#">Review Your Case Documents</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                </p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-counter" id="section-counter">
<div class="container-fluid">
    <div class="row d-flex">
        <div class="col-md-6 d-flex">
            <div class="img d-flex align-self-stretch align-items-center justify-content-center"
                style="background-image:url('{{ asset('website/images/pema.avif') }}');">
                <a href="https://vimeo.com/45830194"
                    class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
            </div>
        </div>
        <div class="col-md-6 px-5 py-5">
            <div class="row justify-content-start pt-3 pb-3">
                <div class="col-md-12 heading-section ftco-animate">
                    <span class="subheading">My Bio</span>
                    <h2 class="mb-4">Law Office of Pema Lhamu Bhutia Stablished Since '.....'</h2>
                    <p>A founding member of the firm, Mrs. Bhutia who was born in India is an attorney in both India and the United States of America. Mrs. Bhutia, who is fluent in five languages, combines compassion and a deep understanding of the law to achieve success for her clients.  Mrs. Bhutia is a graduate of St. John's University School of Law In New York City.
                        Mrs. Bhutia does extensive work with our SIJS clients in obtaining green cards for unaccompanied minors in United States and has a reputation as a compassionate and tenacious advocate.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center py-4 bg-light mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lawyer"></span>
                            </div>
                            <strong class="number" data-number="500">0</strong>
                            <span>Qualified Lawyers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center py-4 bg-light mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-handshake"></span>
                            </div>
                            <strong class="number" data-number="2000">0</strong>
                            <span>Trusted Clients</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center py-4 bg-light mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="ion-ios-checkbox-outline"></span>
                            </div>
                            <strong class="number" data-number="1500">0</strong>
                            <span>Successful Cases</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center py-4 bg-light mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-medal"></span>
                            </div>
                            <strong class="number" data-number="100">0</strong>
                            <span>Honors &amp; Awards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-section bg-light">
<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Practice Areas</span>
            <h2 class="mb-4">Practice Areas</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-family"></span>
                </div>
                <h3><a href="#">Family Law</a></h3>
            </div>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-auction"></span>
                </div>
                <h3><a href="#">Business Law</a></h3>
            </div>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-shield"></span>
                </div>
                <h3><a href="#">Insurance Law</a></h3>
            </div>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-handcuffs"></span>
                </div>
                <h3><a href="#">Criminal Law</a></h3>
            </div>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-house"></span>
                </div>
                <h3><a href="#">Property Law</a></h3>
            </div>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-employee"></span>
                </div>
                <h3><a href="#">Employment Law</a></h3>
            </div>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-fire"></span>
                </div>
                <h3><a href="#">Fire Accident</a></h3>
            </div>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-money"></span>
                </div>
                <h3><a href="#">Financial Law</a></h3>
            </div>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-medicine"></span>
                </div>
                <h3><a href="#">Drug Offenses</a></h3>
            </div>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-handcuffs"></span>
                </div>
                <h3><a href="#">Sexual Offenses</a></h3>
            </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-section bg-secondary">
<div class="container-fluid">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Our Attorney</span>
            <h2 class="mb-4">Our Legal Attorneys</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="block-2 ftco-animate">
                <div class="flipper">
                    <div class="front"
                        style="background-image: url('{{ asset('website/images/person_1.html') }}');">
                        <div class="box">
                            <h2>Richard Anderson</h2>
                            <p>Civil Lawyer</p>
                        </div>
                    </div>
                    <div class="back">
                        <!-- back content -->
                        <blockquote>
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is
                                an almost unorthographic life One day however a small line of blind text by the
                                name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('website/') }}/images/person_1.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Richard Anderson <span class="position">Civil
                                    Lawyer</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="block-2 ftco-animate">
                <div class="flipper">
                    <div class="front"
                        style="background-image: url('{{ asset('website/images/person_2.html') }}');">
                        <div class="box">
                            <h2>Jefford Maxillin</h2>
                            <p>Business Lawyer</p>
                        </div>
                    </div>
                    <div class="back">
                        <!-- back content -->
                        <blockquote>
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is
                                an almost unorthographic life One day however a small line of blind text by the
                                name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('website/images/person_2.jpg') }}" alt="">
                            </div>
                            <div class="name align-self-center">Jefford Maxillin<span
                                    class="position">Business Lawyer</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="block-2 ftco-animate">
                <div class="flipper">
                    <div class="front"
                        style="background-image: url('{{ asset('website/images/person_3.html') }}');">
                        <div class="box">
                            <h2>Carlos Obing</h2>
                            <p>Criminal Defense</p>
                        </div>
                    </div>
                    <div class="back">
                        <!-- back content -->
                        <blockquote>
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is
                                an almost unorthographic life One day however a small line of blind text by the
                                name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('website/images/person_3.jpg') }}" alt="">
                            </div>
                            <div class="name align-self-center">Carlos Obing <span class="position">Criminal
                                    Defense</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="block-2 ftco-animate">
                <div class="flipper">
                    <div class="front"
                        style="background-image: url('{{ asset('website/images/person_4.html') }}');">
                        <div class="box">
                            <h2>Nathan Smith</h2>
                            <p>Insurance Lawyer</p>
                        </div>
                    </div>
                    <div class="back">
                        <!-- back content -->
                        <blockquote>
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is
                                an almost unorthographic life One day however a small line of blind text by the
                                name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('website/images/person_4.jpg') }}" alt="">
                            </div>
                            <div class="name align-self-center">Nathan Smith <span class="position">Insurance
                                    Lawyer</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section class="ftco-consultation">
<div class="container-fluid">
    <div class="row d-md-flex">
        <div class="half d-flex justify-content-center align-items-center img"
            style="background-image: url('{{ asset('website/images/bg_1.jpg') }}');">
            <div class="overlay"></div>
            <div class="desc text-center">
                <div class="icon"><span class="flaticon-auction"></span></div>
                <h1><a href="#">Law Office of
                    <br><span>Pema Lhamu Bhutia </span></a></h1>
            </div>
        </div>
        <div class="half p-3 p-md-5 ftco-animate">
            <h3 class="mb-4">Free Consultation</h3>
            <form action="#">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send message" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
</section>

<section class="ftco-section testimony-section bg-secondary">
<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-4">Happy Clients</h2>
        </div>
    </div>
    <div class="row ftco-animate">
        <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
                <div class="item">
                    <div class="testimony-wrap text-center py-4 pb-5">
                        <div class="user-img mb-4"
                            style="background-image: url('{{ asset('website/images/person_1.jpg') }}');">
                            <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                        </div>
                        <div class="text p-3">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="name">Arthur Browner</p>
                            <span class="position">Client</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap text-center py-4 pb-5">
                        <div class="user-img mb-4"
                            style="background-image: url('{{ asset('website/images/person_2.jpg') }}');">
                            <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                        </div>
                        <div class="text p-3">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="name">Arthur Browner</p>
                            <span class="position">Client</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap text-center py-4 pb-5">
                        <div class="user-img mb-4"
                            style="background-image: url('{{ asset('website/images/person_3.jpg') }}');">
                            <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                        </div>
                        <div class="text p-3">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="name">Arthur Browner</p>
                            <span class="position">Client</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap text-center py-4 pb-5">
                        <div class="user-img mb-4"
                            style="background-image: url('{{ asset('website/images/person_4.jpg') }}');">
                            <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                        </div>
                        <div class="text p-3">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="name">Arthur Browner</p>
                            <span class="position">Client</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap text-center py-4 pb-5">
                        <div class="user-img mb-4"
                            style="background-image: url('{{ asset('website/images/person_3.jpg') }}');">
                            <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                        </div>
                        <div class="text p-3">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="name">Arthur Browner</p>
                            <span class="position">Client</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-section bg-light">
<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Our Blog</span>
            <h2>Recent Blog</h2>
        </div>
    </div>
    <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
                <a href="blog-single.html" class="block-20"
                    style="background-image: url('{{ asset('website/images/image_1.jpg') }}');">
                </a>
                <div class="text p-4 float-right d-block">
                    <div class="topper d-flex align-items-center">
                        <div class="one py-2 pl-3 pr-1 align-self-stretch">
                            <span class="day">15</span>
                        </div>
                        <div class="two pl-0 pr-3 py-2 align-self-stretch">
                            <span class="yr">2019</span>
                            <span class="mos">January</span>
                        </div>
                    </div>
                    <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a>
                    </h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary
                        regelialia.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
                <a href="blog-single.html" class="block-20"
                    style="background-image: url('{{ asset('website/images/image_2.jpg') }}');">
                </a>
                <div class="text p-4 float-right d-block">
                    <div class="topper d-flex align-items-center">
                        <div class="one py-2 pl-3 pr-1 align-self-stretch">
                            <span class="day">12</span>
                        </div>
                        <div class="two pl-0 pr-3 py-2 align-self-stretch">
                            <span class="yr">2019</span>
                            <span class="mos">January</span>
                        </div>
                    </div>
                    <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a>
                    </h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary
                        regelialia.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
                <a href="blog-single.html" class="block-20"
                    style="background-image: url('{{ asset('website/images/image_3.jpg') }}');">
                </a>
                <div class="text p-4 float-right d-block">
                    <div class="topper d-flex align-items-center">
                        <div class="one py-2 pl-3 pr-1 align-self-stretch">
                            <span class="day">10</span>
                        </div>
                        <div class="two pl-0 pr-3 py-2 align-self-stretch">
                            <span class="yr">2019</span>
                            <span class="mos">January</span>
                        </div>
                    </div>
                    <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a>
                    </h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary
                        regelialia.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section class="ftco-gallery">
<div class="container-wrap">
    <div class="row no-gutters">
        <div class="col-md-3 ftco-animate">
            <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center"
                style="background-image: url('{{ asset('website/images/image_1.jpg') }}');">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
            </a>
        </div>
        <div class="col-md-3 ftco-animate">
            <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center"
                style="background-image: url('{{ asset('website/images/image_2.jpg') }}');">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
            </a>
        </div>
        <div class="col-md-3 ftco-animate">
            <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center"
                style="background-image: url('{{ asset('website/images/image_3.jpg') }}');">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
            </a>
        </div>
        <div class="col-md-3 ftco-animate">
            <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center"
                style="background-image: url('{{ asset('website/images/image_4.jpg') }}');">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
            </a>
        </div>
    </div>
</div>
</section>

<section class="ftco-section-parallax bg-secondary">
<div class="parallax-img d-flex align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2>Subcribe to our Newsletter</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts. Separated they live in</p>
                <div class="row d-flex justify-content-center mt-4 mb-4">
                    <div class="col-md-8">
                        <form action="#" class="subscribe-form">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Enter email address">
                                <input type="submit" value="Subscribe" class="submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
