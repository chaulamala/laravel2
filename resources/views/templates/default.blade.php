<!DOCTYPE html>
<html lang="en">

@include('templates.partials._head');

<body class="animsition">
    <div class="page-wrapper">

        
        @include('templates.partials._sidebar');

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            
            @include('templates.partials._header');

            <!-- MAIN CONTENT-->
            @yield('content');
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    @include('templates.partials._script');
</body>

</html>
<!-- end document-->
