<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WTTSSSNSP1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
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
    <body style="background: url('default/home-background.jpg') no-repeat center fixed; -webkit-background-size: cover; background-size: cover;">
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" style="color: white; background-color: rgba(24,24,24,0.8);">Profile</a>
                    @else
                        <a href="{{ route('login') }}" style="color: white; background-color: rgba(24,24,24,0.8);">Login</a>
                        <a href="{{ route('register') }}" style="color: white; background-color: rgba(24,24,24,0.8);">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   
                    </br>

                    <h1 style="font-size: 36px; color: aqua; background-color: rgba(24,24,24,0.8);">Welcome To The Simplon Super Social Network Sénart Promo 1 !</h1>

                    <h3 style="font-size: 20px; color: white; background-color: rgba(24,24,24,0.8);">Please log-in or register in the top right corner of this page, it's easy and free, with no adds and a lot of cookies ! </h3>

                    <h3 style="font-size: 20px; color: white; background-color: rgba(24,24,24,0.8);"> <a href="{{ route('register') }}" style="color: white; text-decoration: none;">Join us now !</a> </h3>

                    </br></br>

                    <h4 style="font-size: 16px; color: aqua; background-color: rgba(24,24,24,0.8);">... What are you waiting for ! Login or register and get a *reward : a developper plush !</h4> 

                    <h6 style="font-size: 8px; color: white; background-color: rgba(24,24,24,0.8); align-self: center;">*Reward is only available with a premium account, 99.99$/per day. Paypal, ticket restaurant, monopoly's ticket, visa gold and any other card are accepted ... especially visa gold. #givememoney</h6>
                </div>

                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>
