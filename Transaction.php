<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2|Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
        }

        .mainbox {
            height: 70px;
            width: 100%;
            background-image: url('images/dp2.png');
            background-size: cover;
            border-radius: 0 0 25px 25px;
            background-repeat: no-repeat;
            font-size: 20px;
        }

        .backarrow {
            position: fixed;
            margin-top: 0;
            padding-left: 20px;
        }

        .backarrow h2:before {
            content: ' \2190';
            color: white;

        }

        a {
            text-decoration: none;
        }

        .forwardarrow {
            position: fixed;
            margin-top: 36px;
            padding-left: 125px;
        }

        .forwardarrow h2:before {
            content: ' \2192';

            color: white;

        }

        .box {
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);



            min-height: 100px;
            width: 88%;
            margin: 20px auto;
            background: white;
            border-radius: 5px;
        }

        @media only screen and (min-device-width: 597px) and (max-device-width: 874px) {


            .forwardarrow {
                padding-left: 240px;
            }


        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {


            .forwardarrow {
                padding-left: 310px;
            }
        }

        @media only screen and (min-device-width: 1024px) and (max-device-width: 1366px) {
            
            .forwardarrow {
                padding-left: 420px;
            }
        }
    </style>
</head>

<body>
    <div class="mainbox">
        <div class="backarrow"><a href="welcome.php">
                <h2></h2>
            </a></div><br>  
    </div>
    </div>
    <br>
    <p style="text-align: center">Hello, this is basic template edit it according to you, you have to fetch all detils from payment tables created in database according to your logic. <br>I am not Doing this because i don't know about your project planning Thank you.</p>
    
    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Invoice
                <strong>01/01/01/2018</strong>
                <span class="float-right"> <strong>Status:</strong> Pending</span>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Webz Poland</strong>
                        </div>
                        <div>Madalinskiego 8</div>
                        <div>71-101 Szczecin, Poland</div>
                        <div>Email: info@webz.com.pl</div>
                        <div>Phone: +48 444 666 3333</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>Bob Mart</strong>
                        </div>
                        <div>Attn: Daniel Marek</div>
                        <div>43-190 Mikolow, Poland</div>
                        <div>Email: marek@daniel.com</div>
                        <div>Phone: +48 123 456 789</div>
                    </div>



                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th>Description</th>

                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center">1</td>
                                <td class="left strong">Origin License</td>
                                <td class="left">Extended License</td>

                                <td class="right">$999,00</td>
                                <td class="center">1</td>
                                <td class="right">$999,00</td>
                            </tr>
                            <tr>
                                <td class="center">2</td>
                                <td class="left">Custom Services</td>
                                <td class="left">Instalation and Customization (cost per hour)</td>

                                <td class="right">$150,00</td>
                                <td class="center">20</td>
                                <td class="right">$3.000,00</td>
                            </tr>
                            <tr>
                                <td class="center">3</td>
                                <td class="left">Hosting</td>
                                <td class="left">1 year subcription</td>

                                <td class="right">$499,00</td>
                                <td class="center">1</td>
                                <td class="right">$499,00</td>
                            </tr>
                            <tr>
                                <td class="center">4</td>
                                <td class="left">Platinum Support</td>
                                <td class="left">1 year subcription 24/7</td>

                                <td class="right">$3.999,00</td>
                                <td class="center">1</td>
                                <td class="right">$3.999,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="right">$8.497,00</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Discount (20%)</strong>
                                    </td>
                                    <td class="right">$1,699,40</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>VAT (10%)</strong>
                                    </td>
                                    <td class="right">$679,76</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong>$7.477,36</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>