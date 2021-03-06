@include('layouts._partials.admin_head')
@include('layouts._partials.admin_navbar')
@include('layouts._partials.admin_sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    @yield('title')
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">@lang('home.brickhome')</a></li>
                        @yield('breadcrumb_list')
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
            @yield('content')
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('layouts._partials.admin_footer')
