<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabor Application</title>
    {{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    {{ HTML::script('bower_components/jquery/dist/jquery.min.js') }}

    <style>
    /*!
     * Start Bootstrap - Simple Sidebar HTML Template (http://startbootstrap.com)
     * Code licensed under the Apache License v2.0.
     * For details, see http://www.apache.org/licenses/LICENSE-2.0.
     */

    /* Toggle Styles */

    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        background: #000;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #page-content-wrapper {
        width: 100%;
        padding: 15px;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    /* Sidebar Styles */

    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav li {
        text-indent: 20px;
        line-height: 40px;
    }

    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #999999;
    }

    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #fff;
        background: rgba(255,255,255,0.2);
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
    }

    .sidebar-nav > .sidebar-brand a {
        color: #999999;
    }

    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
    }

    @media(min-width:768px) {
        #wrapper {
            padding-left: 250px;
        }

        #wrapper.toggled {
            padding-left: 0;
        }

        #sidebar-wrapper {
            width: 250px;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 0;
        }

        #page-content-wrapper {
            padding: 20px;
        }

        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }
    }
    </style>
</head>
<body>
<div id="wrapper">
    @include('layouts.menu.left-menu')

        <!-- Page Content -->
        <div id="page-content-wrapper">

                    <div class="col-lg-12">



                                {{--<!-- Page Header -->--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-lg-12">--}}
                                        {{--<h1 class="page-header">Page Heading--}}
                                            {{--<small>Secondary Text</small>--}}
                                        {{--</h1>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /.row -->--}}

                                {{--<!-- Projects Row -->--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6 portfolio-item">--}}
                                        {{--<a href="#">--}}
                                            {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                                        {{--</a>--}}
                                        {{--<h3>--}}
                                            {{--<a href="#">Project One</a>--}}
                                        {{--</h3>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 portfolio-item">--}}
                                        {{--<a href="#">--}}
                                            {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                                        {{--</a>--}}
                                        {{--<h3>--}}
                                            {{--<a href="#">Project Two</a>--}}
                                        {{--</h3>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /.row -->--}}

                                {{--<!-- Projects Row -->--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6 portfolio-item">--}}
                                        {{--<a href="#">--}}
                                            {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                                        {{--</a>--}}
                                        {{--<h3>--}}
                                            {{--<a href="#">Project Three</a>--}}
                                        {{--</h3>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 portfolio-item">--}}
                                        {{--<a href="#">--}}
                                            {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                                        {{--</a>--}}
                                        {{--<h3>--}}
                                            {{--<a href="#">Project Four</a>--}}
                                        {{--</h3>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /.row -->--}}

                                {{--<!-- Projects Row -->--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6 portfolio-item">--}}
                                        {{--<a href="#">--}}
                                            {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                                        {{--</a>--}}
                                        {{--<h3>--}}
                                            {{--<a href="#">Project Five</a>--}}
                                        {{--</h3>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 portfolio-item">--}}
                                        {{--<a href="#">--}}
                                            {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                                        {{--</a>--}}
                                        {{--<h3>--}}
                                            {{--<a href="#">Project Six</a>--}}
                                        {{--</h3>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /.row -->--}}

                                {{--<hr>--}}

                                {{--<!-- Pagination -->--}}
                                {{--<div class="row text-center">--}}
                                    {{--<div class="col-lg-12">--}}
                                        {{--<ul class="pagination">--}}
                                            {{--<li>--}}
                                                {{--<a href="#">«</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="active">--}}
                                                {{--<a href="#">1</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#">2</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#">3</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#">4</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#">5</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#">»</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /.row -->--}}


                        {{--<h1>Simple Sidebar</h1>--}}
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></a>

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