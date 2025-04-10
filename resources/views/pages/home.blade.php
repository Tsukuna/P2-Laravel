@extends('components.layout')

@section('title')
Home
@endsection

@section('content')
     <!-- Hero Section -->
    <div class="relative bg-gradient-to-r h-screen text-white overflow-hidden bg-[var(--primary-color)]">
        <div class="absolute inset-0">
        {{-- <img src="{{'storage/img/Hero.jpg'}}" class="w-full h-full object-cover" alt="Hero Image" /> --}}
        <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center font-content ">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
            Easy Travel &
        </h1>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
            Visa Services.
        </h1>
        <p class="text-md md:text-lg text-gray-300 mb-6 max-w-lg md:max-w-2xl">
            Expert visa processing, travel support, and medical assistance –
            making your journey stress-free.
        </p>
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 space-x-0 md:space-x-10 font-buttons">
            <a href="{{route('contact')}}"
            class="bg-[var(--secondary-color)]  text-[var(--primary-color)] py-2 px-6 text-lg transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
            Apply Now
            </a>
            <a href="{{route('about_us')}}"
            class="bg-[var(--secondary-color)]  text-[var(--primary-color)] py-2 px-6 text-lg transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
            Learn More
            </a>
        </div>
        </div>
    </div>

    <!-- Services Section -->
    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom"  class="mx-auto text-center mt-5">
      <h1 class="text-5xl font-extrabold text-[var(--primary-color)] leading-tight mb-1 border-gray-500 pb-2 pt-2 font-poppins">
        Services
      </h1>
      <p class="text-3xl text-[var(--primary-color)] font-content">What Can We Help ?</p>
    </div>

    <!-- Services Cards -->
    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="swiper">
      <div class="p2-card-wrapper">
        <ul class="p2-card-list swiper-wrapper">

          <li class="p2-card-item swiper-slide">
            <a href="{{route('service')}}" class="p2-card-link">
              <img src="{{'storage/img/visa.png'}}" alt="Passport Image" class="p2-card-image">
              <h2 class="p2-card-title text-[var(--primary-color)] font-roboto text-xl font-bold">
                Visa Processing Services
              </h2>
            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="{{route('service')}}" class="p2-card-link">
              <img src="{{'storage/img/hotel_booking.png'}}" alt="Hotel Image" class="p2-card-image">
              <h2 class="p2-card-title text-[var(--primary-color)] font-roboto text-xl font-bold">
                Hotel Booking
              </h2>
            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="{{route('service')}}" class="p2-card-link">
              <img src="{{'storage/img/double_ticket.png'}}" alt="Visa Image" class="p2-card-image">
              <h2 class="p2-card-title text-[var(--primary-color)] font-roboto text-xl font-bold">
                Flight Booking
              </h2>
            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="{{route('service')}}" class="p2-card-link">
              <img src="{{'storage/img/hospital.png'}}" alt="Card Image" class="p2-card-image">
              <h2 class="p2-card-title text-[var(--primary-color)] font-roboto text-xl font-bold">
                Hospital Connection Services
              </h2>
            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="{{route('service')}}" class="p2-card-link">
              <img src="{{'storage/img/taxi.png'}}" alt="Card Image" class="p2-card-image">
              <h2 class="p2-card-title text-[var(--primary-color)] font-roboto text-xl font-bold">
                Transportation Services
              </h2>
            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="{{route('service')}}" class="p2-card-link">
              <img src="{{'storage/img/double_passport.png'}}" alt="Card Image" class="p2-card-image">
              <h2 class="p2-card-title text-[var(--primary-color)] font-roboto text-xl font-bold">
                Passport
              </h2>
            </a>
          </li>
        </ul>
      </div>
    </div>


    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="flex gap-4 pb-10">
      <a class="px-10 py-2 font-buttons mx-auto min-w-20 text-center text-white bg-[var(--primary-color)] border border-[var(--primary-color)] active:text-[var(--primary-color)] hover:bg-transparent hover:text-[var(--primary-color)] focus:outline-none focus:ring"
        href="{{route('service')}}">
        See More Services
      </a>
    </div>

    <!-- About Us Section -->
    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="mx-auto text-center ">
        <h1 class="text-5xl font-extrabold text-[var(--primary-color)] leading-tight mt-4 mb-1 border-gray-500 pb-2 pt-2 font-poppins">
        About Us
        </h1>
        <p class="text-2xl font-content text-[var(--primary-color)]">One Stop Service Solution</p>
    </div>

    <div class="flex justify-center items-center">
        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10 pl-10 pr-10 font-content">
          <div>
            <div class="flex mb-6">
              <div class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-3xl text-xl font-bold mr-4">
                1
              </div>
              <div>
                <h3 class="text-lg font-bold text-[#122B47]">Simplifying Travel</h3>
                <p class="text-[#030303] mt-2">A one-stop platform for all your travel needs visa, flights, and accommodations.</p>
              </div>
            </div>

            <div class="flex mb-6">
              <div class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-3xl text-xl font-bold mr-4">
                2
              </div>
              <div>
                <h3 class="text-lg font-bold text-[#122B47]">Addressing Travel Challenges</h3>
                <p class="text-[#030303] mt-2">We provide a unified solution for all aspects of travel planning.</p>
              </div>
            </div>

            <div class="flex mb-6">
              <div class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-full text-xl font-bold mr-4">
                3
              </div>
              <div>
                <h3 class="text-lg font-bold text-[#122B47]">Our Solution</h3>
                <p class="text-[#030303] mt-2">Easily apply for visas, book flights, and arrange stays all in one place.</p>
              </div>
            </div>
          </div>

          <div>
            <div class="flex mb-6">
              <div class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-full text-xl font-bold mr-4">
                4
              </div>
              <div>
                <h3 class="text-lg font-bold text-[#122B47]">Effortless Planning</h3>
                <p class="text-[#030303] mt-2">Save time and reduce stress with a few simple clicks.</p>
              </div>
            </div>

            <div class="flex mb-6">
              <div class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-full text-xl font-bold mr-4">
                5
              </div>
              <div>
                <h3 class="text-lg font-bold text-[#122B47]">Your Convenience First</h3>
                <p class="text-[#030303] mt-2">24/7 support for a seamless, stress-free travel experience.</p>
              </div>
            </div>

            <div class="flex mb-6">
              <div class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-full text-xl font-bold mr-4">
                6
              </div>
              <div>
                <h3 class="text-lg font-bold text-[#122B47]">Your Trusted Partner</h3>
                <p class="text-[#030303] mt-2">Reliable services to ensure a smooth and enjoyable journey.</p>
              </div>
            </div>
          </div>
        </div>
      </div>



@endsection





