<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico">

    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <!-- Normalize or reset CSS with your favorite library -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css"> --}}


    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <title>PT. ANGKASA AKBAR TARUNA - Internal System</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font: 10pt "Tahoma";
            color: black;
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {
            padding: 5mm;
            margin: 0 0 10mm auto;
            /* border: 1px #D3D3D3 solid;
            border-radius: 5px; */
            background: white;
            /* box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); */
        }

        .tableFixHead {
            table-layout: fixed;
            border-collapse: collapse;
        }

        .tableFixHead tbody {
            display: block;
            width: 100%;
            overflow: auto;
            height: 140px;
        }

        .tableFixHead thead tr {
            display: block;
        }

        .tableFixHead th,
        .tableFixHead td {
            width: 230px;
        }

        th {
            color: white;
            background: hwb(234deg 0% 45%);
            border: 1px solid white;
        }

        td {
            border: 1px solid black;
        }

        .form-control {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }

        .input-group-text {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }

        .form-select {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
            background-image: none;
        }



        @page {
            size: A4 Landscape;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 297mm;
                height: 210mm;
                font: 8pt "Tahoma";
                color: black;
            }

            ::-webkit-scrollbar {
                display: none;

            }



            .form-control {
                color: black;
                border: 1px solid hwb(234deg 0% 45%);
            }

            .input-group-text {
                color: black;
                border: 1px solid hwb(234deg 0% 45%);
            }

            .form-select {
                color: black;
                border: 1px solid hwb(234deg 0% 45%);
            }

            footer {
                page-break-after: always;
            }
        }
    </style>

    <script src="/tinymce/tinymce.min.js"></script>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript">
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'table advtable',
            menubar: 'file edit insert view format table tools help'
        });
    </script>
    <style>
        .select2-selection--multiple {
            overflow: hidden !important;
            height: auto !important;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="/css/select2-bootstrap.css " />

    <link rel="stylesheet" href="{{ asset('assets/libs/print/print.min.css') }}" />
    <script src="{{ asset('assets/libs/print/print.min.js') }}"></script>


</head>

<body class="bg-light">
    <div class="book">
        @yield('content')


        <!--pages-->
    </div>
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

        .tableexp {
            table-layout: fixed;
            color: #000;
            border-color: #000;

        }

        .tableexp thead th {
            font-weight: 500;
            padding: 0;

            font-size: 0.6rem;
            text-align: center !important;
            vertical-align: middle;


            /* color: #637381; */
        }

        .tableexp tbody td {
            font-weight: 500;
            padding: 0;
            font-size: 0.6rem;
            text-align: center !important;
            vertical-align: middle;
        }



        .form-control {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }

        .input-group-text {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }

        .form-select {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }

        .select2-container--open {
            z-index: 9999999
        }

        .select2-container--bootstrap .select2-selection {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }
    </style>
    <script>
        window.print();
    </script>
    <script>
        $(document).ready(function() {
            $(".select2").select2({
                tags: true,
                theme: "bootstrap"
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.date').datepicker({
                format: "yyyy/mm/dd",
            });
        });
    </script>

    <script src="/js/main.js"></script>
</body>

</html>
