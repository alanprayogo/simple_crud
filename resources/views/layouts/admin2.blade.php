<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>
    
    <link rel="stylesheet" href={{ asset("dist/assets/css/bootstrap.css") }}>
    <link rel="stylesheet" href={{ asset("dist/assets/vendors/simple-datatables/style.css") }}>
    <link rel="stylesheet" href={{ asset("dist/assets/vendors/chartjs/Chart.min.css") }}>

    <link rel="stylesheet" href={{ asset("dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css") }}>
    <link rel="stylesheet" href={{ asset("dist/assets/css/app.css") }}>
    <link rel="shortcut icon" href={{ asset("dist/assets/images/favicon.svg") }}type="image/x-icon">
</head>
<body>
    {{-- begin::sidebar --}}
    @include('layouts.partials.sidebar2')
    {{-- end::sidebar --}}

{{-- begin::hide-sidebar --}}
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>
{{-- end::hide-sidebar --}}

    {{-- begin::main --}}
    <div id="main">
        {{-- begin::navbar --}}
        @include('layouts.partials.navbar2')
        {{-- end::navbar --}}
        
        {{-- begin::yield-content --}}
        <div class="main-content container-fluid">
            {{-- begin::header --}}
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>@yield('title')</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class='breadcrumb-header'>
                            <ol class="breadcrumb">
                                @section('breadcrumb')
                                <li class="breadcrumb-item " aria-current="page">Pegawai</li>
                                @show
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            {{-- end::header --}}
            {{-- begin::main-content --}}
            @yield('content')
            {{-- end::main-content --}}
        </div>
        {{-- end::yield-content --}}

        {{-- begin::footer --}}
        @include('layouts.partials.footer')
        {{-- end::footer --}}
    </div>
    {{-- end::main --}}

    {{-- begin::script --}}
    <script src={{ asset("dist/assets/js/feather-icons/feather.min.js") }}></script>
    <script src={{ asset("dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js") }}></script>
    <script src={{ asset("dist/assets/js/app.js") }}></script>
    
    <script src={{ asset("dist/assets/vendors/chartjs/Chart.min.js") }}></script>
    <script src={{ asset("dist/assets/vendors/apexcharts/apexcharts.min.js") }}></script>
    <script src={{ asset("dist/assets/js/pages/dashboard.js") }}></script>

    <script src={{ asset("dist/assets/js/main.js") }}></script>
    {{-- end::script --}}

</body>
</html>
