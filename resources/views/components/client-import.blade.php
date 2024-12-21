
<div class="modal fade" id="import-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-3 py-3 ps-4 pe-6 bg-body-tertiary">
          <h4 class="mb-1" id="modalExampleDemoLabel">Import CSV File </h4>
        </div>
        <div class="p-4 pb-0">
          <form action="{{ route('clients.import') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">File</label>
              <input type="file" name="file" class="form-control" id="recipient-name" />
            </div>
            <div class="mb-3">
             <button class="btn btn-primary">Import CSV</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
