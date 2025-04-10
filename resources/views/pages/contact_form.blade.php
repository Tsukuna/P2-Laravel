@extends('components.layout')

@section('title')
Contact Us
@endsection

@section('content')

  <!-- Contact form -->
  <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="min-h-screen overflow-auto mt-7">
    <section class="bg-[var(--primary-color)]">
      <div class="relative  py-8 lg:py-16 px-6 sm:px-8 mx-4 sm:mx-auto max-w-screen-md  shadow-md bg-transparent">

        <div class="text-center text-[var(--secondary-color)] leading-[1.2] tracking-wider"
          style="font-family: 'Poppins-ExtraBold'; font-weight: 900 !important; font-size: clamp(26px, 5vw, 50px);">
          <h1 class="mb-2 text-3xl md:text-5xl">Don't Call Us,</h1>
          <h1 class="mb-4 text-3xl md:text-5xl">We Will Call You!</h1>
        </div>

        <div class="text-center text-white leading-[1.2] tracking-wider"
          style="font-family: 'Poppins'; font-size: clamp(10px, 3vw, 20px);">

          <h6 class="mb-8 text-lg md:text-xl"> Your feedbacks are appreciated ! Feel free to say what you think !</h6>
        </div>

        @if (session('success'))
          <div id="alert-3" class="flex items-center p-4 mb-4 text-purple-800 rounded-lg bg-purple-50" role="alert">
              <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div class="ms-3 text-sm font-body">
                  {{ session('success') }}
              </div>
              <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-purple-50 text-purple-500 rounded-lg focus:ring-2 focus:ring-purple-400 p-1.5 hover:bg-purple-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
              </button>
          </div>
        @endif

        <!-- Form Section -->
        <form action="{{route('contact.store')}}" method="POST" class="space-y-8 bg-transparent font-sans">
            @csrf
          <div class="sm:col-span-2">
            <label for="name" class="block mb-2 text-[clamp(5px, 1vw, 10px)] font-medium text-gray-400">
              Enter your name
            </label>
            <input type="text" id="name" value="{{old('name')}}"
              class="shadow-sm text-[clamp(5px, 1vw, 12px)] block w-full p-2.5 mt-1 mb-4 placeholder-gray-500"
              placeholder="Kyaw Kyaw" name="name" />
            @error('name')
              <p class="mt-2 text-sm text-red-400 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
            @enderror
          </div>

          <div class="sm:col-span-2">
            <label for="phone" class="block mb-2 text-[clamp(5px, 1vw, 10px)] font-medium text-gray-400">
              Enter your phone number
            </label>
            <input type="tel" id="phone" value="{{old('phone')}}"
              class="shadow-sm text-[clamp(5px, 1vw, 12px)] block w-full p-2.5 placeholder-gray-500"
              placeholder="+959 123456789" name="phone"/>
              @error('phone')
              <p class="mt-2 text-sm text-red-400 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
            @enderror
          </div>

          <div class="sm:col-span-2">
            <label for="email" class="block mb-2 text-[clamp(2px, 1vw, 10px)] font-medium text-gray-400">
              Enter your email address
            </label>
            <input type="email" id="email" value="{{old('email')}}"
              class="shadow-sm text-[clamp(5px, 1vw, 12px)] block w-full p-2.5 placeholder-gray-500"
              placeholder="kyawkyaw@gmail.com" name="email"/>
              @error('email')
              <p class="mt-2 text-sm text-red-400 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
            @enderror
          </div>

          <!-- Dropdown -->
          <div class="sm:col-span-2">
            <div class="dropdown-container w-full">
              <select id="source" name="service" class="shadow-sm text-[clamp(6px, 1vw, 12px)] block w-full p-2.5">
                <option value="" disabled selected> Srevices </option>
                <option value="passport">Passport</option>
                <option value="hotel_booking">Hotel Booking</option>
                <option value="flight_booking">Flight Booking</option>
              </select>
              @error('service')
              <p class="mt-2 text-sm text-red-400 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
            @enderror
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="message" class="block mb-2 text-[clamp(6px, 1vw, 12px)] font-medium text-gray-400">
              Send your message to us...
            </label>
            <textarea id="message" rows="6" name="message"
              class="block p-2.5 w-full text-[clamp(6px, 1vw, 12px)] shadow-sm placeholder-gray-500"
              placeholder="Leave a comment...">{{old('message')}}</textarea>
          </div>

          <div class="flex justify-center font-sans">
            <button
            class="bg-[var(--secondary-color)] hover:bg-[#FBC80B] text-[var(--primary-color)] cursor-pointer w-full py-3 px-8 text-[clamp(18px, 1.2vw, 24px)] font-bold"
           >
            SEND
          </button>

          </div>

        </form>

      </div>
    </section>

    <!-- Our Socials -->
    <div class="relative mt-8 py-8 lg:py-16 px-6 sm:px-8 mx-4 sm:mx-auto max-w-screen-xl">

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="max-w-sm rounded overflow-hidden shadow-lg relative bg-cover bg-center">

          <div class="relative z-10 flex flex-col items-center p-6">
            <div class="flex justify-center">
              <img class="w-16 h-16 object-cover rounded-full aspect-square" src="{{('storage/img/fb_logo.png')}}">
            </div>
            <div class="px-6 py-4">
              <a href="https://www.facebook.com/share/1GhCjNJn4u/?mibextid=wwXIfr">
                <p class="text-black-900 flex justify-center font-content">
                 Facebook
                </p>
              </a>
            </div>
          </div>
        </div>

        <div class="max-w-sm rounded overflow-hidden shadow-lg relative bg-cover bg-center">

          <div class="relative z-10 flex flex-col items-center p-6">
            <div class="flex justify-center">
              <img class="w-16 h-16 object-cover rounded-full aspect-square" src="{{('storage/img/gmail_logo.png')}}">
            </div>
            <div class="px-6 py-4">
              <a href="https://www.facebook.com/share/1GhCjNJn4u/?mibextid=wwXIfr">
                <p class="text-black-900  flex justify-center font-content">
                    Gmail
                </p>
              </a>
            </div>
          </div>
        </div>

        <div class="max-w-sm rounded overflow-hidden shadow-lg relative bg-cover bg-center">
          <div class="relative z-10 flex flex-col items-center p-6">
            <div class="flex justify-center">
              <img class="w-18 h-18 object-cover rounded-full aspect-square" src="{{('storage/img/linkedin.png')}}">
            </div>
            <div class="px-6 py-4">
              <a href="https://www.facebook.com/share/1GhCjNJn4u/?mibextid=wwXIfr">
                <p class="text-black-900 flex justify-center font-content">
                LinkedIn
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection
