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

        <div class="row mt-3">
            <table class="">
                <tr>
                    <td class="col-7" style="">
                        <table class="">
                            <tr class="alight-left">
                                <td style="text-align: left"> <b>CLIENT NAME:</b> <span
                                        style="border-bottom:1px dashed #aaaaaa">{{ $client->name }}</span> </td>
                            </tr>
                            <tr class="alight-left">
                                <td style="text-align: left"> <strong>Contact Number:</strong> <span
                                        style="border-bottom:1px dashed #aaaaaa">{{ $client->phone }}</span> </td>
                            </tr>
                            <tr class="alight-left">
                                <td style="text-align: left"> <strong>Address:</strong> <span
                                        style="border-bottom:1px dashed #aaaaaa"> {{ $client->address }}</span> </td>
                            </tr>
                        </table>
                    </td>
                    <td class="col-5" style="text-align: right">
                        <h6 class="fw-bold">Refer By:<span
                                style="border-bottom: 1px dashed #b9b9b9;font-weight: 400;margin-left: 11px;">{{$client->ref_by ?? '__________'}}</span>
                        </h6>
                    </td>
                </tr>
            </table>

        </div>


        <table class="table w-100 mt-3">
            <thead>
                <tr style="height: 20px;">
                    <th class="col-2" style="padding: 0px;margin:0px">Account</th>
                    <th class="col-2" style="padding: 0px;margin:0px">Description</th>
                    <th class="col-2" style="padding: 0px;margin:0px">Misc.</th>
                    <th class="col-2" style="padding: 0px;margin:0px">Misc.</th>
                    <th class="col-2" style="padding: 0px;margin:0px"></th>
                    <th class="col-2" style="padding: 0px;margin:0px">Amount ($)</th>
                </tr>
            </thead>
            <tbody>
                {{-- 10টি ফাঁকা সারি --}}
                @for ($i = 0; $i < 15; $i++)
                    <tr style="height: 10px; background: {{ $i % 2 == 0 ? '' : '#fdf6e7' }} !important;">
                        <td class="col-2"
                            style="padding: 0px;background: {{ $i % 2 == 0 ? '' : '#fff5f5' }};border:none">&nbsp;</td>
                        <td class="col-2"
                            style="padding: 0px;background: {{ $i % 2 == 0 ? '' : '#fff5f5' }};border:none">&nbsp;</td>
                        <td class="col-2"
                            style="padding: 0px;background: {{ $i % 2 == 0 ? '' : '#fff5f5' }};border:none">&nbsp;</td>
                        <td class="col-2"
                            style="padding: 0px;background: {{ $i % 2 == 0 ? '' : '#fff5f5' }};border:none">&nbsp;</td>
                        <td class="col-2"
                            style="padding: 0px;background: {{ $i % 2 == 0 ? '' : '#fff5f5' }};border:none">&nbsp;</td>
                        <td class="col-2" style="padding: 0px;background:#eaeaea">
                            <span style="float:left;margin-left:10px">$</span> <span
                                style="float:right;margin-right:10px">-</span>
                        </td>
                    </tr>
                @endfor
                <tr style="height: 10px; background: {{ $i % 2 == 0 ? '' : '#fdf6e7' }} !important;">
                    <td colspan="2" class="col-2" style="padding: 0px;border:none">&nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:none;border:1px solid #4e4d4d;background:#f1ebebd7">
                        <span style="float:left;margin-left:10px">$</span> <span
                            style="float:right;margin-right:10px">-</span>
                    </td>
                    <td class="col-2" style="padding: 0px;border:none;border:1px solid #4e4d4d;background:#f1ebebd7">
                        <span style="float:left;margin-left:10px">$</span> <span
                            style="float:right;margin-right:10px">-</span>
                    </td>
                    <td class="col-2" style="padding: 0px;border:none;border:1px solid #4e4d4d;background:#f1ebebd7">
                        &nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:1px solid #4e4d4d;background:#c0c0c099">
                        <span style="float:left;margin-left:10px"></span> <span
                            style="float:right;margin-right:10px"></span>
                    </td>
                </tr>

                <tr style="height: 10px; background: {{ $i % 2 == 0 ? '' : '#fdf6e7' }} !important;">
                    <td colspan="2" class="col-2" style="padding: 0px;border:none">&nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:none;">&nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:none;text-align:right"> <b>Subtotal</b></td>
                    <td class="col-2" style="padding: 0px;border:none;">&nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:1px solid #4e4d4d;background:#e9e7e799;">
                        <span style="float:left;margin-left:10px">$</span> <span
                            style="float:right;margin-right:10px">-</span>
                    </td>
                </tr>
                <tr style="height: 10px; background: {{ $i % 2 == 0 ? '' : '#fdf6e7' }} !important;">
                    <td colspan="2" class="col-2" style="padding: 0px;border:none">&nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:none;">&nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:none;text-align:right"> <b>Advanch</b></td>
                    <td class="col-2" style="padding: 0px;border:none;">&nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:1px solid #4e4d4d;background:#e9e7e799;">
                        <span style="float:left;margin-left:10px">$</span> <span
                            style="float:right;margin-right:10px">-</span>
                    </td>
                </tr>
                <tr style="height: 10px; background: {{ $i % 2 == 0 ? '' : '#fdf6e7' }} !important;">
                    <td colspan="2" class="col-2" style="padding: 0px;border:none">&nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:none;">&nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:none;text-align:right"> <b>Total</b></td>
                    <td class="col-2" style="padding: 0px;border:none;">&nbsp;</td>
                    <td class="col-2" style="padding: 0px;border:1px solid #4e4d4d;background:#e9e7e799;">
                        <span style="float:left;margin-left:10px">$</span> <span
                            style="float:right;margin-right:10px">-</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>



        <div class="footer" style="">
            <div style="margin-top: 60px">
                <table>
                    <tr>
                        <td class="col-6">
                            <h5 class="fw-bold" style="font-size: 18px;border-top:1px dashed #868686">Forma de Pago:</h5>
                        </td>
                        <td class="col-6" style="float:right;text-aligh:right">
                            <div style="float: right">

                            <h5 class="fw-bold" style="font-size: 18px;border-top:1px dashed #868686">Firma de quien recibe:</h5>
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
