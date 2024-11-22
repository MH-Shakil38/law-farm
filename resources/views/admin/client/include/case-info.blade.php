<div class="card mb-3">
    <div class="card-header bg-body-tertiary">
        <h5 class="mb-0">Case Info</h5>
    </div>
    <div class="card-body fs-10">
        <table class="table table-responsive bordered">
            <tr>
                <th> <b>CASE NUMBER</b> </th>
                <td>{{ $client->case_number }} </td>
            </tr>
            <tr>
                <th> <b>CASE TYPE</b> </th>
                <td>{{ $client->caseType->name }} </td>
            </tr>
            <tr>
                <th> <b>HIRING DATE</b> </th>
                <td>
                    @php
                        $hearing = $client
                            ->hearing()
                            ->where('date', '>=', now()->startOfDay())
                            ->orderBy('date', 'asc')
                            ->first();
                    @endphp
                    <span class="text-danger">
                        {{ $hearing ? \Carbon\Carbon::parse($hearing->date)->format('d M Y') : 'N/A' }}
                    </span>
                </td>
            </tr>
            <tr>
                <th> <b>TRAKING</b> </th>
                <td>{{ $client->caseType->name }} </td>
            </tr>
        </table>

    </div>
</div>
