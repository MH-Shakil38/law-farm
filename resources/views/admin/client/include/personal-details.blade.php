<div class="row">
    <div class="col-md-6">
        <div class=" mb-3">

            <div class="card-body fs-10">
                <table class="table table-responsive bordered">
                    <tr>
                        <th> <b>Hearing Date</b> </th>
                        <td> {{ $client->hearing_date ? \Carbon\Carbon::parse($client->hearing_date)->format('d M Y') : 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <th> <b>Hearing Time</b> </th>
                        <td>

                            <span class="text-danger">
                                {{ $client->hearing_time }}
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <th> <b>Last Update</b> </th>
                        <td>

                            <span class="text-danger">
                                {{ $client->last_update ?? $client->hearing()->latest()->first()->last_update ?? '-----' }}

                            </span>
                        </td>
                    </tr>


                </table>

            </div>
        </div>

    </div>
    <div class="col-md-6 border-left">

        <div class=" mb-3">

            <div class="card-body fs-10">
                <table class="table table-responsive bordered text-left">
                    <tr>
                        <th> <b>Case Handle By</b> </th>
                        <th> <b></b>{{ $client->user->name ?? '' }} </th>
                    </tr>

                    <tr>
                        <th> <b>Case</b> </th>
                        <th> <b></b>{{ $client->caseType->name ?? '---' }} </th>
                    </tr>
                    <tr>
                        <th> <b>Created By</b> </th>
                        <td>
                            <span class="text-danger">
                                {{ $client->createdBy->name ?? '--' }}
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
