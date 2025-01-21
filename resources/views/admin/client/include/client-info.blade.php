<div class="card mb-3">
    <div class="card-header bg-body-tertiary">
        <h5 class="mb-0">Client Info</h5>
    </div>
    <div class="card-body fs-10">
        <table class="table table-responsive bordered">
            <tr>
                <th> <b>NAME</b> </th>
                <td>{{ $client->name }} </td>
            </tr>

            <tr>
                <th> <b>Email</b> </th>
                <td>{{ $client->email }} </td>
            </tr>

            <tr>
                <th> <b>Alien Number</b> </th>
                <td>{{ $client->alien_number }} </td>
            </tr>

            <tr>
                <th> <b>Marrital status</b> </th>
                <td>{{ $client->marrital_status }} </td>
            </tr>

            <tr>
                <th> <b>Gender</b> </th>
                <td>{{ $client->marrital_status }} </td>
            </tr>

            <tr>
                <th> <b>PASSPORT NUMBER</b> </th>
                <td>{{ $client->passport_number }} </td>
            </tr>
            <tr>
                <th> <b>CITY</b> </th>
                <td>{{ $client->city }} </td>
            </tr>
            <tr>
                <th> <b>STATE</b> </th>
                <td>{{ $client->state }} </td>
            </tr>

            <tr>
                <th> <b>ZIP CODE</b> </th>
                <td>{{ $client->zip_code }} </td>
            </tr>

            <tr>
                <th> <b>COUNTRY</b> </th>
                <td>{{ $client->country }} </td>
            </tr>


            <tr>
                <th> <b>DOB</b> </th>
                <td>{{ Carbon\Carbon::parse($client->date_of_birth)->format('d M y') }} </td>
            </tr>

            <tr>
                <th> <b>Address</b> </th>
                <td>{{ $client->address ?? '' }} </td>
            </tr>



        </table>

    </div>
</div>
