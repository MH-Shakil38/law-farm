<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Information</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .email-container {
            max-width: 650px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background-color: #00203FFF;
            color: #ADEFD1FF;
            text-align: center;
            padding: 20px;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }
        .email-header p {
            margin: 5px 0 0;
            font-size: 14px;
        }
        .email-body {
            padding: 20px;
            line-height: 1.6;
            color: #333333;
        }
        .email-body p {
            margin: 10px 0;
        }
        .client-details {
            margin: 20px 0;
            font-size: 14px;
        }
        .client-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .client-details th {
            text-align: left;
            padding: 10px;
            background-color: #f0f0f0;
        }
        .client-details td {
            padding: 10px;
            border-bottom: 1px solid #dddddd;
        }
        .status {
            font-weight: bold;
            color: #28a745;
        }
        .email-footer {
            background-color: #f9f9f9;
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #555555;
        }
        .email-footer a {
            color: #00203FFF;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>Law Office of Pema Lhamu Bhutia</h1>
            <p>4001 80th Street Fl, Elmhurst NY 11373 | <a href="mailto:pemalaw5@gmail.com" style="color: #ADEFD1FF;">pemalaw5@gmail.com</a></p>
            <p>Phone: 718-651-1577, 929-330-6462</p>
        </div>

        <!-- Body -->
        <div class="email-body" style="">
            <p>Dear, {{ $client->name }}</p>
            <p>Hearing Date Reminder.</p>
            <div class="client-details">
                <table>

                    <tr>
                        <th>Hearing Date & Time</th>
                        <td>
                            @if($client->hearing_date)
                                {{ \Carbon\Carbon::parse($client->hearing_date)->format('d M, Y') }} at {{  $client->hearing_time ? \Carbon\Carbon::parse($client->hearing_time)->format('h:i A') : '' }}
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
            <p>If you have any questions, feel free to contact us.</p>
            <p>Thank you,</p>
            <p><strong>Law Office of Pema Lhamu Bhutia</strong></p>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Law Office of Pema Lhamu Bhutia. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
