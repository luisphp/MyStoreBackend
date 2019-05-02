<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

                <div class="text-center">
                    <img src="http://localhost/MyStoreBackend/storage/app/public/MyStoreLogo.png" class="rounded" alt="..." style="width: 400px;">
                </div>
                <div class="title m-b-md">
                    MyStore Backend
                </div>

                <div class="links">
                    <a href="index.php/products">Products</a>
                    <a href="index.php/sellers">Sellers</a>
                    <a href="index.php/categories">Categories</a>
                    <a href="index.php/orders">Orders</a>
                    <a href="index.php/customers">Customers</a>
                    <a href="index.php/campaings">Campaings</a>
                    <a href="https://www.github.com/luisphp" target="new">GitHub Luis Hurtado</a>
                </div>
            </div>
        </div>
    </body>
</html>
