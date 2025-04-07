@extends('components.layout')


@section('title')
Feedback
@endsection

@section('content')
    <!-- Feedback Form Section -->
    <div class="w-full h-auto flex flex-col items-center pt-10 pb-5 mt-10">
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

     <!-- Feedback Title-->
     <div class="w-full h-auto flex flex-col  items-center pt-10 pb-5 md:pb-0 font-poppins">
        <h1 class="mb-2  py-3 text-4xl md:text-6xl text-[var(--secondary-color)] font-bold justify-center"> " What Our Clients</h1>
        <h1 class="mb-8 text-4xl md:text-6xl text-[var(--secondary-color)] font-bold justify-center"> Say About Us "</h1>
    </div>

    <div class="bg-[var(--primary-color)] py-10 px-5 my-5">
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
    </div>





@endsection
