@extends('admin.layouts.app')
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('service-categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Parent Id</label>
                                <select name="parent_id" id="" class="form-control">
                                    <option disabled selected>Select Parent Service</option>
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>

                                    @empty
                                        <option disabled>No Service Available</option>
                                    @endforelse

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="name">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h3>Category List</h3>
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
                                            btn-primary">Edit</a>
                                            <form action="{{ route('service-categories.destroy', $category->id) }}" method="post"
                                                style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
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
