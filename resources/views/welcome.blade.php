<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/dashboard') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Dashboard') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<div class="bg-cover bg-center absolute z-0 h-screen bg-no-repeat bg-log-background-dark"></div>
<div class="z-0 opacity-90 w-full h-full absolute bg-log-background-dark bg-no-repeat bg-cover"></div>
<div class="absolute w-full flex flex-col">
    <div class="bg-bottom bg-no-repeat bg-cover" style="background-image:url('https://galaxy.up.video/media/backgrounds/bg-curve.svg')">
        <header class="z-20 w-full xl:px-0 px-2">
            <div class="container mx-auto flex flex-wrap ">
                <div class="flex sm:w-1/2">
                    <svg version="1.1" id="isologo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="40px" height="40px" viewBox="0 0 399.998 399.997" style="enable-background:new 0 0 399.998 399.997;"
                         xml:space="preserve">
                </div>
            </div>
        </header>
        <section class="w-full">
            <div class="container mx-auto flex flex-row sm:items-center xl:pb-16 xl:px-0 px-4">
                <div class="w-1/2 text-white flex flex-col">
                    <h1 class="sm:text-5xl text-xl font-bold sm:mb-4"></h1>
                    <form class="xl:mt-4 mt-8 flex xl:flex">
                  </form>

                </div>
                <div class="sm:mt-4 xl:pt-8 xl:items-center flex justify-end">
                    <img class="mt-4 mb-4" alt="padayon_logo" src="https://scontent.xx.fbcdn.net/v/t1.15752-0/p280x280/128172391_712235383063674_771995936426189460_n.png?_nc_cat=106&ccb=2&_nc_sid=ae9488&_nc_eui2=AeGNfMIijGVNYMVedi0q6dzLpROr4rsGwnmlE6viuwbCeeyYM_XXfhs9jEScNbFZNp9rLo2J5o0fMEYCqqOVjISn&_nc_ohc=UTOPN8SRd38AX-jFsHS&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=3354d6e4f584f2538cea2947b2bd0a5b&oe=5FE4F2B7">
                </div>
            </div>
        </section>
    </div>
    <div class="bg-white pb-8 w-full pt-8">
        <div class="container mx-auto">

            <div class="text-center w-full pb-16">
                <h3 class="uppercase text-gray-800">Why Padayon LMS?</h3>
                <p class="sm:text-3xl text-2xl text-black-800 pt-4 xl:w-1/2 mx-auto">
                    A helping hand in moving forward.
                </p>
            </div>

             <div class="flex flex-col w-full  mb-12 px-4">
                <div class="mb-8 sm:mb-0 xl:pr-0 pr-2 m-8">
                    <div class="flex flex-wrap mb-4">
                        <div class="w-5/6"><h4 class="text-black items-center xl:text-2xl font-bold">Simplicity</h4></div>
                    </div>
                    <p><b class="font-normal "> Created with simple UI design which still captivates the eyes. </p>
                </div>
                <div class="mb-8 sm:mb-0 xl:pr-0 pr-2 m-8">
                    <div class="flex flex-wrap mb-4">
                      <div class="w-4/5"><h4 class="text-black items-center xl:text-2xl font-bold">SMS</h4></div>
                    </div>
                    <p><b class="font-normal"> Our SMS feature allows parents to receive notifications of their child's class performance.</p>
                </div>
                <div class="mb-8 sm:mb-0 xl:pr-0 pr-2 m-8">
                    <div class="flex flex-wrap mb-4">
                        <div class="w-4/5"><h4 class="text-black items-center xl:text-2xl font-bold">Functionality</h4></div>
                    </div>
                    <p><b class="font-normal"> The in-app features enables the users to manuever within the app with ease while serving their functions.  </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="container text-center pb-8 text-xs text-gray-700 mx-auto ">
        <div>Developed by: coffeeOverflow</a></div>

    </footer>
</div>
</body>
</html>
