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
