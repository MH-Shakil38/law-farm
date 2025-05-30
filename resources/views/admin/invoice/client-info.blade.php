<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Law Firm Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .invoice-container {
            background: #fff;
            padding: 0px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            /* margin: auto; */
        }

        .header-logo {
            max-width: 200px;
        }

        table {
            table-layout: fixed;
            width: 100%;
        }

        .table th {
            background: #784421;
            color: #fff;
            text-align: center;
        }

        .table td {
            text-align: center;
        }

        .footer {
            font-size: 14px;
            color: #555;
            text-align: left;
        }

        .header-address {
            font-family: auto;
            line-height: 1.2rem;
        }

        .c-name-heading {
            float: left;
            margin-right: 4px;
        }

        .client-info {
            line-height: 12px;
            font-family: auto;
            line-height: 1.2rem;
        }



        .c-name {
            line-height: 12px
        }

        /* Add these styles to your stylesheet */
        .table-container {
            width: 100%;
            padding: 20px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table-container th,
        .table-container td {
            padding-left: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table-container th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .table-container td {
            font-size: 14px;
        }

        .text-primary {
            color: #007bff;
            font-size: 18px;
            font-weight: bold;
        }

        .border-bottom {
            border-bottom: 2px solid #ddd;
            margin-bottom: 15px;
        }

        .pb-2 {
            padding-bottom: 0.5rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

    <div class="invoice-container ">
        <div class="row" style="border-bottom: 2px solid #666666">
            <table>
                <tr>
                    @php
                        $imagePath = public_path('website/logo.jpg');
                    @endphp
                    <td class="col-6" style="">
                        <img src="{{ $imagePath }}" alt="Law Firm Logo" class="header-logo">
                    </td>
                    <td class="col-6" style="text-align: right">
                        <h5 class="fw-bold"><i><u>Attorneys At Law</u></i></h5>
                        <p class="header-address">40-01 80th Street, 2 Fl.<br>
                            Queens, NY 11373<br>
                            Tel: (718) 651-1577<br>
                            Email: <a href="mailto:pemalaw5@gmail.com">pemalaw5@gmail.com</a><br>
                            Whatsapp: 929-330-6462<br>
                            @Abogada_Pema_Bhutia</p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="table-container">
            <table class="text-primary border-bottom pb-2 mb-3">
                <tr>
                    <td>Total Payment</td>
                    <td>Initial Payment</td>
                    <td>Monthly Payment</td>
                    <td>Payment Date</td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="color:#666666">.</td>
                </tr>
            </table>

            <table >
                <tr>
                    <td class="col-6">Date: <span style="color: #666666"></span></td>
                    <td class="col-6"> Referred By: <strong> <i>{{ $client->ref_by ?? '' }}</i> </strong></td>
                </tr>
            </table>

            <!-- Personal Information Section -->
            <h6 class="text-primary border-bottom pb-2 mb-3">Personal Information</h6>
            <table>
                <tr>
                    <th>Name</th>
                    <td>{{ $client->name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>First Name</th>
                    <td>{{ $client->first_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $client->last_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>{{ $client->date_of_birth ? dateFormat($client->date_of_birth) : 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{ $client->gender ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Nationality</th>
                    <td>{{ $client->nationality ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Passport Number</th>
                    <td>{{ $client->passport_number ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Marital Status</th>
                    <td>{{ $client->marrital_status ?? 'N/A' }}</td>
                </tr>
            </table>

            <!-- Contact Information Section -->
            <h6 class="text-primary border-bottom pb-2 mb-3">Contact Information</h6>
            <table>
                <tr>
                    <th>Email</th>
                    <td>{{ $client->email ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $client->phone ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Alternate Phone</th>
                    <td>{{ $client->phone2 ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $client->address ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{ $client->city ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>State</th>
                    <td>{{ $client->state ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Zip Code</th>
                    <td>{{ $client->zip_code ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td>{{ $client->country ?? 'N/A' }}</td>
                </tr>
            </table>

            <!-- Case Details Section -->
            <h6 class="text-primary border-bottom pb-2 mb-3">Case Information</h6>
            <table>
                <tr>
                    <th>Last Update</th>
                    <td>{{ $client->last_update ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Case Type</th>
                    <td>{{ $client->caseType->name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Case Number</th>
                    <td>{{ $client->case_number ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Case Details</th>
                    <td>{{ $client->case_details ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Short Details</th>
                    <td>{{ $client->short_details ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Hearing Date</th>
                    <td>{{ $client->hearing_date ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Hearing Time</th>
                    <td>{{ $client->hearing_time ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Alien Number</th>
                    <td>{{ $client->alien_number ?? 'N/A' }}</td>
                </tr>
            </table>

            <!-- Additional Information Section -->
            <h6 class="text-primary border-bottom pb-2 mb-3">Additional Information</h6>
            <table>
                <tr>
                    <th>Referred By</th>
                    <td>{{ $client->ref_by ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Direction</th>
                    <td>{{ $client->direction ?? 'N/A' }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>{{ $client->status == 1 ? 'Active' : 'Inactive' }}</td>
                </tr>
                <tr>
                    <th>Created By</th>
                    <td>{{ $client->createdBy->name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Updated By</th>
                    <td>{{ $client->updatedBy->name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        @if ($client->image)
                            <img src="{{ asset('uploads/' . $client->image) }}" alt="Client Image" width="100">
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
            </table>

        </div>
        <table>

        </table>
    </div>

</body>

</html>
