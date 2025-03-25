@extends('frontend.layouts.app')

@section('content')
    <div class="slider-fade banner1 top-position1">
        <div class="owl-carousel owl-theme w-100">
            <!-- Our Expertise -->
            <div class=" item bg-img secondary-overlay" data-overlay-dark="8"
                data-background="{{ asset('v1') }}/img/bg-3.jpg">
                <br>
                <br>
                <br>
                <br>
                <div class="container">
                    <div class="text-center">
                        <h1 class="mb-4     " style="font-size: 24px;color:#f8f9fa">Our Services</h1>
                    </div>

                    <!-- Our Expertise Section -->
                    <div class="mb-5 p-4 bg-white rounded shadow">
                        <h2 class="text-primary" style="font-size: 22px;">Our Expertise</h2>
                        <p class="text-dark" style="font-size: 20px;">
                            We specialize in Immigration Law, including Asylum, Special Immigrant Juvenile Status (SIJS),
                            Family-Based Petitions, Divorce, Criminal Defense, and Accident Cases.
                        </p>
                    </div>

                    <!-- Personalized Legal Solutions Section -->
                    <div class="mb-5 p-4 bg-white rounded shadow">
                        <h2 class="text-primary" style="font-size: 22px;">Personalized Legal Solutions</h2>
                        <p class="text-dark" style="font-size: 20px;">
                            We provide tailored legal solutions to meet the unique needs of each client,
                            ensuring personalized attention and dedicated service.
                        </p>
                    </div>

                    <!-- Multi-Language Support Section -->
                    <div class="mb-5 p-4 bg-white rounded shadow">
                        <h2 class="text-primary" style="font-size: 22px;">Multi-Language Support</h2>
                        <p class="text-dark" style="font-size: 20px;">
                            Our services are available in English, Spanish, Hindi, Nepali, and Tibetan,
                            ensuring legal assistance is accessible to diverse communities.
                        </p>
                    </div>

                    <!-- Tagline Section -->
                    <div class="text-center mt-5">
                        <h3 class="text-primary" style="font-size: 22px;">“Immigrants Representing Immigrants”</h3>
                    </div>

                </div>
            </div>

        </div>
    </div>

    @include('frontend.home.section.service')
@endsection
