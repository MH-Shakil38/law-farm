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
                                src="{{ asset($client->image) }}" width="200" alt=""></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="mb-1"> {{ $client->name }}<span data-bs-toggle="tooltip"
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
                                <h5 class="fs-9 fw-normal">{{ $client->short_details }}</h5>
                                <p class="text-500">{{ $client->address }}</p><button
                                    class="btn btn-falcon-primary btn-sm px-3" type="button">Email</button>
                                    <a class="btn btn-falcon-default btn-sm px-3 ms-2" type="button"
                                    href="#">Call</a>
                                <a class="btn btn-falcon-default btn-sm px-3 ms-2" type="button"
                                    href="{{ route('clients.edit', $client->id) }}">Edit</a>
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
                                        <h6 class="mb-0">{{ $client->phone }}</h6>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0">{{ $client->phone1 ?? "" }}</h6>
                                    </div>
                                </a><a class="d-flex align-items-center mb-2" href="#"><img
                                        class="align-self-center me-2" src="../../assets/img/logos/g.png"
                                        alt="Generic placeholder image" width="30">
                                    <div class="flex-1">
                                        <h6 class="mb-0">{{ $client->email }}</h6>
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
                                <h5 class="mb-0">Case Details</h5>
                            </div>
                            <div class="card-body text-justify">

                                <div class="collapse show" id="profile-intro">
                                    {{ $client->case_details }}
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
                                <h5 class="mb-0">ALL FILE (Document's)</h5>
                                <div id="table-customers-replace-element">
                                    <button data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true"
                                        aria-controls="collapse2"
                                        class="btn btn-falcon-default btn-sm text-success collapsed" type="button"><svg
                                            class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2"
                                            aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                            data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;">
                                            <g transform="translate(224 256)">
                                                <g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                                                    <path fill="currentColor"
                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"
                                                        transform="translate(-224 -256)"></path>
                                                </g>
                                            </g>
                                        </svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span
                                            class="d-none d-sm-inline-block ms-1">ADD NEW FILE</span></button>

                                </div>
                            </div>
                            <div class="card-body fs-10 p-0">
                                <div class="accordion" id="accordionExample">

                                    <div class="accordion-item">
                                        <div class="accordion-collapse collapse" id="collapse2"
                                            aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <form action="{{ route('clients.file.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" name="title"
                                                                placeholder="Enter file title" class="form-control">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="file" name="file"
                                                                placeholder="Enter file title" class="form-control">
                                                        </div>
                                                        <div class="col-md-1">
                                                            <button class="btn btn-primary"> <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                @forelse ($client->files as $info)
                                    <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300"
                                        target="_blank" href="{{ asset($info->file) }}">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-xl me-3">
                                                <div class="avatar-emoji rounded-circle "><span role="img"
                                                        aria-label="Emoji"> <i class="far fa-file-pdf text-danger"></i>
                                                    </span></div>
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong> {{ $info->title }}</strong></p>
                                            <span
                                                class="notification-time">{{ Carbon\Carbon::parse($info->created_at)->format('F j, g:i A') }}</span>
                                        </div>
                                    </a>
                                @empty
                                @endforelse




                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 ps-lg-2">
                        <div class="sticky-sidebar">
                            <div class="card mb-3">
                                <div class="card-header bg-body-tertiary">
                                    <h5 class="mb-0">Case Info</h5>
                                </div>
                                <div class="card-body fs-10">
                                    <table class="table table-responsive bordered">
                                        <tr>
                                            <th> <b>CASE NUMBER</b> </th>
                                            <td>{{ $client->case_number }} </td>
                                        </tr>
                                        <tr>
                                            <th> <b>CASE TYPE</b> </th>
                                            <td>{{ $client->caseType->name }} </td>
                                        </tr>
                                        <tr>
                                            <th> <b>HIRING DATE</b> </th>
                                            <td>{{ $client->created_at }} </td>
                                        </tr>
                                        <tr>
                                            <th> <b>TRAKING</b> </th>
                                            <td>{{ $client->caseType->name }} </td>
                                        </tr>
                                    </table>

                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header bg-body-tertiary">
                                    <h5 class="mb-0">Client Info</h5>
                                </div>
                                <div class="card-body fs-10">
                                    <table class="table table-responsive bordered">
                                        <tr>
                                            <th> <b>NAME</b> </th>
                                            <td>{{ $client->name }} </td>
                                        </tr>
                                        <tr>
                                            <th> <b>PASSPORT NUMBER</b> </th>
                                            <td>{{ $client->passport_number }} </td>
                                        </tr>
                                        <tr>
                                            <th> <b>CITY</b> </th>
                                            <td>{{ $client->city }} </td>
                                        </tr>
                                        <tr>
                                            <th> <b>STATE</b> </th>
                                            <td>{{ $client->state }} </td>
                                        </tr>

                                        <tr>
                                            <th> <b>POSTAL CODE</b> </th>
                                            <td>{{ $client->postal_code }} </td>
                                        </tr>

                                        <tr>
                                            <th> <b>COUNTRY</b> </th>
                                            <td>{{ $client->country }} </td>
                                        </tr>


                                        <tr>
                                            <th> <b>DOB</b> </th>
                                            <td>{{ Carbon\Carbon::parse($client->date_of_birth)->format('d M y') }} </td>
                                        </tr>


                                        <tr>
                                            <th> <b>DOB</b> </th>
                                            <td>{{ Carbon\Carbon::parse($client->date_of_birth)->format('d M y') }} </td>
                                        </tr>
                                    </table>

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
