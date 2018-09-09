<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- SEO -->
    <meta name="robots" content="nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- Metas -->
    @include('admin.partials._metas')

    <!-- Favicons -->
    @include('admin.partials._favicons')

    <!-- Styles -->
    @include('admin.partials._styles')
    @yield('styles')

</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        <!-- Main Header -->
        @include('admin.partials._header')

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                @include('admin.partials._sidebar')

            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- /.main-sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('title')
                    <small>@yield('description')</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">@yield('title')</li>
                </ol>
            </section>
            <!-- /.content-header -->

            <!-- Main Content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">

            @include('admin.partials._footer')

        </footer>
        <!-- /.main-footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">

            @include('admin.partials._controls')

        </aside>
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    @include('admin.partials._scripts')
    @yield('scripts')

</body>
</html>
