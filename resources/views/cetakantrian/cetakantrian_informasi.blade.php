<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A4</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        .overflowtes td {
            border: 1px solid black;
            word-wrap: break-word;
        }

        .sheet {
            overflow: visible;
            height: auto !important;
        }

        @media print {
            @page {
                size: A4 landscape; /* DIN A4 standard, Europe */
                margin: 0;
            }

            html, body {
                width: 210mm;
                /* height: 297mm; */
                height: 282mm;
                font-size: 11px;
                background: #FFF;
                overflow: visible;
            }

            body {
                padding-top: 15mm;
            }
        }


    </style>
    <style>@page {
            size: A4 landscape;
        }

        #title {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            font-weight: bold;
        }

        .tabeldatakaryawan {
            margin-top: 40px;
        }

        .tabeldatakaryawan tr td {
            padding: 5px;
        }

        .tabelpresensi {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            border-color: white;
        }

        .tabelpresensi tr th {
            border: 1px solid #000000;
            padding: 8px;
            background: #cccaca;
        }

        .tabelpresensi tr td {
            border: 1px solid #000000;
            padding: 5px;
            font-size: 12px;
        }

        .foto {
            width: 40px;
            height: 30px;
        }
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
{{--<body class="A4 landscape">--}}
<body class="A5">


<!-- Each sheet element should have the class "sheet" -->
<!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
<section style="width: 300px" class="sheet padding-10mm">

    <!-- Write HTML just like a web page -->
    <table style="width: 100%">
        <tr>
            <td style="width: 30px">
                {{--<img src="{{ asset('assets/img/logopresensi.png') }}" width="70" height="70" alt="">--}}
            </td>
            <td>
                <center>
                    <span style="margin-left: -40px;" id="title">
                    LAPAS SELONG <br>

                        <br>

                </span>
                    <span style="font-weight: bold; margin-left: -40px;">Antrian Informasi</span>
                    <span hidden><i>Jl. Majapahit No.44, Kekalik Jaya, Kec. Sekarbela, Kota Mataram, Nusa Tenggara Barat. 83115</i></span>
                </center>

            </td>
        </tr>
    </table>
    <div style="height: 50px;">

    </div>

    <center>
        <span style="font-size: 40px; font-weight: bold">{{ $final_noantrian }}</span>
    </center>

    <div style="height: 50px">

    </div>
    <center>
        <span>Tanggal</span>
    </center>
    <div style="height: 10px;">

    </div>
    <center>
        <span style="font-weight: bold">{{ $tanggal_hari_ini }}</span>
    </center>

</section>

</body>

</html>