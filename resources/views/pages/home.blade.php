@extends('components.layout')

@section('title')
Home
@endsection

@section('content')
    <div class="relative bg-gradient-to-r h-screen text-white overflow-hidden">
        <div class="absolute inset-0">
        <img src="{{'storage/img/Hero.jpg'}}" class="w-full h-full object-cover" alt="Hero Image" />
        <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center font-content">
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
            class="bg-[var(--button-color)]  text-[var(--primary-color)] py-2 px-6 text-lg transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
            Apply Now
            </a>
            <a href="{{route('about_us')}}"
            class="bg-[var(--button-color)]  text-[var(--primary-color)] py-2 px-6 text-lg transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
            Learn More
            </a>
        </div>
        </div>
  </div>


    <div class="mx-auto text-center mt-5">
      <h1 class="text-5xl font-extrabold text-[var(--primary-color)] leading-tight mb-1 border-gray-500 pb-2 pt-2 font-poppins">
        Services
      </h1>
      <p class="text-3xl text-[var(--primary-color)] font-content">What Can We Help ?</p>
    </div>

    <div class="swiper">
      <div class="p2-card-wrapper">
        <ul class="p2-card-list swiper-wrapper">

          <li class="p2-card-item swiper-slide">
            <a href="{{route('service')}}" class="p2-card-link">
              <img src="{{'storage/img/double_passport.png'}}" alt="Passport Image" class="p2-card-image">
              <h2 class="p2-card-title text-[var(--primary-color)] font-roboto text-xl font-bold">
                Passport Services
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
                Flight Services
              </h2>
            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="{{route('service')}}" class="p2-card-link">
              <img src="{{'storage/img/passport.jpg'}}" alt="Card Image" class="p2-card-image">
              <h2 class="p2-card-title text-[var(--primary-color)] font-roboto text-xl font-bold">
                ------ Services
              </h2>
            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="{{route('service')}}" class="p2-card-link">
              <img src="{{'storage/img/passport.jpg'}}" alt="Card Image" class="p2-card-image">
              <h2 class="p2-card-title text-[var(--primary-color)] font-roboto text-xl font-bold">
                ------ Services
              </h2>
            </a>
          </li>

          <li class="p2-card-item swiper-slide">
            <a href="{{route('service')}}" class="p2-card-link">
              <img src="img/developer.jpg" alt="Card Image" class="p2-card-image">
              <h2 class="p2-card-title text-[var(--primary-color)] font-roboto text-xl font-bold">
                ------ Services
              </h2>
            </a>
          </li>
        </ul>
      </div>
    </div>


    <div class="flex gap-4 pb-10">
      <a class="px-10 py-2 font-buttons mx-auto min-w-20 text-center text-white bg-[var(--primary-color)] border border-[var(--primary-color)] active:text-[var(--primary-color)] hover:bg-transparent hover:text-[var(--primary-color)] focus:outline-none focus:ring"
        href="{{route('service')}}">
        See More Services
      </a>
    </div>


    <div class="mx-auto text-center ">
        <h1 class="text-5xl font-extrabold text-[var(--primary-color)] leading-tight mt-4 mb-1 border-gray-500 pb-2 pt-2 font-poppins">
        About Us
        </h1>
        <p class="text-3xl font-content text-[var(--primary-color)]">One Stop Service To Go To Thailand</p>
    </div>



  <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10 pl-10 pr-10 font-content">
    <div>
      <div class="flex items-start mb-6">
        <div class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-3xl text-xl font-bold mr-4">
          1
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Identify and define the problem</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>

      <div class="flex items-start mb-6">
        <div
          class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-3xl text-xl font-bold mr-4">
          2
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Generate possible solutions</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>

      <div class="flex items-start mb-6">
        <div
          class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-full text-xl font-bold mr-4">
          3
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Decide and Implement The Solution</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>
    </div>

    <div>
      <div class="flex items-start mb-6">
        <div
          class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-full text-xl font-bold mr-4">
          4
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Identify and define the problem</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>

      <div class="flex items-start mb-6">
        <div
          class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-full text-xl font-bold mr-4">
          5
        </div>
        <div>
          <h3 class="text-lg font-bold text-[#122B47]">Generate possible solutions</h3>
          <p class="text-[#030303] mt-2">Lorem ipsum dolor sit amet consectetur. Auctor ultricies mauris euismod mattis
            lectus.</p>
        </div>
      </div>

      <div class="flex items-start mb-6">
        <div
          class="w-12 h-12 flex items-center justify-center bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-full text-xl font-bold mr-4">
          6
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



