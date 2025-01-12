@extends('admin.layouts.app')
@section('content')
    <div class="row custom-row notification-container" style="margin: 0 auto">
        <h2 class="text-center" style="">My Notifications</h2>
        <p class="dismiss text-right"><a id="dismiss-all" href="#">Dimiss All</a></p>
        @forelse ($notifications as $info)

            @php

                $data = $info['data']['data'];
                $user = $info['data']['user'];
                $title = $info['data']['title'];
                $action = $info['data']['action'] ?? '...';
            @endphp
            <div class="card notification-card notification-invitation">
                <div class="card-body">
                    <table>
                        <tr>
                            <td style="width:85%">
                                <div class="card-title" style="font-size: 14px"> <b
                                        class="text-primary">{{ $user['name'] }}</b> <i><b>{{ $action ?? '...' }}</b></i> {{ $title }}</div>
                            </td>
                            <td style="width:15%">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop{{ $info->id }}">View</a>
                                @if ($info->read_at == null)
                                    <a href="{{ route('markasread', $info->id) }}"
                                        class="btn btn-danger dismiss-notification">Dismiss</a>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            {{-- modal --}}
            <div class="modal fade" id="staticBackdrop{{ $info->id }}" data-bs-keyboard="false"
                data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg mt-6" role="document">
                    <div class="modal-content border-0">
                        <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base cancelBtn"
                                @if ($info->read_at == null) data-id="{{ $info->id }}" @endif
                                data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body p-0">
                            <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                <h4 class="mb-1" id="staticBackdropLabel">{{ $title }}</h4>
                                <p class="fs-11 mb-0">Added by <a class="link-600 fw-semi-bold"
                                        href="#!">{{ $user['name'] }}</a></p>
                            </div>
                            <div class="p-4">
                                <div class="">
                                    <div class="">
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i
                                                    class="fas fa-circle fa-stack-2x text-200"></i><i
                                                    class="fa-inverse fa-stack-1x text-primary fas fa-tag"
                                                    data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                                <h5 class="mb-2 fs-9">Data</h5>
                                                <table class="table  table-bordered w-100">
                                                    @forelse ($data as $key => $value)
                                                        <tr>
                                                            <th>{{ $key }}</th>
                                                            <td>{{ $value }}</td>
                                                        </tr>
                                                    @empty
                                                    @endforelse

                                                </table>
                                                <hr class="my-4" />
                                            </div>
                                        </div>
                                        {{-- <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i
                                                    class="fas fa-circle fa-stack-2x text-200"></i><i
                                                    class="fa-inverse fa-stack-1x text-primary fas fa-align-left"
                                                    data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                                <h5 class="mb-2 fs-9">Description</h5>
                                                <p class="text-break fs-10">The illustration must match to the contrast of
                                                    the theme. The illustraion must described the concept of the design. To
                                                    know more about the theme visit the page. </p>
                                            </div>
                                        </div> --}}
                                    </div>
                                    {{-- <div class="col-lg-3">
                                        <h6 class="mt-5 mt-lg-0">Add To Card</h6>
                                        <ul class="nav flex-lg-column fs-10">
                                            <li class="nav-item me-2 me-lg-0"><a class="nav-link nav-link-card-details"
                                                    href="#!"><span class="fas fa-user me-2"></span>Members</a></li>
                                            <li class="nav-item me-2 me-lg-0"><a class="nav-link nav-link-card-details"
                                                    href="#!"><span class="fas fa-tag me-2"></span>Label</a></li>
                                            <li class="nav-item me-2 me-lg-0"><a class="nav-link nav-link-card-details"
                                                    href="#!"><span
                                                        class="fas fa-paperclip me-2"></span>Attachments</a></li>
                                            <li class="nav-item me-2 me-lg-0"><a class="nav-link nav-link-card-details"
                                                    href="#!"><span class="fa fa-align-left me-2"></span>Description
                                                </a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse




    </div>
@endsection

<style>
    body {
        background-color: #fcfcfc;
    }

    .custom-row {
        margin: auto;
        padding: 30px;
        width: 80%;
        display: flex;
        flex-flow: column;

        .card {
            width: 100%;
            margin-bottom: 5px;
            display: block;
            transition: opacity 0.3s;
        }
    }


    .card-body {
        padding: 0.5rem;

        table {
            width: 100%;

            tr {
                display: flex;

                td {
                    a.btn {
                        font-size: 0.8rem;
                        padding: 3px;
                    }
                }

                td:nth-child(2) {
                    text-align: right;
                    justify-content: space-around;
                }
            }
        }

    }

    .card-title:before {
        display: inline-block;
        font-family: 'Font Awesome\ 5 Free';
        font-weight: 900;
        font-size: 0.7rem;
        text-align: center;
        border: 2px solid grey;
        border-radius: 100px;
        width: 30px;
        height: 30px;
        padding-bottom: 3px;
        margin-right: 10px;
    }

    .notification-invitation {
        .card-body {
            .card-title:before {
                color: #90CAF9;
                border-color: #90CAF9;
                content: "\f007";
            }
        }
    }

    .notification-warning {
        .card-body {
            .card-title:before {
                color: #FFE082;
                border-color: #FFE082;
                content: "\f071";
            }
        }
    }

    .notification-danger {
        .card-body {
            .card-title:before {
                color: #FFAB91;
                border-color: #FFAB91;
                content: "\f00d";
            }
        }
    }

    .notification-reminder {
        .card-body {
            .card-title:before {
                color: #CE93D8;
                border-color: #CE93D8;
                content: "\f017";
            }
        }
    }

    .card.display-none {
        display: none;
        transition: opacity 2s;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).on('click', '.cancelBtn', function() {
        var id = $(this).data('id'); // Get the 'id' from the button's data-id attribute
        var url = "{{ route('markasread', ':id') }}"; // Blade syntax for the route
        // Replace the ':id' placeholder with the actual 'id' value
        url = url.replace(':id', id);

        // Redirect to the generated URL
        if (id) {
            window.location.href = url;
        }

    });
    const dismissAll = document.getElementById('dismiss-all');
    const dismissBtns = Array.from(document.querySelectorAll('.dismiss-notification'));

    const notificationCards = document.querySelectorAll('.notification-card');

    dismissBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault;
            var parent = e.target.parentElement.parentElement.parentElement.parentElement.parentElement
                .parentElement;
            parent.classList.add('display-none');
        })
    });

    dismissAll.addEventListener('click', function(e) {
        e.preventDefault;
        notificationCards.forEach(card => {
            card.classList.add('display-none');
        });
        const row = document.querySelector('.notification-container');
        const message = document.createElement('h4');
        message.classList.add('text-center');
        message.innerHTML = 'All caught up!';
        row.appendChild(message);
    })
</script>
