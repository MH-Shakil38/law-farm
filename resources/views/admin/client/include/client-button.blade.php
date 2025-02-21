<div class="p-2">
    <a class="btn btn-success btn-sm px-3 ms-2" type="button" href="#">Call</a>
    <a class="btn btn-info btn-sm px-3 ms-2" type="button"
        href="{{ route('clients.edit', $client->id) }}">Edit</a>
    @if (auth()->user()->hasRole('Super Admin'))
        <a class="btn btn-danger btn-sm px-3 ms-2" type="button"
            href="{{ route('print.agreement', $client->id) }}">Print Agreement</a>
        @include('admin.client.include.update-agreement-modal')
    @endif
    <a class="btn btn-warning btn-sm px-3 ms-2" type="button"
        href="{{ route('invoice.generate', $client->id) }}">Blank Invoice</a>
    <div class="border-bottom border-dashed my-4 d-lg-none"></div>
</div>
