<!DOCTYPE html>
<html lang="{{ app()->getLocale() == 'ar' ? 'ar' : 'en' }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : '' }}">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>
            @section('title')
            Wyfadah
            @show
      </title>

      @include('dashboard.layouts.header')
      @yield('header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">

            <!-- Navbar -->
            @include('dashboard.layouts.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('dashboard.layouts.aside')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                  <!-- Content Header (Page header) -->
                  <div class="content-header">
                        <div class="container-fluid">
                              <div class="row mb-2">
                                    <div class="col-sm-6">
                                          <h1 class="m-0 text-dark">
                                                @yield('page_header')
                                          </h1>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- /.content-header -->

                  <!-- Main content -->
                  <section class="content">
                        @yield('content')
                  </section>
                  <!-- /.content -->
            </div>

            <!-- /.content-wrapper -->
            @include('dashboard.layouts.footer')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                  <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      @include('dashboard.layouts.scripts')
      @yield('scripts')
</body>

</html>