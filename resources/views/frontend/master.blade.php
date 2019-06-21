<!DOCTYPE html>
<html>
    <head>
        <title>My Places</title>
        <base href="{{ asset('') }}"/>
        {{ Html::style('assets/bower/bootstrap/dist/css/bootstrap.css') }}
        {{ Html::style('assets/bower/bootstrap/dist/css/bootstrap-theme.css') }}
        {{ Html::style('assets/bower/bootstrap/dist/css/bootstrap.min.css') }}
        {{ Html::style('assets/css/application.css') }}
        {{ Html::style('assets/bower/slick-carousel/slick/slick.css') }}
        {{ Html::style('assets/bower/slick-carousel/slick/slick-theme.css') }}
        {{ Html::style('assets/bower/font-awesome/css/font-awesome.min.css') }}
        {{ Html::script('assets/bower/jquery/dist/jquery.min.js') }}
        {{ Html::script('assets/bower/bootstrap/dist/js/bootstrap.min.js') }}
        {{ Html::script('assets/bower/slick-carousel/slick/slick.min.js') }}
        {{ Html::script('assets/bower/jscroll/jquery.jscroll.js') }}
        {{ Html::script('assets/bower/sweetalert2/dist/sweetalert2.all.min.js') }}
        {{ Html::script('assets/bower/pusher-js/dist/node/pusher.js') }}
        <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    </head>
    <body>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="head-navbar">
            @include('frontend.layout.header')
        </nav>
        <div class="container mt-35">
            @include('frontend.layout.left-side-bar')
            @include('frontend.layout.right-slide')
            <div class="col-md-6 col-md-offset-2 padding0">
                @if(Session::has('pass'))
                    <p class="alert alert-success">
                        {{ session('pass') }}
                    </p>
                @endif
                @if(Session::has('error'))
                    <p class="alert alert-danger">
                        {{ session('error') }}
                    </p>
                @endif
                @yield('main')
            </div>
        </div>
        @include('frontend.layout.footer')
        @section('contentJs')
        {{ Html::script('assets/bower/jquery/dist/jquery.min.js') }}
        {{ Html::script('js/myscripts.js') }}
        {{ Html::script('js/Home/scollbar.js') }}
        {{ Html::script('js/Home/seemore.js') }}
        {{ Html::script('js/searchmap.js') }}
        {{ Html::script('js/googlemap.js') }}
    </body>
    @yield('script')
</html>
