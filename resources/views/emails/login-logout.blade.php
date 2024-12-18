<!DOCTYPE html>
<html>
<head>
    <title>User {{ $type }} Notification</title>
</head>
<body>
    <h1>User {{ $type }} Notification</h1>

    @if ($type === 'Login')
        <p>User {{ $data->name }} ({{ $data->email }}) has logged in at {{ Carbon\Carbon::now()->format('d M y, h:m:s A') }}.</p>
    @elseif ($type === 'Logout')
        <p>User {{ $data->name }} ({{ $data->email }}) has logged out at  {{ Carbon\Carbon::now()->format('d M y, h:m:s A') }}.</p>
    @endif

    <p>Thank you!</p>
</body>
</html>
