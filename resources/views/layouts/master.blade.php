<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name','The Market Place') }} @yield('title')</title>

        <!-- STyle sheet -->
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
    

<!--
    <script>
        var str=location.href.toLowerCase();
            console.log(str);

        $(document).ready(function() {
            var str=location.href.toLowerCase();
            $(".navbar-nav li").each(function() {
                if (str.indexOf(this.href.toLowerCase()) > -1)  {
                    $("li.active").removeClass("active");
                    $(this).addClass("active");
                }
            });
        })
-->

    </script>
        
    </head>
    <body>
        <div class="jumbotron">
            <div class="layer-overlay">
                <div class="container text-center">
                    <h1>The Market Place</h1>
                </div>
            </div>
        </div>

        <div>
            @include('includes.header')
        </div>

        <div class="wrapper">

            <div class="py-4">
                @yield('content')
            </div>

        </div>
        
        <div>
            @include('includes.footer')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>