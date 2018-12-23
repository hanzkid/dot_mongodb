<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/datatable/datatables.min.css"/>
    <style type="text/css"></style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                            <li class="nav-item">
                                <a class="nav-link" href="/">Data Application Form</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/data_applicant">Data Applicant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/emergency_contact">Data Emergency Contact</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="/tenor">Data Tenor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/company">Data Company</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/qc">Quality Control</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/report">Report</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script type="text/javascript" src="/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/datatable/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("table").DataTable({
        });
        $("#refreshbtn").click(function(){
            location.reload();
        });
    });
</script>
</html>
