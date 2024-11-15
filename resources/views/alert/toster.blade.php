
<div class="position-fixed top-0 end-0 p-3" style="z-index: 1050;">
    @if(Session::has('success'))
    <div class="toast align-items-center text-white bg-success border-0" role="alert" data-bs-delay="2000" data-bs-autohide="true" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ Session::get('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    @endif

    @if(Session::has('warning'))
    <div class="toast align-items-center text-white bg-warning border-0" role="alert" data-bs-delay="2000" data-bs-autohide="true" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ Session::get('warning') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    @endif

    @if(Session::has('error'))
    <div class="toast align-items-center text-white bg-danger border-0" role="alert" data-bs-delay="2000" data-bs-autohide="true" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ Session::get('error') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    @endif

    @if(Session::has('delete'))
    <div class="toast align-items-center text-white bg-danger border-0" role="alert" data-bs-delay="2000" data-bs-autohide="true" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ Session::get('delete') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    @endif
</div>
<script>
    // Initialize Bootstrap Toasts
    const toastElList = [].slice.call(document.querySelectorAll('.toast'));
    toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl).show();
    });
</script>
