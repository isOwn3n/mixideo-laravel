@extends('layouts.root')

{{--
<!DOCTYPE html>
<html class="" lang="en">
<!-- Mirrored from dostguru.com/HTML/mixideo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Jan 2023 17:01:22 GMT -->

<head>
    <meta charset="utf-8">
    <title>Login | Mixideo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <!-- table css start -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="css/rowGroup.jqueryui.min.css">
    <!-- table css end -->
    <!--bootstrap required css start -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Font Awesome Free 5.15.1 -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <!-- Font awesome end  -->
    <!-- owl carousel js/css start -->
    <link rel="stylesheet" href="js/owl-carousel/css/owl.carousel.html">
    <!-- owl carousel js/css end -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- google fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- custom css end -->
</head>

<body>
    {{ $slot }}

    <!-- jQuery library -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- table Js start -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.jqueryui.min.js"></script>
    <script src="js/dataTables.rowGroup.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <!-- table Js End -->
    <!-- Data Table js -->
    <script type="text/javascript">
        $(document).ready(function () {
        $('#executive-table-01').DataTable({
            order: [[2, 'asc']],
            "bInfo": false,
            "scrollY": 400,
            "scrollX": false,
            "visible": false,
            "targets": 0,
            "oLanguage": {
                "LengthMenu": "[ 10, 25, 50, 75, 100 ]"
            },
            "language": {
                paginate: {next: '&#8594;', previous: '&#8592;'},
                search: '',
                searchPlaceholder: "Search here...."
            },

            // "searching": false,
        });
    });
    </script>
    <!-- Data Table js end -->
    <script type="text/javascript">
        $(".tab").click(function () {
        $("#" + $(this).attr('id').replace("goto", "")).addClass("active");
        $(this).parent().parent().removeClass("active");
    });
    </script>
</body>

<!-- Mirrored from dostguru.com/HTML/mixideo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Jan 2023 17:01:24 GMT -->

</html> --}}