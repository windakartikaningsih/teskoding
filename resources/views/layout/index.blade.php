<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.header')
    </head>

    <body>
        @include('layout.topbar')
        <div class="page-wrapper" id="page_content">

            <!-- Left Sidenav -->
            @include('layout.sidebar')
            <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    @yield('breadcrumbs')
                                </div>
                                <h4 class="page-title">@yield('title')</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->

                    @yield('content')
                </div><!-- container -->
                
                @include('layout/footer')
            </div>
            <!-- end page content -->

        </div>
        <!-- end page-wrapper -->

        @include('layout.javascript')
        </script>
    </body>
</html>