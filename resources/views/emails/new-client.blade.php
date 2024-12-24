<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client Assigned</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 800px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background-color: #002855;
            padding: 20px;
            color: #ffffff;
            text-align: center;
        }
        .email-header img {
            max-height: 80px;
            margin-bottom: 10px;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .email-body {
            padding: 20px;
        }
        .email-body h3 {
            margin-bottom: 20px;
            color: #002855;
            font-size: 20px;
            font-weight: bold;
        }
        .client-info {
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            padding: 15px;
            background: #f7f9fc;
        }
        .client-info table {
            width: 100%;
        }
        .client-info th, .client-info td {
            text-align: left;
            padding: 8px 10px;
            border-bottom: 1px solid #e5e5e5;
        }
        .client-info th {
            background: #f1f3f5;
            color: #555555;
            font-weight: bold;
        }
        .client-info tr:last-child td {
            border-bottom: none;
        }
        .email-footer {
            text-align: center;
            padding: 15px 20px;
            background-color: #f9f9f9;
            color: #666666;
            font-size: 14px;
        }
        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            background-color: #002855;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            margin-top: 20px;
        }
        .btn-primary:hover {
            background-color: #001d3b;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Email Header -->
        <div class="email-header">
            <img src="https://attorneypema.com/website/logo.webp" alt="Law Office of Pema Lhamu Bhutia">
            <h1>Law Office of Pema Lhamu Bhutia</h1>
        </div>

        <!-- Email Body -->
        <div class="email-body" style="background: #dcdddd">
            <h3>Assigned Lawyer: </h3>
            <h3>Your Case:</h3>
            <h3>Next Hearing Date: </h3>
            <h3>Next Hearing Time:</h3>

            <p>Dear <strong>{{ $data['name'] }}</strong>,</p>
            <p>We are pleased to inform you that your case has been assigned to our team. Please find your case details below:</p>

            <div class="client-info">
                <table>
                    <tr>
                        <th>Full Name</th>
                        <td>{{ $data['name'] }}</td>
                    </tr>

                    <tr>
                        <th>Assigned Lawyer</th>
                        <td>{{ $data->lawyer->name ?? '--' }}</td>
                    </tr>

                    <tr>
                        <th>Your Case</th>
                        <td> {{ $data->caseType->name ?? '---' }}</td>
                    </tr>

                    <tr>
                        <th>Next Hearing Date</th>
                        <td>{{ $data->hearing_date ? Carbon\Carbon::parse($data->hearing_date)->format('d M Y') : '---' }}</td>
                    </tr>

                    <tr>
                        <th>Next Hearing Time</th>
                        <td> {{ $data->hearing_time ? Carbon\Carbon::parse($data->hearing_time)->format('h:i:s A') : '---' }}</td>
                    </tr>



                    <tr>
                        <th>Email Address</th>
                        <td>{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>{{ $data['phone'] }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $data['address'] }}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{ $data['city'] }}</td>
                    </tr>
                    <tr>
                        <th>State</th>
                        <td>{{ $data['state'] }}</td>
                    </tr>
                    <tr>
                        <th>Zip Code</th>
                        <td>{{ $data['zip_code'] }}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{ $data['country'] }}</td>
                    </tr>
                    <tr>
                        <th>Case Number</th>
                        <td>{{ $data['case_number'] }}</td>
                    </tr>
                    <tr>
                        <th>Case Details</th>
                        <td>{{ $data['case_details'] }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $data['date_of_birth'] }}</td>
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td>{{ $data['nationality'] }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ ucfirst($data['gender']) }}</td>
                    </tr>
                    <tr>
                        <th>Marital Status</th>
                        <td>{{ $data['marrital_status'] }}</td>
                    </tr>
                </table>
            </div>

            <a href="#" class="btn-primary">View Full Case Details</a>
        </div>

        <!-- Email Footer -->
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Law Office of Pema Lhamu Bhutia. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
