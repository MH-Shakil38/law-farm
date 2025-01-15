@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <!-- Role Selection Buttons -->
            <div class="card-header text-center">
                <button class="btn btn-primary toggle-role active" type="button" data-target="#role-new">
                    Create Role
                </button>
                @forelse ($roles as $role)
                    <button class="btn btn-primary toggle-role" type="button" data-target="#role{{ $role->id }}">
                        {{ $role->name }}
                    </button>
                @empty
                    No roles available
                @endforelse
            </div>

            <!-- Existing Roles -->
            @forelse ($roles as $role)
                <div class="collapse multi-collapse" id="role{{ $role->id }}">
                    <div class="card-body">
                        <form action="{{ route('roles.update', $role->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="text" name="name" value="{{ $role->name }}" class="form-control mb-3">
                            <div class="row">
                                @forelse ($permissions as $info)
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <input type="checkbox" class="group-checkbox">
                                                {{ $info[0]->prefix }}
                                            </div>
                                            <div class="card-body">
                                                @foreach ($info as $data)
                                                    <div>
                                                        <input type="checkbox" class="child-checkbox"
                                                            name="permission_id[]"
                                                            {{ in_array($data->id, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                                                            value="{{ $data->id }}">
                                                        {{ $data->name }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    No permissions available
                                @endforelse
                            </div>
                            <button class="btn btn-success store-btn">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <!-- Handle no roles -->
            @endforelse

            <!-- Create New Role -->
            <div class="collapse multi-collapse active show" id="role-new">
                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="role-name">Role Name</label>
                                <input type="text" name="name" class="form-control" id="role-name">
                            </div>
                            @forelse ($permissions as $info)
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <input type="checkbox" class="group-checkbox">
                                            {{ $info[0]->prefix }}
                                        </div>
                                        <div class="card-body">
                                            @foreach ($info as $data)
                                                <div>
                                                    <input type="checkbox" class="child-checkbox"
                                                        name="permission_id[]" value="{{ $data->id }}">
                                                    {{ $data->display_name }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No permissions available
                            @endforelse
                        </div>
                        <button class="btn btn-success store-btn">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .store-btn {
        position: fixed;
        bottom: 84px;
        right: 36px;
        font-size: 25px;
    }

    .card-header.text-center {
        position: sticky;
        top: 0;
        z-index: 10;
        background: #ffffff;
    }

    .btn-primary.toggle-role.active {
        background-color: #28a745;
        border-color: #00ff3a;
        box-shadow: 1px 2px 9px 5px #484848 !important;
    }
</style>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        // Group checkbox logic
        $(document).on('click', '.group-checkbox', function() {
            $(this).closest('.card').find('.child-checkbox').prop('checked', $(this).prop('checked'));
        });

        // Parent checkbox logic
        $(document).on('click', '.parent-checkbox', function() {
            const allChecked = $('.child-checkbox').length === $('.child-checkbox:checked').length;
            $('.parent-checkbox').prop('checked', allChecked);
        });

        // Toggle Role Button Logic
        $('.toggle-role').on('click', function() {
            $('.toggle-role').removeClass('active');
            $(this).addClass('active');

            // Collapse other sections
            const targetId = $(this).data('target');
            $('.multi-collapse').not(targetId).collapse('hide');
            $(targetId).collapse('toggle');
        });
    });
</script>
@endsection
