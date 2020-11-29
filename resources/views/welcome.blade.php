<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Padayon LMS</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <!-- component -->
<!-- I've set max-w-screen-md, you may need to change it -->
<nav class="bg-white shadow fixed max-w-screen-md z-10 mx-auto inset-x-0 top-0 flex justify-between items-center min-w-full">

    <a href="#" class="font-extrabold m-3 uppercase inline-flex hover:text-pink-700 transition-all duration-500">
        <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
            <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
        </svg>
      Padayon LMS
    </a>

    <button id="mobileMenuButton" class="p-3 focus:outline-none md:hidden" title="Open side menu">
      <!-- SVG For "x" button -->
        <svg id="mobileMenuButtonClose" class="w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
      <!-- SVG For "Menu burger" button -->
        <svg id="mobileMenuButtonOpen" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

  <!-- List of nav item -->
    <div id="sideMenuHideOnMobile" class="bg-white font-semibold z-10 rounded-bl-md flex absolute top-0 right-0 transition-all duration-500 transform translate-x-0
                                          w-1/2 md:w-auto
                                          px-3 md:px-0
                                          flex-col md:flex-row
                                          -translate-y-full md:translate-y-0
                                          md:mt-1 md:items-center md:mx-1 md:uppercase">
    @auth
        <a href="{{ url('/dashboard') }}" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-pink-600 hover:text-pink-700 transition-all duration-500 py-1 sm:p-0">{{ __('Dashboard') }}</a>
    @else
        <a href="{{ route('login') }}" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-pink-600 hover:text-pink-700 transition-all duration-500 py-1 sm:p-0">{{ __('Login') }}</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-pink-600 hover:text-pink-700 transition-all duration-500 py-1 sm:p-0">{{ __('Register') }}</a>
        @endif
    @endauth
    </div>

</nav>


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


<script>
    var mobileMenuButton = document.getElementById("mobileMenuButton");
    mobileMenuButton.onclick = function() {
        document.getElementById("sideMenuHideOnMobile").classList.toggle("-translate-y-full");
        document.getElementById("sideMenuHideOnMobile").classList.toggle("mt-12");
        document.getElementById("sideMenuHideOnMobile").classList.toggle("shadow");
        document.getElementById("mobileMenuButtonClose").classList.toggle("hidden");
        document.getElementById("mobileMenuButtonOpen").classList.toggle("hidden");
    }
      // Hide element when click outside nav
    var theElementContainer = document.getElementsByTagName("nav")[0];
    document.addEventListener('click', function(event) {
        if (!theElementContainer.contains(event.target)) {
            document.getElementById("sideMenuHideOnMobile").classList.add("-translate-y-full");
            document.getElementById("sideMenuHideOnMobile").classList.remove("mt-12");
            document.getElementById("sideMenuHideOnMobile").classList.remove("shadow");
            document.getElementById("mobileMenuButtonOpen").classList.remove("hidden");
            document.getElementById("mobileMenuButtonClose").classList.add("hidden");
        }
    });
    </script>
</body>
</html>
