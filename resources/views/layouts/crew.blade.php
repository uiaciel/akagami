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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">

    <title>PT. ANGKASA AKBAR TARUNA - Internal System</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

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

</head>

<body class="bg-light">
    @yield('content')
    <!-- Libs JS -->
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.date').datepicker({
                format: "yyyy/mm/dd",
            });
        });
    </script>
    <script>
        $(document).ready(() => {
            $('#images').change(function() {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        console.log(event.target.result);
                        $('#imgPreview').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#alltable').DataTable();
        });
    </script>
</body>

</html>
