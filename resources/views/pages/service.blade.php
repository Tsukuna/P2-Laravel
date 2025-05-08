@extends('components.layout')

@section('title')
Service
@endsection

@section('content')

    {{-- Service banner --}}
    <section  class="text-gray-600 body-font bg-[var(--primary-color)] mt-10">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-4 md:px-32 py-10 md:py-20">
        <div class="md:w-1/2 w-full mb-10 md:mb-0">
            <img src="{{'storage/img/double_passport.png'}}" alt="Service Image" class="w-full max-w-lg mx-auto" />
        </div>
        <div class="md:w-1/2 w-full md:pl-28 flex flex-col items-center md:items-start text-center md:text-left">
            <h1 class="text-3xl font-extrabold font-poppins leading-10 tracking-tight mb-6 text-white sm:text-5xl md:text-6xl">
            P2
            </h1>
            <p class="mb-10 px-2 md:px-0 leading-relaxed text-justify font-sans text-gray-300 text-lg">
                Prestige Passengers offers a one-stop solution for your travel needs, including passport, visa assistance, and flight bookings. We ensure a smooth and hassle-free travel experience.
            </p>
        </div>
        </div>
    </section>

    {{-- Services --}}
    <div  data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1500" class="relative">
        <div class="mx-auto max-w-full px-6 pt-16 pb-6 sm:px-12 lg:pt-24 xl:px-24">
        <header class="mx-auto max-w-2xl text-center">
            <h1 class="text-5xl sm:text-5xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-[var(--secondary-color)] font-poppins">Service</h1>
        </header>
        </div>
    </div>

    <div  data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1500" class="container mx-auto px-4">
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
                <h2 class="text-white text-lg font-semibold mb-3 font-content">Passport</h2>
                <p class="leading-relaxed text-md font-content text-white">
                    Assistance with new passport applications, renewals, and documentation support.
                </p>
            </div>
            </div>
        </div>
    </div>


    <section data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" class="text-gray-600 body-font mt-10">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-4 md:px-32 py-10 md:py-20">
            <div class="md:w-1/2 w-full mb-10 md:mb-0">
                <img src="{{'storage/img/visa.png'}}" alt="Service Image" class="w-full max-w-lg mx-auto" />
            </div>
            <div class="md:w-1/2 w-full md:pl-28 flex flex-col items-center md:items-start text-center md:text-left">
                <h1 class="text-3xl font-extrabold font-poppins leading-10 tracking-tight mb-6 text-[var(--secondary-color)] sm:text-5xl md:text-5xl">
                    Visa Processing Services
                </h1>
                <p class="mb-10 px-2 md:px-0 leading-relaxed text-justify font-sans text-[var(--primary-color)] text-lg">
                    Prestige Passengers specializes in visa processing services, guiding you through the complexities of obtaining visas for various countries. We ensure a smooth and hassle-free visa application process so you can travel with ease.
                </p>
            </div>
        </div>
    </section>

    <section data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" class="text-gray-600 body-font mt-10">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-4 md:px-32 py-10 md:py-20">
            <div class="md:w-1/2 w-full mb-10 md:mb-0">
                <img src="{{'storage/img/hotel_booking.png'}}" alt="Service Image" class="w-full max-w-lg mx-auto" />
            </div>
            <div class="md:w-1/2 w-full md:pl-28 flex flex-col items-center md:items-start text-center md:text-left">
                <h1 class="text-3xl font-extrabold font-poppins leading-10 tracking-tight mb-6 text-[var(--secondary-color)] sm:text-5xl md:text-5xl">
                    Hotel Booking
                </h1>
                <p class="mb-10 px-2 md:px-0 leading-relaxed text-justify font-sans text-[var(--primary-color)] text-lg">
                    Prestige Passengers offers seamless hotel booking services, helping you find the best accommodations that suit your travel preferences and budget. Enjoy comfortable stays with the convenience of booking through us.
                </p>
            </div>
        </div>
    </section>

    <section data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" class="text-gray-600 body-font mt-10">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-4 md:px-32 py-10 md:py-20">
            <div class="md:w-1/2 w-full mb-10 md:mb-0">
                <img src="{{'storage/img/double_ticket.png'}}" alt="Service Image" class="w-full max-w-lg mx-auto" />
            </div>
            <div class="md:w-1/2 w-full md:pl-28 flex flex-col items-center md:items-start text-center md:text-left">
                <h1 class="text-3xl font-extrabold font-poppins leading-10 tracking-tight mb-6 text-[var(--secondary-color)] sm:text-5xl md:text-5xl">
                    Flight Booking
                </h1>
                <p class="mb-10 px-2 md:px-0 leading-relaxed text-justify font-sans text-[var(--primary-color)] text-lg">
                    Prestige Passengers provides hassle-free flight booking services, ensuring you get the best deals and convenient flights to your desired destinations. Let us handle your travel arrangements so you can focus on your journey.
                </p>
            </div>
        </div>
    </section>

    <section data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" class="text-gray-600 body-font mt-10">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-4 md:px-32 py-10 md:py-20">
            <div class="md:w-1/2 w-full mb-10 md:mb-0">
                <img src="{{'storage/img/hospital.png'}}" alt="Service Image" class="w-full max-w-lg mx-auto" />
            </div>
            <div class="md:w-1/2 w-full md:pl-28 flex flex-col items-center md:items-start text-center md:text-left">
                <h1 class="text-3xl font-extrabold font-poppins leading-10 tracking-tight mb-6 text-[var(--secondary-color)] sm:text-4xl md:text-4xl">
                    Hospital Connection Services
                </h1>
                <p class="mb-10 px-2 md:px-0 leading-relaxed text-justify font-sans text-[var(--primary-color)] text-lg">
                    Prestige Passengers offers hospital connection services to ensure that your healthcare needs are taken care of during your travels. We provide access to trusted medical facilities and assistance for emergencies abroad.
                </p>
            </div>
        </div>
    </section>

    <section data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" class="text-gray-600 body-font mt-10">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-4 md:px-32 py-10 md:py-20">
            <div class="md:w-1/2 w-full mb-10 md:mb-0">
                <img src="{{'storage/img/taxi.png'}}" alt="Service Image" class="w-full max-w-lg mx-auto" />
            </div>
            <div class="md:w-1/2 w-full md:pl-28 flex flex-col items-center md:items-start text-center md:text-left">
                <h1 class="text-3xl font-extrabold font-poppins leading-10 tracking-tight mb-6 text-[var(--secondary-color)] sm:text-5xl md:text-5xl">
                    Transportation Services
                </h1>
                <p class="mb-10 px-2 md:px-0 leading-relaxed text-justify font-sans text-[var(--primary-color)] text-lg">
                    Prestige Passengers offers reliable transportation services, including airport transfers, taxis, and other transport options to make your travel experience smooth and convenient. Let us take care of your transportation needs while you enjoy your trip.
                </p>
            </div>
        </div>
    </section>

    <section data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" class="text-gray-600 body-font mt-10">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-4 md:px-32 py-10 md:py-20">
            <div class="md:w-1/2 w-full mb-10 md:mb-0">
                <img src="{{'storage/img/double_passport.png'}}" alt="Service Image" class="w-full max-w-lg mx-auto" />
            </div>
            <div class="md:w-1/2 w-full md:pl-28 flex flex-col items-center md:items-start text-center md:text-left">
                <h1 class="text-3xl font-extrabold font-poppins leading-10 tracking-tight mb-6 text-[var(--secondary-color)] sm:text-5xl md:text-5xl">
                    Passport Services
                </h1>
                <p class="mb-10 px-2 md:px-0 leading-relaxed text-justify font-sans text-[var(--primary-color)] text-lg">
                    Prestige Passengers provides expert assistance with passport services, ensuring that your travel documents are in order for your journey. Whether you're applying for a new passport or renewing an existing one, we streamline the process for you.
                </p>
            </div>
        </div>
    </section>

@endsection


