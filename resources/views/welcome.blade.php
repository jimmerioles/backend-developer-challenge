<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-brand-lightest font-roboto font-normal">
    <div class="flex flex-col">
        @if(Route::has('login'))
            <div class="absolute pin-t pin-r mt-4 mr-4">
                @auth
                    <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase">Home</a>
                @else
                    <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase pr-6">Login</a>
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase">Register</a>
                @endauth
            </div>
        @endif

        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div class="text-center">
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-5xl mb-6">
                        {{ config('app.name', 'Laravel') }}
                    </h1>
                    <ul class="list-reset">
                        <li class="inline pr-8">
                            <a href="https://github.com/jimmerioles/backend-developer-challenge" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Forge">Documentation</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://github.com/jimmerioles" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="GitHub">GitHub</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://www.linkedin.com/in/jimwisleymerioles" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Documentation">LinkedIn</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://twitter.com/jimmerioles" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Laracasts">Twitter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
