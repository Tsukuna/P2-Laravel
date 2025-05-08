@extends('components.layout')


@section('title')
Feedback
@endsection

@section('content')
    <!-- Feedback Form Section -->
    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="w-full h-auto flex flex-col items-center pt-10 pb-5 mt-10">
        <h2 class="mb-8 text-3xl md:text-6xl font-poppins text-[var(--secondary-color)] font-bold">We Value Your Feedback!</h2>
        <form action="{{route('feedback.store')}}" method="POST" class="w-full md:w-1/2 bg-[var(--primary-color)] shadow-lg rounded-none md:rounded-xl p-8 space-y-6 transform hover:scale-105 transition-all duration-300 ease-in-out">
            @csrf

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

            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="block font-medium">Name</label>
                <input type="text" id="name" name="name" class="w-full mt-2 px-6 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-1 focus:ring-[var(--secondary-color)]" placeholder="Enter your name">
                @error('name')
              <p class="mt-2 text-sm text-red-400 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
            @enderror
            </div>

            <!-- Feedback Message Field -->
            <div class="mb-4">
                <label for="feedback" class="block text-[#2A2E75] font-medium">Your Feedback</label>
                <textarea id="feedback" name="feedback" class="w-full px-6 py-3 mt-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[var(--secondary-color)]" rows="4" placeholder="Share your experience"></textarea>
                @error('feedback')
              <p class="mt-2 text-sm text-red-400 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
            @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-3 px-6 bg-[var(--secondary-color)] text-white font-semibold rounded-lg shadow-md hover:bg-[#FBB400] transition-all duration-300 ease-in-out">
                Submit Feedback
            </button>
        </form>
    </div>

    <!-- Why Your Feedback Matters Section -->
    <div data-aos="fade-up"
        data-aos-duration="3000" data-aos-anchor-placement="center-bottom" class="w-full bg-[var(--primary-color)] py-20 px-8 my-5">
        <h2 class="mb-12 text-4xl md:text-5xl text-white font-poppins font-bold text-center">
            Why Your Feedback Matters
        </h2>

        <div class="w-full md:w-3/4 mx-auto text-white text-center">
            <p class="mb-6 text-lg md:text-xl">
                Your feedback is extremely valuable to us! By sharing your experience, you help us identify areas where we can improve and provide better services for you.
                Whether it's a suggestion, a concern, or a compliment, we listen to every piece of feedback to continuously enhance our offerings.
            </p>
            <p class="text-lg md:text-xl">
                Your opinion shapes our future. We're committed to ensuring that every customer experience is exceptional, and your input plays a vital role in this process.
            </p>
        </div>
    </div>



     {{-- <!-- Feedback Title-->
     <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="w-full h-auto flex flex-col  items-center pt-10 pb-5 md:pb-0 font-poppins">
        <h1 class="mb-2  py-3 text-4xl md:text-6xl text-[var(--secondary-color)] font-bold justify-center"> " What Our Clients</h1>
        <h1 class="mb-8 text-4xl md:text-6xl text-[var(--secondary-color)] font-bold justify-center"> Say About Us "</h1>
    </div>

    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="bg-[var(--primary-color)] py-10 px-5 my-5">
        <!-- Top Marquee (Left Scrolling) -->
        <div class="marquee-container mb-8">
            <div class="marquee-content">
                <!-- Top 4 Cards (Original) -->
                @foreach ($firstThreeFeedbacks as $firstThreeFeedback)
                <div class="review-card bg-white rounded-lg shadow-md p-6 w-[386px]">
                    <div class="flex items-center gap-3 mb-2">
                        <div>
                            <p class="font-bold pb-2">{{$firstThreeFeedback->name}}</p>
                        </div>
                    </div>
                    <hr class="border-t-2 border-gray-300 my-2" />
                    <p class="text-gray-700 mt-2">
                        {{$firstThreeFeedback->feedback}}
                    </p>
                </div>
                @endforeach


            </div>
        </div>

        <!-- Bottom Marquee (Right Scrolling) -->
        <div class="marquee-container">
            <div class="marquee-content-right">
                <!-- Bottom 4 Cards (Original) -->
                @foreach ($lastThreeFeedbacks as $lastThreeFeedback)
                <div class="review-card bg-white rounded-lg shadow-md p-6 w-[386px]">
                    <div class="flex items-center gap-3 mb-2">
                        <div>
                            <p class="font-bold pb-2">{{$lastThreeFeedback->name}}</p>
                        </div>
                    </div>
                    <hr class="border-t-2 border-gray-300 my-2" />
                    <p class="text-gray-700 mt-2">
                        {{$lastThreeFeedback->feedback}}
                    </p>
                </div>
                @endforeach


            </div>
        </div>
    </div> --}}

       <!-- Feedback Title-->
    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="w-full h-auto flex flex-col  items-center pt-10 pb-5 md:pb-0">
        <h1 class="mb-2  text-4xl md:text-6xl text-[var(--secondary-color)] font-bold justify-center text-center font-poppins"> " What Our Clients Say About Us "
        </h1>
    </div>

    <!-- Feedback content-->
    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="w-[95%] bg-[var(--primary-color)] rounded-3xl flex flex-col items-center mx-auto h-aauto my-5">
        <!-- Feedback Title-->
        <div class="w-full h-auto flex flex-col  items-center pt-10 pb-5 md:pb-0">
        <h1 class="mb-2  text-3xl md:text-4xl text-[var(--secondary-color)] font-bold font-poppins justify-center"> " Our Customers' voice "
        </h1>
        <h6 class="mb-2 text-center text-white font-bold text-xl font-content"> Client Feedback </h6>
        </div>

        <!--Feedback 2-->
        <div class="w-[90%] mx-auto my-10 grid grid-cols-1 md:grid-cols-3 gap-6 text-[var(--primary-color)]">

            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col gap-4">

                <div class="flex items-center gap-4">
                    <div>
                        <p class="font-bold text-lg font-content">U Kyaw Win</p>
                    </div>
                </div>
                <hr class="border-[var(--primary-color)] my-2">

                <!-- Feedback Text -->
                <p class="text-md text-gray-800 font-content">
                    "The service was exceptional, and the quality of the product exceeded my expectations. I will definitely be returning for more!"
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col gap-4">
                <div class="flex items-center gap-4">
                    <div>
                        <p class="font-bold text-lg font-content">U Zaw Win</p>
                    </div>
                </div>
                <hr class="border-[var(--primary-color)] my-2">

                <p class="text-md text-gray-800 font-content">
                    "Great experience overall. The customer service was very friendly and attentive, and I felt valued throughout my visit."
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col gap-4">
                <div class="flex items-center gap-4">
                    <div>
                        <p class="font-bold text-lg font-content">Daw Khin Hla</p>
                    </div>
                </div>
                <hr class="border-[var(--primary-color)] my-2">

                <p class="text-md text-gray-800 font-content">
                    "I had a fantastic time here! The ambiance was amazing, and I felt right at home. Highly recommend this place to others!"
                </p>
            </div>
        </div>

    </div>

@endsection



