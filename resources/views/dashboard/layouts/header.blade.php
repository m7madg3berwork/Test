<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('dashboard/dist/ionicons/ionicons.css') }}">

<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet"
      href="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ asset('dashboard/plugins/jqvmap/jqvmap.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.css') }}">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('dashboard/plugins/summernote/summernote-bs4.css') }}">


@if (app()->getLocale() == 'ar')
<link rel="stylesheet" href="{{ asset('dashboard/dist/rtl/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard/dist/rtl/custom.css') }}">
@endif

<style>
      @font-face {
            font-family: Cairo;
            src: url('dashboard/dist/fonts/Cairo-Regular.ttf');
      }

      *:not(i) {
            font-family: 'Cairo', sans-serif !important;
      }
</style>