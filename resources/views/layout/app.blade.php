<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uran</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('Uran/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Uran/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Uran/assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Uran/assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Uran/assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Uran/assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('Uran/assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('Uran/assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Uran/assets/js/plugins/prism.min.js') }}"></script>
    <script src="{{ asset('Uran/assets/js/plugins/sticky.min.js') }}"></script>

    <script src="{{ asset('Uran/assets/js/main/app.js') }}"></script>
    <script src="{{ asset('Uran/assets/js/pages/components_scrollspy.js') }}"></script>

</head>

<body data-spy="scroll" data-target=".sidebar-component-right">
    <!-- Main navbar -->
    @include('layout.navbar')
    @include('layout.sidebar')
    @include('.layout.header')
    @include('layout.content')
    @include('layout.news')
    {{-- <div class="sidebar-sticky w-100 w-md-auto order-1 order-md-2">
        <div class="sidebar sidebar-light sidebar-component sidebar-component-right sidebar-expand-md mb-3">
            <div class="sidebar-content">
                <div class="card">
                    <div class="card-header bg-transparent header-elements-inline">
                        <span class="text-uppercase font-size-sm font-weight-semibold">Notification</span>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <a href="http://themeforest.net/user/kopyov" class="btn bg-blue btn-block" target="_blank"><i
                                class="icon-reading mr-2"></i> Contact author</a>
                    </div>

                    <ul class="list-group list-group-flush rounded-bottom">
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Created:</span>
                            <div class="ml-auto">2015.10.01</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Latest update:</span>
                            <div class="ml-auto">2019.03.26</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Current version:</span>
                            <div class="ml-auto"><span class="badge badge-pill bg-warning-400">2.3</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div> --}}
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                data-target="#navbar-footer">
                <i class="icon-unfold mr-2"></i>
                Footer
            </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar-footer">
            <span class="navbar-text">
                &copy; 2024 <a href="#">copyright Aplikasi uran Terkini</a>
            </span>
        </div>
    </div>
    </div>
    </div>

</body>

</html>
