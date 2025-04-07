@extends('components.layout')

@section('title')
Service
@endsection

@section('content')

    <div class="relative">
        <div class="mx-auto max-w-full px-6 pt-16 pb-6 sm:px-12 lg:pt-24 xl:px-24">
        <header class="mx-auto max-w-2xl text-center">
            <h1 class="text-5xl sm:text-5xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-[var(--secondary-color)] font-poppins">Service</h1>
        </header>
        </div>
    </div>



    <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="p-4">
        <div class="flex flex-col rounded-lg h-full bg-[var(--primary-color)] p-8 text-center">
          <h2 class="text-white text-lg font-semibold mb-3 font-content">Visa Processing Services</h2>
          <p class="leading-relaxed text-md font-content text-white">
            For multiple countries with expert support and documentation help.
          </p>
        </div>
      </div>


      <div class="p-4">
        <div class="flex flex-col rounded-lg h-full bg-[var(--primary-color)] p-8 text-center">
          <h2 class="text-white text-lg font-semibold mb-3 font-content">Flight Booking</h2>
          <p class="leading-relaxed text-md font-content text-white">
            Domestic and international air tickets at competitive rates.
          </p>
        </div>
      </div>


      <div class="p-4">
        <div class="flex flex-col rounded-lg h-full bg-[var(--primary-color)] p-8 text-center">
          <h2 class="text-white text-lg font-semibold mb-3 font-content">Hotel Booking</h2>
          <p class="leading-relaxed text-md font-content text-white">
            Comfortable stays at trusted hotels tailored to your travel needs.
          </p>
        </div>
      </div>

      <div class="p-4 col-span-1 sm:col-span-2 lg:col-span-1 mx-auto">
        <div class="flex flex-col rounded-lg h-full bg-[var(--primary-color)] p-8 text-center">
          <h2 class="text-white text-lg font-semibold mb-3 font-content">Hospital Connection Services</h2>
          <p class="leading-relaxed text-md font-content text-white">
            Linking you with international-standard hospitals for treatment or checkups abroad.
          </p>
        </div>
      </div>


      <div class="p-4 col-span-1 sm:col-span-2 lg:col-span-1 mx-auto">
        <div class="flex flex-col rounded-lg h-full bg-[var(--primary-color)] p-8 text-center">
          <h2 class="text-white text-lg font-semibold mb-3 font-content">Transportation Services</h2>
          <p class="leading-relaxed text-md font-content text-white">
            Reliable airport pickups, private car arrangements, and more.
          </p>
        </div>
      </div>

        <div class="p-4 col-span-1 sm:col-span-2 lg:col-span-1 mx-auto">
        <div class="flex flex-col rounded-lg h-full bg-[var(--primary-color)] p-8 text-center">
            <h2 class="text-white text-lg font-semibold mb-3 font-content">Money Exchange</h2>
            <p class="leading-relaxed text-md font-content text-white">
            Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
            </p>
        </div>
        </div>
    </div>
  </div>



  <section class="text-gray-600 body-font bg-[var(--primary-color)] mt-10">
    <div class="container mx-auto flex flex-col md:flex-row items-center px-4 md:px-32 py-10 md:py-20">
      <div class="md:w-1/2 w-full mb-10 md:mb-0">
        <img src="{{'storage/img/double_passport.png'}}" alt="Service Image" class="w-full max-w-lg mx-auto" />
      </div>
      <div class="md:w-1/2 w-full md:pl-28 flex flex-col items-center md:items-start text-center md:text-left">
        <h1 class="text-3xl font-extrabold font-poppins leading-10 tracking-tight mb-6 text-white sm:text-5xl md:text-6xl">
          Service
        </h1>
        <p class="mb-10 px-2 md:px-0 leading-relaxed text-justify font-sans text-gray-300 text-lg">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante.
        </p>
        <div class="flex justify-center md:justify-start">
          <a href="#" class="inline-flex text-white bg-[var(--primary-color)] border-1 border-[var(--secondary-color)] py-3 px-10 focus:outline-none hover:bg-[var(--secondary-color)] rounded-lg text-lg shadow-lg  transition-all">
            Fill Me
          </a>
        </div>
      </div>
    </div>
  </section>


  <main class="my-8 mx-2 md:mx-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <div class="flex flex-col items-center">
        <img src="{{'storage/img/double_ticket.png'}}" alt="Ticket Image" class="w-full rounded-lg mb-4" />
        <div class="flex flex-col rounded-lg bg-[var(--secondary-color)] p-6 text-center h-full">
          <h2 class="text-[var(--primary-color)] text-lg font-semibold font-poppins mb-3">Flight</h2>
          <p class="leading-relaxed text-base text-[var(--primary-color)] font-sans mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum soluta, repellat aspernatur dicta nostrum ut velit consequatur quasi reprehenderit quos distinctio pariatur, labore nisi blanditiis eaque rem nulla, deleniti ad!
          </p>
          <a href="#" class="mt-4 text-[var(--primary-color)] hover:text-white font-medium">Learn More</a>
        </div>
      </div>

        <div class="flex flex-col items-center">
            <img src="{{'storage/img/double_passport.png'}}" alt="Passport Image" class="w-full rounded-lg mb-4" />
            <div class="flex flex-col rounded-lg bg-[var(--secondary-color)] p-6 text-center h-full">
              <h2 class="text-[var(--primary-color)] text-lg font-semibold font-poppins mb-3">Passport</h2>
              <p class="leading-relaxed text-base text-[var(--primary-color)] font-sans mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum sit distinctio pariatur totam qui nemo commodi quia cumque consequuntur corrupti in perferendis repellendus unde suscipit natus, nesciunt dolorum veritatis ullam?
              </p>
              <a href="#" class="mt-4 text-[var(--primary-color)] hover:text-white font-medium">Learn More</a>
            </div>
          </div>

      <div class="flex flex-col items-center">
        <img src="{{'storage/img/hotel_booking.png'}}" alt="Background Image" class="w-full rounded-lg mb-4" />
        <div class="flex flex-col rounded-lg bg-[var(--secondary-color)] p-6 text-center h-full">
          <h2 class="text-[var(--primary-color)] text-lg font-semibold font-poppins mb-3">VISA</h2>
          <p class="leading-relaxed text-base text-[var(--primary-color)] font-sans mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione repudiandae veniam ab illum autem pariatur repellendus asperiores. Dolorum voluptates minima nemo eos, corrupti maiores inventore, molestiae unde eaque expedita quisquam.
          </p>
          <a href="#" class="mt-4 text-[var(--primary-color)] hover:text-white font-medium">Learn More</a>
        </div>
      </div>
    </div>
  </main>

@endsection
