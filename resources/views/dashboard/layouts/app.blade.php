<!DOCTYPE html>
<html lang="{{ app()->getLocale() == 'ar' ? 'ar' : 'en' }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : '' }}">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

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

            @include('dashboard.layouts.navbar')

            @include('dashboard.layouts.aside')

            <div class="content-wrapper">

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

                  <section class="content">
                        @yield('content')
                  </section>
            </div>

            {{-- @include('dashboard.layouts.footer') --}}

            {{-- <aside class="control-sidebar control-sidebar-dark">
            </aside> --}}

      </div>

      @include('dashboard.layouts.scripts')
      @yield('scripts')
</body>

</html>