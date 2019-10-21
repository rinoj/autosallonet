<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('layouts.head')
</head>

<body class="page">
    
    
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->


    <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200" >
        @include('layouts.mobilemenu')
        <div data-canvas="container">
           
            @include('layouts.header')
            
            @yield('content')
            
            @include('layouts.footer')
            <!-- .footer-->
        </div>
    </div>
    <!-- end layout-theme-->

    @include('layouts.js')
</body>

</html>