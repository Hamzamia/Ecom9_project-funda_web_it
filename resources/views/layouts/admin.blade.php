<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   

    
        <link rel="stylesheet" href=" {{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    @livewireStyles
</head>
    <body>
        <div class="container-scroller">

            @include('layouts.inc.admin.navbar')
            <div class="container-fluid page-body-wrapper">
                @include('layouts.inc.admin.sidebar')

                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')


                        <div class="row">
                            <div class="col-md-12 grid-margin">
                              <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex align-items-end flex-wrap">
                                  <div class="me-md-3 me-xl-5">

                                    @if (session('message'))
                                        <h2>{{session('message')}}</h2>
                                    @endif
                                    
                                    <p class="mb-md-0">Your analytics dashboard template.</p>
                                  </div>
                                  {{-- <div class="d-flex">
                                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                                  </div> --}}
                                </div>
                                {{-- <div class="d-flex justify-content-between align-items-end flex-wrap">
                                  <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                                    <i class="mdi mdi-download text-muted"></i>
                                  </button>
                                  <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                                    <i class="mdi mdi-clock-outline text-muted"></i>
                                  </button>
                                  <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                                    <i class="mdi mdi-plus text-muted"></i>
                                  </button>
                                  <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                                </div> --}}
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>

        
  

        <script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
        <script src="{{asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
      
        <!-- inject:js -->
            <script src="{{asset('admin/js/off-canvas.js')}}"></script>
            <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
            <script src="{{asset('admin/jjs/template.js')}}"></script>
            
        <!-- endinject -->

     <!-- Custom js for this page-->
        <script src="{{asset('admin/js/dashboard.js')}}"></script>
        <script src="{{asset('admin/js/data-table.js')}}"></script>
        <script src="{{asset('admin/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('admin/js/dataTables.bootstrap4.js')}}"></script>
       
  <!-- End custom js for this page-->

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
  <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}" defer></script>


  {{-- cdn --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    @livewireScripts

    </body>
</html>
