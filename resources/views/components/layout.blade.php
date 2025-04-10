<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{'storage/img/apple-touch-icon.png'}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{'storage/img/favicon-32x32.png'}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{'storage/img/favicon-16x16.png'}}">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js']);
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="styles/layout.css">
</head>
<body class="h-[1000px]">


<nav class="bg-white  fixed w-full z-20 top-0 start-0 border-b border-gray-200 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{route('home')}}" class="flex items-center justify-center space-x-3 rtl:space-x-reverse">
        <img src="{{'storage/img/logo.png'}}" width="130px" alt="Flowbite Logo">
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <a class="px-6 font-buttons py-2 min-w-[120px] text-center text-white bg-[var(--secondary-color)] rounded hover:bg-white hover:border hover:border-[var(--secondary-color)] hover:text-[var(--secondary-color)] active:bg-white focus:outline-none focus:ring"
        href="{{route('contact')}}">
        Contact Us
      </a>

        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>

    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 font-poppins text-lg ">
        <li>
            <a href="{{route('about_us')}}" class="block py-2 px-3 text-gray-900 rounded-sm md:p-0 {{ request()->routeIs('about_us') ? 'active-link' : '' }}">About Us</a>
          </li>

        <li>
            <a href="{{route('service')}}" class="block py-2 px-3  text-gray-900 rounded-sm md:p-0 {{ request()->routeIs('service') ? 'active-link' : '' }}">Services</a>
        </li>

        <li>
            <a href="{{route('feedback')}}" class="block py-2 px-3 text-gray-900 rounded-sm md:p-0 {{ request()->routeIs('feedback') ? 'active-link' : '' }}">Review</a>
        </li>


      </ul>
    </div>
    </div>
</nav>



@yield('content')

  <!-- Footer -->
  <footer class="footer bg-gray-50 p-6">
    <div class="mx-auto max-w-screen-xl flex flex-col sm:flex-row justify-between items-center">
        <!-- Logo Section -->
        <div class="flex items-center mb-4 sm:mb-0">
            <a href="{{route('home')}}"><img src="{{'storage/img/logo.png'}}" alt="Prestige Passengers" width="150" /></a>
        </div>

        <!-- Location, Phone, and Print Icons Section -->
        <div class="flex flex-col sm:flex-row items-center sm:space-x-6 mb-4 sm:mb-0">
            <!-- Location Icon and Address -->
            <div class="flex items-center mb-2 sm:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                    <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                </svg>
                <span class="font-normal">Hlaing Township, Yangon</span>
            </div>

            <!-- Phone Icon and Number -->
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                </svg>
                <span class="font-normal">(+959) 448831872</span>
            </div>
        </div>

        <!-- Social Media Icons Section -->
        <div class="flex items-center space-x-6">
            <a href="https://www.facebook.com/share/1YGyrCzowc/?mibextid=wwXIfr" class="text-gray-500 hover:text-[var(--primary-color)]">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                </svg>
            </a>
            <a href="#" class="text-gray-500 hover:text-[var(--primary-color)]">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743A11.65 11.65 0 013 4.792a4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                </svg>
            </a>
            <a href="#" class="text-gray-500 hover:text-[var(--primary-color)]">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.23 0H1.77C.79 0 0 .77 0 1.72v20.56C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.21 0 22.23 0zM7.06 20.45H3.56V9h3.5v11.45zM5.31 7.76c-1.14 0-2.06-.92-2.06-2.06s.92-2.06 2.06-2.06c1.14 0 2.06.92 2.06 2.06s-.92 2.06-2.06 2.06zM20.45 20.45h-3.5v-5.6c0-1.34-.03-3.07-1.87-3.07-1.87 0-2.16 1.46-2.16 2.97v5.7h-3.5V9h3.36v1.57h.05c.47-.89 1.62-1.87 3.33-1.87 3.56 0 4.22 2.34 4.22 5.39v6.36z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="text-center text-sm text-gray-500 mt-6">
        <span>© 2025 Prestige Passengers. All Rights Reserved.</span>
    </div>
</footer>





<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="styles/layout.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

@yield('javascript')

<script>
    AOS.init();
</script>

</body>

</html>

