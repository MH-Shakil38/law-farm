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
            padding: 10px;
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
    </style>
</head>

<body>

    <div class="invoice-container ">

        <div class="row">
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
        {!! $agreement->description !!}
        <br>
        <br>
        <table>
            <tr>
                @php
                    $imagePath = $agreement->client_signature ? public_path($agreement->client_signature) : '';
                @endphp
                <td class="col-6" style="text-align: left">
                    <img style="position: absolute; width: 159px; margin-top: -85px;" src="{{  $imagePath }}" alt="Law Firm Logo" class="header-logo">
                    <span class="" style="border-top: 1px solid #a7a6a6">Client Signature</span>
                    <p style="">Date:{{ Carbon\Carbon::parse($agreement->created_at)->format('d/m/y') }}</p>
                </td>
                <td class="col-6" style="text-align: right">
                    <img style="    position: absolute;  width: 159px; margin-top: -85px;right:-5%" src="{{ public_path('sign.png') ?? $imagePath }}" alt="Law Firm Logo" class="header-logo">
                    <span class="border-top" style="border-top: 1px solid #a7a6a6">Attorneys Signature <br></span>
                    <p>Date:{{ Carbon\Carbon::parse($agreement->created_at)->format('d/m/y') }}</p>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>
