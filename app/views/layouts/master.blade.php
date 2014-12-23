<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabor Application</title>
    {{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::script('bower_components/jquery/dist/jquery.min.js') }}
    {{ HTML::script('assets/js/boostrap-datepicker.js') }}
    {{ HTML::script('assets/js/locales/bootstrap-datepicker.pl.js') }}
</head>
<body>
<div id="wrapper">
    @include('layouts.menu.left-menu')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="col-lg-12">
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
                    <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                </a>

                 @if(Session::has('message'))
                         <p class="alert alert-success">{{ Lang::get('messages.'.Session::get('message')) }}</p>
                     @endif
                @yield('content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

 <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>