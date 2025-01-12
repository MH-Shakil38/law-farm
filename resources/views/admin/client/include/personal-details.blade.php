<div class="card mb-3">
    <div class="card-header position-relative min-vh-25 mb-7">
        <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url(../../assets/img/generic/4.jpg);">
        </div><!--/.bg-holder-->
        <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm"
                src="{{ asset($client->image) }}" onerror="this.src='{{ asset('thumbnail.png') }}';" width="200"
                alt=""></div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">

                <h4 class="mb-1"> {{ $client->name }}
                </h4>
                <h5 class="text-500">{{ $client->short_details }}</h5>
                <div class="p-2">
                    <button class="btn btn-falcon-primary btn-sm px-3" type="button">Email</button>
                    <a class="btn btn-falcon-default btn-sm px-3 ms-2" type="button" href="#">Call</a>
                    <a class="btn btn-falcon-default btn-sm px-3 ms-2" type="button"
                        href="{{ route('clients.edit', $client->id) }}">Edit</a>
                    <div class="border-bottom border-dashed my-4 d-lg-none"></div>
                </div>
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
                                                {{ $client->last_update ?? '---' }}
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
                                        <th> <b></b>{{ $client->lawyer->name ?? '' }} </th>
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
                <hr>
                {{-- case details --}}

                @include('admin.client.include.case-details')
                @include('admin.client.include.hearing')
                @include('admin.client.include.files')

            </div>
            <div class="col ps-2 ps-lg-3">
                @include('admin.client.include.client-info')

            </div>
        </div>
    </div>
</div>
