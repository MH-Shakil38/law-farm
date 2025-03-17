@extends('admin.layouts.app')
@section('content')
    <div class="row custom-row notification-container" style="margin: 0 auto">
        <h2 class="text-center" style="">Notification Email</h2>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Email</h4>
                    </div>
                    <div class="card-body">
                        @if (isset($email))
                        <form action="{{ route('email-setup.update',$email->id) }}" method="post" class="form">
                            @method('PUT')
                        @else
                        <form action="{{ route('email-setup.store') }}" method="post" class="form">
                        @endif
                            @csrf
                            <div class="form-group">
                                <label for="">Email</label> <br>
                                <input type="email" class="form-control-lg w-100" name="email" value="{{ old('email',@$email->email) }}">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label> <br>
                                <select class="form-control-lg w-100" name="status" id="">
                                    <option value="1" {{ isset($email) && $email->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ isset($email) && $email->status == 0 ? 'selected' : '' }}>Deactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary form-control-lg mt-4 w-100">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Email'<s></s> List</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive scrollbar">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Actio</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($emails as $info)
                                    <tr class="table-primary">
                                        <td>{{ $info->email }}</td>
                                        <td><span
                                            class="badge bg-{{ $info->status == 1 ? 'success' : 'danger' }}">{{ $info->status == 1 ? 'Yes' : 'No' }}</span></td>
                                        <td class="align-middle white-space-nowrap py-2 text-end">
                                            <div class="dropdown font-sans-serif position-static"><button
                                                    class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                                    type="button" id="customer-dropdown-0" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false"><svg
                                                        class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-10"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-h" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                        </path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end border py-0"
                                                    aria-labelledby="customer-dropdown-0">
                                                    <div class="py-2">
                                                            <a class="dropdown-item text-success"
                                                                href="{{ route('email-setup.edit', $info->id) }}">Edit</a>


                                                        {{-- <a class="dropdown-item text-warning"  href="{{ route('lawyers.change.password', $info->id) }}">Change Password</a> --}}
                                                        <a class="dropdown-item text-danger" href="#"
                                                            onclick="confirmAction(event, '{{ route('record.delete', ['model' => 'EmailSetup', 'id' => $info->id]) }}')">
                                                            Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                      </tr>
                                    @empty

                                    @endforelse


                                </tbody>
                              </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    </div>
@endsection


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
