@extends('admin.layouts.app')
@section('content')
    <div class="row custom-row notification-container" style="margin: 0 auto">
        <h2 class="text-center" style="">Notifications Setup</h2>
        <hr>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Upade Notification Setting's</h4>
            </div>
            <div class="card-body">
                <form action="" class="form">
                    <div class="form-group">
                        <label for="">Title</label>
                        {{-- <input type="text" class="form-control"> --}}
                    </div>
                </form>
            </div>
        </div>



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
