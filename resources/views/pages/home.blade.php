@extends('components.layout')

@section('content')
<div class="relative bg-gradient-to-r from-purple-600 to-blue-600 h-screen text-white overflow-hidden">
    <div class="absolute inset-0">
      <img src="{{'storage/img/Hero.jpg'}}" class="w-full h-full object-cover" alt="Hero Image" />
      <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>

    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
      <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-4 font-poppins">
        Easy Travel &
      </h1>
      <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-4 font-poppins">
        Visa Services.
      </h1>
      <p class="text-base md:text-lg text-gray-300 mb-6 max-w-lg md:max-w-2xl font-poppins">
        Expert visa processing, travel support, and medical assistance –
        making your journey stress-free.
      </p>
      <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 space-x-0 md:space-x-10">
        <a href="#"
          class="bg-[var(--button-color)]  text-[#2A2E75] py-2 px-6 text-lg transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg font-poppins">
          Apply Now
        </a>
        <a href="#"
          class="bg-[var(--button-color)]  text-[#2A2E75] py-2 px-6 text-lg transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg font-poppins">
          Learn More
        </a>
      </div>
    </div>
  </div>

  <div style="background-color: #FBC80B;">
    <div class="mx-auto text-center">
      <h1 class="text-5xl font-extrabold text-[#2A2E75] leading-tight mb-1 border-gray-500 pb-2 pt-2 font-poppins">
        Services
      </h1>
      <p class="text-xl font-poppins text-[#2A2E75]">What Can We Help ?</p>
    </div>


    <div class="p2-container swiper">
      <div class="p2-card-wrapper">
        <ul class="p2-card-list swiper-wrapper">
          <li class="p2-card-item swiper-slide">
            <a href="" class="p2-card-link">
              <img src="{{'storage/img/passport.jpg'}}" alt="Passport Image" class="p2-card-image">

              <h2 class="p2-card-title text-[#2A2E75] font-roboto text-xl font-bold">
                Passport Services
              </h2>

            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="" class="p2-card-link">
              <img src="{{'storage/img/passport.jpg'}}" alt="Hotel Image" class="p2-card-image">

              <h2 class="p2-card-title text-[#2A2E75] font-roboto text-xl font-bold">
                Hotel Booking
              </h2>

            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="" class="p2-card-link">
              <img src="{{'storage/img/passport.jpg'}}" alt="Visa Image" class="p2-card-image">

              <h2 class="p2-card-title text-[#2A2E75] font-roboto text-xl font-bold">
                Visa Services
              </h2>

            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="" class="p2-card-link">
              <img src="{{'storage/img/passport.jpg'}}" alt="Card Image" class="p2-card-image">

              <h2 class="p2-card-title text-[#2A2E75] font-roboto text-xl font-bold">
                ------ Services
              </h2>

            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="" class="p2-card-link">
              <img src="{{'storage/img/passport.jpg'}}" alt="Card Image" class="p2-card-image">

              <h2 class="p2-card-title text-[#2A2E75] font-roboto text-xl font-bold">
                ------ Services
              </h2>

            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="" class="p2-card-link">
              <img src="img/developer.jpg" alt="Card Image" class="p2-card-image">

              <h2 class="p2-card-title text-[#2A2E75] font-roboto text-xl font-bold">
                ------ Services
              </h2>

            </a>
          </li>
        </ul>

        <div class="swiper-pagination"></div>
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
      </div>
    </div>


    <div class="flex gap-4 mt-10 pb-10">

      <a class="px-10 py-2 mx-auto min-w-20 text-center text-white bg-[#2A2E75] border border-[#2A2E75] active:text-[#2A2E75] hover:bg-transparent hover:text-[#2A2E75] focus:outline-none focus:ring"
        href="#">
        See More Services
      </a>
    </div>
  </div>




  {{-- <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
      <div class="rounded-xl overflow-hidden shadow-lg">
        <a href="#"></a>
        <div class="relative">
          <a href="#">
            <img class="w-full h-60 object-cover" src="{{'storage/img/passport.jpg'}}" alt="Passport" />
            <div
              class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
            </div>
          </a>
        </div>
        <div class="px-6 py-4 text-center">
          <a href="#"
            class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">
            Passport - ပတ်(စ်)ပို့
          </a>
        </div>
      </div>

      <div class="rounded-xl overflow-hidden shadow-lg">
        <a href="#"></a>
        <div class="relative">
          <a href="#">
            <img class="w-full h-60 object-cover" src="{{'storage/img/visa.jpg'}}" alt="visa" />
            <div
              class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
            </div>
          </a>
        </div>
        <div class="px-6 py-4 text-center">
          <a href="#"
            class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">
            Visa - ဗီဇာ
          </a>
        </div>
      </div>

      <div class="rounded-xl overflow-hidden shadow-lg">
        <a href="#"></a>
        <div class="relative">
          <a href="#">
            <img class="w-full h-60 object-cover" src="{{'storage/img/hotel.jpg'}}" alt="hotel" />
            <div
              class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
            </div>
          </a>
        </div>
        <div class="px-6 py-4 text-center">
          <a href="#"
            class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">
            Hotel Booking - ဟိုတယ်ဘိုကင်
          </a>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="mx-auto text-center ">
    <h1 class="text-5xl font-extrabold text-[#2A2E75] leading-tight mt-4 mb-1 border-gray-500 pb-2 pt-2 font-poppins">
      About Us
    </h1>
    <p class="text-xl font-poppins text-[#2A2E75]">One Stop Service To Go To Thailand</p>
  </div>



  <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10 pl-10 pr-10">
    <!-- Left Column (Steps) -->
    <div>
      <div class="flex items-start mb-6">
        <!-- Step 1 -->
        <div class="w-12 h-12 flex items-center justify-center bg-[#FBC80B] text-[#2A2E75] rounded-3xl text-xl font-bold mr-4">
          1
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Identify and define the problem</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>

      <div class="flex items-start mb-6">
        <!-- Step 2 -->
        <div
          class="w-12 h-12 flex items-center justify-center bg-[#FBC80B] text-[#2A2E75] rounded-3xl text-xl font-bold mr-4">
          2
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Generate possible solutions</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>

      <div class="flex items-start mb-6">
        <!-- Step 3 -->
        <div
          class="w-12 h-12 flex items-center justify-center bg-[#FBC80B] text-[#2A2E75] rounded-full text-xl font-bold mr-4">
          3
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Decide and Implement The Solution</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>
    </div>

    <!-- Right Column (Descriptions or More Details) -->
    <div>
      <div class="flex items-start mb-6">
        <!-- Step 1 -->
        <div
          class="w-12 h-12 flex items-center justify-center bg-[#FBC80B] text-[#2A2E75] rounded-full text-xl font-bold mr-4">
          1
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Identify and define the problem</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>

      <div class="flex items-start mb-6">
        <!-- Step 2 -->
        <div
          class="w-12 h-12 flex items-center justify-center bg-[#FBC80B] text-[#2A2E75] rounded-full text-xl font-bold mr-4">
          2
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Generate possible solutions</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>

      <div class="flex items-start mb-6">
        <!-- Step 3 -->
        <div
          class="w-12 h-12 flex items-center justify-center bg-[#FBC80B] text-[#2A2E75] rounded-full text-xl font-bold mr-4">
          3
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Decide and Implement The Solution</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>
    </div>
  </div>


@endsection



