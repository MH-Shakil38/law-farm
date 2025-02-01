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
            margin-top: -47px
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
        <div class="row border-bottom">
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
        {!! $invoice->invoice !!}
        <br>
        <div class="footer" style="">
            <div style="">
                <table>
                    <tr>
                        <td class="col-6">
                            <h5 class="fw-bold" style="font-size: 18px;border-top:1px dashed #868686">Forma de Pago:
                            </h5>
                        </td>
                        <td class="col-6" style="float:right;text-aligh:right">
                            <div style="float: right">

                                <h5 class="fw-bold" style="font-size: 18px;border-top:1px dashed #868686">Firma de quien
                                    recibe:</h5>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <p><strong>For Office Use Only</strong><br>
                NY Office: 40-01 80th Street, 2 Fl.<br>
                Phone: NY 11373</p>
        </div>
    </div>

</body>

</html>
