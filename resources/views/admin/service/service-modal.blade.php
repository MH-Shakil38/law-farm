<!-- Button trigger modal -->
@if (isset($category))
<a href="{{ route('service-categories.index') }}" class="btn btn-danger mt-2 float-end">Cancel Updating...</a>

@else
<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Service
</button>
@endif


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add/Update Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-start">Service</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ isset($category) ? route('service-categories.update', $category->id) : route('service-categories.store') }}" method="POST">
                            @csrf
                            @if (isset($category))
                                @method('PUT')
                            @endif

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mt-2">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', isset($category) ? $category->name : '') }}">
                                    </div>
                                </div>

                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label for="parent_id">Parent Id</label>
                                        <select name="parent_id" id="parent_id" class="form-control">
                                            <option disabled selected>Select Parent Service</option>
                                            @forelse ($categories as $info)
                                                <option value="{{ $info->id }}" {{ isset($category) && $category->parent_id == $info->id ? 'selected' : '' }}>
                                                    {{ $info->name }}
                                                </option>
                                            @empty
                                                <option disabled>No Service Available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mt-2">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{ isset($category) && $category->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ isset($category) && $category->status == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="note">Details</label>
                                        <textarea name="details" id="summernote">{{ @$category->details }}</textarea>
                                    </div>
                                </div>
                            </div>







                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            <a href="{{ route('service-categories.index') }}" class="btn btn-danger mt-2">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- jQuery and Bootstrap JS -->

@if (isset($category))
    <script>
        $(document).ready(function() {
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
        });
    </script>
@endif

<link href="{{ asset('/') }}vendors/choices/choices.min.css" rel="stylesheet" />
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Enter Payment Note',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });


</script>
