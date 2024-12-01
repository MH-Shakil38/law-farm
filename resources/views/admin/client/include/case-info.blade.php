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
                <th> <b>HIRING DATE</b> </th>
                <td>

                    <span class="text-danger">
                        {{ $client->hearing_date?\Carbon\Carbon::parse($client->hearing_date)->format('d M Y') : 'N/A' }}
                    </span>
                </td>
            </tr>

            <tr>
                <th> <b>Lawyer</b> </th>
                <td>{{ $client->lawyer->name ?? '' }} </td>
            </tr>


            <tr>
                <th> <b>CASE TYPE</b> </th>
                <td>{{ $client->caseType->name ?? '' }} </td>
            </tr>

            <tr>
                <th> <b>TRAKING</b> </th>
                <td>{{ $client->caseType?->name }} </td>
            </tr>
        </table>

    </div>
</div>
