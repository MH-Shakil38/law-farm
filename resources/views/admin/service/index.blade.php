@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-start">Service List</h3>
                        @include('admin.service.service-modal')
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category Name</th>
                                    <th>Parent Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ @$category->parent->name }}</td>
                                        <td>
                                            <a href="{{ route('service-categories.edit', $category->id) }}"
                                                class="btn btn
                                            btn-primary">Edit/View</a>
                                            <a class="btn btn-danger"
                                                        href="#"
                                                        onclick="confirmAction(event, '{{ route('record.delete', ['model' => 'ServiceCategory', 'id' => $category->id]) }}')">
                                                        Delete
                                                     </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No Data Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
