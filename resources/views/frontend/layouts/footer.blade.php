<footer class="bg-secondary pt-0">
    <div class="container border-bottom border-color-light-white py-2-5 py-md-6 mb-6 mb-md-8 mb-lg-10">
        <div class="row justify-content-center mt-n1-9">
            <div class="col-sm-6 col-lg-4 mt-1-9">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('v1') }}/img/icons/icon-07.png" alt="...">
                    </div>
                    <div class="flex-grow-1 borders-start border-color-light-white ps-4 ms-3">
                        <h5 class="text-white">Request quote</h5>
                        <p class="text-white mb-0 display-31 opacity9">Send us your request</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-1-9">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('v1') }}/img/icons/icon-08.png" alt="...">
                    </div>
                    <div class="flex-grow-1 borders-start border-color-light-white ps-4 ms-3">
                        <h5 class="text-white">Investigation</h5>
                        <p class="text-white mb-0 display-31 opacity9">We will investigate about your case</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-1-9">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('v1') }}/img/icons/icon-09.png" alt="...">
                    </div>
                    <div class="flex-grow-1 borders-start border-color-light-white ps-4 ms-3">
                        <h5 class="text-white">Case fight</h5>
                        <p class="text-white mb-0 display-31 opacity9">We will fight your case in court</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-n2-6">
            <div class="col-sm-6 col-xl-3 mt-2-6">
                <div class="mb-1-6 mb-lg-1-9">
                    <a href="void:javascript()" class="footer-logo"><img src="{{ asset('logo2.png') }}" width="200px"
                            alt="..."></a>
                </div>
                <p class="text-white mb-1-6 mb-lg-1-9 opacity9 display-30 display-lg-29">
                    <strong>Office Hours:</strong><br>
                    Monday - Friday: 9:00 AM to 5:00 PM <br>
                    Saturday: 9:00 AM to 2:00 PM <br>
                    Sunday: Holiday
                </p>

                <ul class="footer-social-style1">
                    <li><a href="void:javascript()"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="void:javascript()"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="void:javascript()"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="void:javascript()"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-xl-3 mt-2-6">
                <div class="ps-sm-1-6 ps-md-1-9">
                    <h3 class="footer-title">Contact us</h3>
                    <ul class="contact-list">
                        <li><span class="fas fa-map-marker-alt pe-3 text-white"></span>40-01 80th Street, 2 Fl. Queens,
                            New York 11373</li>
                        <li><span class="fa fa-phone-alt pe-3 text-white"></span><a href="tel:+(929) 330-6462">(929)
                                330-6462</a></li>
                        <li><span class="fa fa-phone-alt pe-3 text-white"></span><a href="tel:+(718) 651-1577">(718)
                                651-1577</a></li>
                        <li><span class="fas fa-globe pe-3 text-white"></span><a
                                href="https://attorneypema.com/">www.attorneypema.com</a></li>
                        <li><span class="fa fa-envelope pe-3 text-white"></span><a
                                href="mailto:info@attorneypema.com">info@attorneypema.com</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 mt-2-6">
                <div class="ps-xl-1-9">
                    <h3 class="footer-title">Our Services</h3>
                    <ul class="footer-list-style1">
                        @forelse (service_menu() as $service)
                            @php
                                $child = $service->child->count() > 0 ? true : false;
                            @endphp
                            <li>
                                @if ($child)
                                <a href="{{ route('service.details', $service->id) }}" data-bs-toggle="collapse"
                                    data-bs-target="#{{ Str::slug($service->name) }}" aria-expanded="false"
                                    aria-controls="{{ Str::slug($service->name) }}">
                                    {{ $service->name }}
                                </a>
                                @else
                                <a href="{{ route('service.details', $service->id) }}">
                                    {{ $service->name }}
                                </a>
                                @endif

                                <ul id="{{ Str::slug($service->name) }}" class="submenu collapse">
                                    @forelse ($service->child as $info)
                                        <li><a href="{{ route('service.details', $info->id) }}">{{ $info->name }}</a>
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>

            <script>
                // Bootstrap Collapse icon toggle fix
                document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(function(toggle) {
                    toggle.addEventListener('click', function() {
                        const icon = toggle.querySelector('.toggle-icon');
                        setTimeout(() => {
                            icon.textContent = document.querySelector(toggle.dataset.bsTarget).classList
                                .contains('show') ? '▲' : '▼';
                        }, 200); // Delay to allow Bootstrap to toggle collapse
                    });
                });
            </script>





<div class="col-sm-6 col-xl-3 mt-2-6">
    <div class="ps-sm-1-6 ps-md-1-9">
        <h3 class="footer-title">Important Legal Links</h3>
        <ul class="contact-list">
            <!-- Privacy Policy Link -->
            <li>
                <span class="fas fa-shield-alt pe-3 text-white"></span>
                <a href="{{ route('privacy.policy') }}" class="text-white">Privacy Policy</a>
            </li>
            <!-- Terms and Conditions Link -->
            <li>
                <span class="fas fa-gavel pe-3 text-white"></span>
                <a href="{{ route('terms.conditions') }}" class="text-white">Terms and Conditions</a>
            </li>
            <!-- Disclaimer Link (Optional) -->
            <li>
                <span class="fas fa-exclamation-circle pe-3 text-white"></span>
                <a href="disclaimer" class="text-white">Disclaimer</a>
            </li>
            <!-- Cookies Policy Link (Optional) -->
            <li>
                <span class="fas fa-cookie pe-3 text-white"></span>
                <a href="{{ route('cookies.policy') }}" class="text-white">Cookies Policy</a>
            </li>
            <!-- Contact Us Link -->
            <li>
                <span class="fa fa-envelope pe-3 text-white"></span>
                <a href="/contact" class="text-white">Contact Us</a>
            </li>
        </ul>
    </div>
</div>

        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="d-inline-block text-white mb-0 display-30 display-lg-29">&copy; <span
                            class="current-year"></span> Lawyer Powered by&nbsp;<a href="https://attorneypema.com/"
                            class="text-primary white-hover">Pema Lhamu Bhutia</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
