<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V04</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}">--}}
<!--===============================================================================================-->
</head>
<body>

@extends('layout.layout')

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
                <div class="table100 ver3 m-b-110">
                    <div class="table100-head">
                        <h1>My Blog</h1>
                        <table>
                            <thead>
                            <tr class="row100 head">
                                <th class="cell100 column1">Title</th>
                                <th class="cell100 column2">Teaser</th>
                                <th class="cell100 column3">Content</th>
                                <th class="cell100 column4">Describe</th>
                                <th class="cell100 column4">Edit</th>
                                <th class="cell100 column4">elete</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                            @foreach($blogs as $value )
                                <tr class="row100 body">
                                    <td class="cell100 column1">{{ $value->title }}</td>
                                    <td class="cell100 column2">{{ $value->teaser }}</td>
                                    <td class="cell100 column3">{{ $value->content }}</td>
                                    <td class="cell100 column4">{{ $value->describe}}</td>
                                    <td class="cell100 column5"><a href="{{ route('showUpdate', $value->id) }}">
                                            <button type="submit">Update</button>
                                        </a>
                                    </td>
                                    <td class="cell100 column6"><a href="{{ route('delete', $value->id) }}"
                                                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">
                                            <button type="submit">Delete</button>


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function () {
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function () {
                ps.update();
            })
        });


    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <a href="{{ route('showEdit') }}">
        <button type="submit">Thêm mới</button>
    </a>

</body>
</html>
