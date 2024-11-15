@extends('admin.layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>

        <div class="card-body position-relative"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);">
            <div class="content ">

                {{-- personal details --}}
                <div class="card mb-3">
                    <div class="card-header position-relative min-vh-25 mb-7">
                        <div class="bg-holder rounded-3 rounded-bottom-0"
                            style="background-image:url(../../assets/img/generic/4.jpg);"></div><!--/.bg-holder-->
                        <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm"
                                src="{{ asset(auth()->user()->image) }}" width="200" alt=""></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="mb-1"> {{ auth()->user()->name }}<span data-bs-toggle="tooltip"
                                        data-bs-placement="right" aria-label="Verified"
                                        data-bs-original-title="Verified"><svg
                                            class="svg-inline--fa fa-check-circle fa-w-16 text-primary"
                                            data-fa-transform="shrink-4 down-2" aria-hidden="true" focusable="false"
                                            data-prefix="fa" data-icon="check-circle" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""
                                            style="transform-origin: 0.5em 0.625em;">
                                            <g transform="translate(256 256)">
                                                <g transform="translate(0, 64)  scale(0.75, 0.75)  rotate(0 0 0)">
                                                    <path fill="currentColor"
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"
                                                        transform="translate(-256 -256)"></path>
                                                </g>
                                            </g>
                                        </svg><!-- <small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small> Font Awesome fontawesome.com --></span>
                                </h4>
                                <h5 class="fs-9 fw-normal">Designation...</h5>
                                <p class="text-500">{{ auth()->user()->address }}</p><button
                                    class="btn btn-falcon-primary btn-sm px-3" type="button">Following</button><button
                                    class="btn btn-falcon-default btn-sm px-3 ms-2" type="button">Message</button>
                                <div class="border-bottom border-dashed my-4 d-lg-none"></div>
                            </div>
                            <div class="col ps-2 ps-lg-3"><a class="d-flex align-items-center mb-2" href="#"><svg
                                        class="svg-inline--fa fa-user-circle fa-w-16 fs-6 me-2 text-700"
                                        data-fa-transform="grow-2" aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 496 512" data-fa-i2svg="" style="transform-origin: 0.484375em 0.5em;">
                                        <g transform="translate(248 256)">
                                            <g transform="translate(0, 0)  scale(1.125, 1.125)  rotate(0 0 0)">
                                                <path fill="currentColor"
                                                    d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"
                                                    transform="translate(-248 -256)"></path>
                                            </g>
                                        </g>
                                    </svg><!-- <span class="fas fa-user-circle fs-6 me-2 text-700" data-fa-transform="grow-2"></span> Font Awesome fontawesome.com -->
                                    <div class="flex-1">
                                        <h6 class="mb-0">{{ auth()->user()->phone }}</h6>
                                    </div>
                                </a><a class="d-flex align-items-center mb-2" href="#"><img
                                        class="align-self-center me-2" src="../../assets/img/logos/g.png"
                                        alt="Generic placeholder image" width="30">
                                    <div class="flex-1">
                                        <h6 class="mb-0">{{ auth()->user()->email }}</h6>
                                    </div>
                                </a>
                                {{-- <a class="d-flex align-items-center mb-2" href="#"><img
                                    class="align-self-center me-2" src="../../assets/img/logos/apple.png"
                                    alt="Generic placeholder image" width="30"> --}}
                                {{-- <div class="flex-1">
                              <h6 class="mb-0">Apple</h6>
                            </div> --}}
                                {{-- </a><a class="d-flex align-items-center mb-2" href="#"><img class="align-self-center me-2" src="../../assets/img/logos/hp.png" alt="Generic placeholder image" width="30">
                            <div class="flex-1">
                              <h6 class="mb-0">Hewlett Packard</h6>
                            </div>
                          </a> --}}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row g-0">
                    <div class="col-lg-8 pe-lg-2">
                        <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                                <h5 class="mb-0">Intro</h5>
                            </div>
                            <div class="card-body text-justify">
                                <p class="mb-0 text-1000">Dedicated, passionate, and accomplished Full Stack Developer with
                                    9+ years of progressive experience working as an Independent Contractor for Google and
                                    developing and growing my educational social network that helps others learn
                                    programming, web design, game development, networking.</p>
                                <div class="collapse show" id="profile-intro">
                                    <p class="mt-3 text-1000">I’ve acquired a wide depth of knowledge and expertise in using
                                        my technical skills in programming, computer science, software development, and
                                        mobile app development to developing solutions to help organizations increase
                                        productivity, and accelerate business performance. </p>
                                    <p class="text-1000">It’s great that we live in an age where we can share so much with
                                        technology but I’m but I’m ready for the next phase of my career, with a healthy
                                        balance between the virtual world and a workplace where I help others face-to-face.
                                    </p>
                                    <p class="text-1000 mb-0">There’s always something new to learn, especially in
                                        IT-related fields. People like working with me because I can explain technology to
                                        everyone, from staff to executives who need me to tie together the details and the
                                        big picture. I can also implement the technologies that successful projects need.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer bg-body-tertiary p-0 border-top"><button
                                    class="btn btn-link d-block w-100 btn-intro-collapse" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#profile-intro" aria-expanded="true"
                                    aria-controls="profile-intro">Show <span class="less">less<svg
                                            class="svg-inline--fa fa-chevron-up fa-w-14 ms-2 fs-11" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="chevron-up" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z">
                                            </path>
                                        </svg><!-- <span class="fas fa-chevron-up ms-2 fs-11"></span> Font Awesome fontawesome.com --></span><span
                                        class="full">full<svg class="svg-inline--fa fa-chevron-down fa-w-14 ms-2 fs-11"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                            </path>
                                        </svg><!-- <span class="fas fa-chevron-down ms-2 fs-11"></span> Font Awesome fontawesome.com --></span></button>
                            </div>
                        </div>
                        {{-- <div class="card mb-3">
                            <div class="card-header bg-body-tertiary d-flex justify-content-between">
                                <h5 class="mb-0">Associations</h5><a class="font-sans-serif"
                                    href="../miscellaneous/associations.html">All Associations</a>
                            </div>
                            <div class="card-body fs-10 pb-0">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="d-flex position-relative align-items-center mb-2"><img
                                                class="d-flex align-self-center me-2 rounded-3"
                                                src="../../assets/img/logos/apple.png" alt="" width="50">
                                            <div class="flex-1">
                                                <h6 class="fs-9 mb-0"><a class="stretched-link" href="#!">Apple</a>
                                                </h6>
                                                <p class="mb-1">3243 associates</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="d-flex position-relative align-items-center mb-2"><img
                                                class="d-flex align-self-center me-2 rounded-3"
                                                src="../../assets/img/logos/g.png" alt="" width="50">
                                            <div class="flex-1">
                                                <h6 class="fs-9 mb-0"><a class="stretched-link" href="#!">Google</a>
                                                </h6>
                                                <p class="mb-1">34598 associates</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="d-flex position-relative align-items-center mb-2"><img
                                                class="d-flex align-self-center me-2 rounded-3"
                                                src="../../assets/img/logos/intel-2.png" alt="" width="50">
                                            <div class="flex-1">
                                                <h6 class="fs-9 mb-0"><a class="stretched-link" href="#!">Intel</a>
                                                </h6>
                                                <p class="mb-1">7652 associates</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="d-flex position-relative align-items-center mb-2"><img
                                                class="d-flex align-self-center me-2 rounded-3"
                                                src="../../assets/img/logos/facebook.png" alt="" width="50">
                                            <div class="flex-1">
                                                <h6 class="fs-9 mb-0"><a class="stretched-link"
                                                        href="#!">Facebook</a></h6>
                                                <p class="mb-1">765 associates</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="card mb-3">
                            <div class="card-header bg-body-tertiary d-flex justify-content-between">
                                <h5 class="mb-0">Activity log</h5><a class="font-sans-serif"
                                    href="../../app/social/activity-log.html">All logs</a>
                            </div>
                            <div class="card-body fs-10 p-0">
                                <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-emoji rounded-circle "><span role="img"
                                                    aria-label="Emoji">🎁</span></div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Jennifer Kent</strong> Congratulated <strong>Anthony
                                                Hopkins</strong></p>
                                        <span class="notification-time">November 13, 5:00 Am</span>
                                    </div>
                                </a>

                                <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-emoji rounded-circle "><span role="img"
                                                    aria-label="Emoji">🏷️</span></div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>California Institute of Technology</strong> tagged
                                            <strong>Anthony Hopkins</strong> in a post.
                                        </p>
                                        <span class="notification-time">November 8, 5:00 PM</span>
                                    </div>
                                </a>

                                <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-emoji rounded-circle "><span role="img"
                                                    aria-label="Emoji">📋️</span></div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Anthony Hopkins</strong> joined <strong>Victory day
                                                cultural Program</strong> with <strong>Tony Stark</strong></p>
                                        <span class="notification-time">November 01, 11:30 AM</span>
                                    </div>
                                </a>

                                <a class="notification border-x-0 border-bottom-0 border-300 rounded-top-0"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-emoji rounded-circle "><span role="img"
                                                    aria-label="Emoji">📅️</span></div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Massachusetts Institute of Technology</strong> invited
                                            <strong>Anthony Hopkin</strong> to an event
                                        </p>
                                        <span class="notification-time">October 28, 12:00 PM</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card mb-3 mb-lg-0">
                            <div class="card-header bg-body-tertiary">
                                <h5 class="mb-0">Photos</h5>
                            </div>
                            <div class="card-body overflow-hidden">
                                <div class="row g-0">
                                    <div class="col-6 p-1"><a class="glightbox" href="../../assets/img/generic/4.jpg"
                                            data-gallery="gallery1" data-glightbox="data-glightbox"><img
                                                class="img-fluid rounded" src="../../assets/img/generic/4.jpg"
                                                alt="..."></a></div>
                                    <div class="col-6 p-1"><a class="glightbox" href="../../assets/img/generic/5.jpg"
                                            data-gallery="gallery1" data-glightbox="data-glightbox"><img
                                                class="img-fluid rounded" src="../../assets/img/generic/5.jpg"
                                                alt="..."></a></div>
                                    <div class="col-4 p-1"><a class="glightbox" href="../../assets/img/gallery/4.jpg"
                                            data-gallery="gallery1" data-glightbox="data-glightbox"><img
                                                class="img-fluid rounded" src="../../assets/img/gallery/4.jpg"
                                                alt="..."></a></div>
                                    <div class="col-4 p-1"><a class="glightbox" href="../../assets/img/gallery/5.jpg"
                                            data-gallery="gallery1" data-glightbox="data-glightbox"><img
                                                class="img-fluid rounded" src="../../assets/img/gallery/5.jpg"
                                                alt="..."></a></div>
                                    <div class="col-4 p-1"><a class="glightbox" href="../../assets/img/gallery/3.jpg"
                                            data-gallery="gallery1" data-glightbox="data-glightbox"><img
                                                class="img-fluid rounded" src="../../assets/img/gallery/3.jpg"
                                                alt="..."></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ps-lg-2">
                        <div class="sticky-sidebar">
                            <div class="card mb-3">
                                <div class="card-header bg-body-tertiary">
                                    <h5 class="mb-0">Edit About</h5>
                                </div>
                                <div class="card-body fs-10">
                                    <form action="{{ route('users.update', auth()->user()->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')

                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlInput1">Name <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <input name="name" type="text" value="{{ auth()->user()->name }}"
                                                class="form-control" id="exampleFormControlInput1"
                                                placeholder="John Doe" />
                                            @error('name')
                                                <span class="text-warning">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlInput1">Email<span
                                                    class="text-danger">*</span>
                                            </label>
                                            <input name="email" type="email" value="{{ auth()->user()->email }}"
                                                class="form-control" id="exampleFormControlInput1"
                                                placeholder="johndoe@gmail.com" />
                                            @error('email')
                                                <span class="text-warning">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlInput1">Phone<span
                                                    class="text-danger">*</span>
                                            </label>
                                            <input name="phone" type="text" value="{{ auth()->user()->phone }}"
                                                class="form-control" id="exampleFormControlInput1"
                                                placeholder="123456789" />
                                            @error('phone')
                                                <span class="text-warning">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlTextarea1">Address</label>
                                            <textarea name="address" class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"{{ auth()->user()->address }}></textarea>
                                            </textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <button class="btn btn-success w-100">Submit</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header bg-body-tertiary border-bottom">
                                    <h5 class="mb-0">Change Password</h5>
                                </div>
                                <div class="card-body fs-10">
                                    <form method="post" action="{{ route('password.update') }}" class="">
                                        @csrf
                                        @method('put')

                                        @csrf

                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlInput1">Current Password
                                                <span class="text-danger">*</span></label>
                                            <input name="current_password" type="text" class="form-control"
                                                id="exampleFormControlInput1" />
                                            @error('current_password')
                                                <span class="text-warning">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlInput1">Password <span
                                                    class="text-danger">*</span></label>
                                            <input name="password" type="text" class="form-control"
                                                id="exampleFormControlInput1" />
                                            @error('password')
                                                <span class="text-warning">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlInput1">Password Confirmation
                                                <span class="text-danger">*</span></label>
                                            <input name="password_confirmation" type="text" class="form-control"
                                                id="exampleFormControlInput1" />
                                            @error('password_confirmation')
                                                <span class="text-warning">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <br>
                                        <div class="form-group">
                                            <button class="btn btn-success w-100">Submit</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card mb-3 mb-lg-0">
                                <div class="card-header bg-body-tertiary">
                                    <h5 class="mb-0">Events</h5>
                                </div>
                                <div class="card-body fs-10">
                                    <div class="d-flex btn-reveal-trigger">
                                        <div class="calendar"><span class="calendar-month">Feb</span><span
                                                class="calendar-day">21</span></div>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-9 mb-0"><a href="../../app/events/event-detail.html">Newmarket
                                                    Nights</a></h6>
                                            <p class="mb-1">Organized by <a href="#!" class="text-700">University
                                                    of Oxford</a></p>
                                            <p class="text-1000 mb-0">Time: 6:00AM</p>
                                            <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat
                                            Club, Cambridge<div class="border-bottom border-dashed my-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex btn-reveal-trigger">
                                        <div class="calendar"><span class="calendar-month">Dec</span><span
                                                class="calendar-day">31</span></div>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-9 mb-0"><a href="../../app/events/event-detail.html">31st Night
                                                    Celebration</a></h6>
                                            <p class="mb-1">Organized by <a href="#!" class="text-700">Chamber
                                                    Music Society</a></p>
                                            <p class="text-1000 mb-0">Time: 11:00PM</p>
                                            <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the Greend,
                                            New York<div class="border-bottom border-dashed my-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex btn-reveal-trigger">
                                        <div class="calendar"><span class="calendar-month">Dec</span><span
                                                class="calendar-day">16</span></div>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-9 mb-0"><a href="../../app/events/event-detail.html">Folk
                                                    Festival</a></h6>
                                            <p class="mb-1">Organized by <a href="#!" class="text-700">Harvard
                                                    University</a></p>
                                            <p class="text-1000 mb-0">Time: 9:00AM</p>
                                            <p class="text-1000 mb-0">Location: Cambridge Masonic Hall Association</p>
                                            Place: Porter Square, North Cambridge
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-body-tertiary p-0 border-top"><a
                                        class="btn btn-link d-block w-100" href="../../app/events/event-list.html">All
                                        Events<svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs-11"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                            </path>
                                        </svg><!-- <span class="fas fa-chevron-right ms-1 fs-11"></span> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card mt-3">
                  <div class="card-header bg-body-tertiary">
                    <div class="row align-items-center">
                      <div class="col">
                        <h5 class="mb-0" id="followers">Followers <span class="d-none d-sm-inline-block">(233)</span></h5>
                      </div>
                      <div class="col text-end"><a class="font-sans-serif" href="../../app/social/followers.html">All Members</a></div>
                    </div>
                  </div>
                  <div class="card-body bg-body-tertiary px-1 py-0">
                    <div class="row g-0 text-center fs-10">
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/1.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Emilia Clarke</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Technext limited</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/2.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Kit Harington</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Harvard Korea Society</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/3.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Sophie Turner</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Graduate Student Council</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/4.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Peter Dinklage</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Art Club, MIT</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/5.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Nikolaj Coster</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Archery Club, MIT</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/6.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Isaac Hempstead</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Asymptones</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/7.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Alfie Allen</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Brain Trust</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/8.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Iain Glen</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">GSAS Action Coalition</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/9.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Liam Cunningham</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Caving Club, MIT</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/10.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">John Bradley</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Chess Club</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/11.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Rory McCann</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Chamber Music Society</a></p>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                        <div class="bg-white dark__bg-1100 p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/12.jpg" alt="" width="100"></a>
                          <h6 class="mb-1"><a href="profile.html">Joe Dempsie</a></h6>
                          <p class="fs-11 mb-1"><a class="text-700" href="#!">Clubchem</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}

            </div>
        </div>
    @endsection
