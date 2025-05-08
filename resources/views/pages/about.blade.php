@extends('components.layout')
@section('title')
About Us
@endsection
@section('content')
     <!-- Title -->
    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="w-full mt-10 h-auto flex justify-center pt-10 pb-5 md:pb-0 text-4xl md:text-6xl text-[var(--secondary-color)] font-bold font-poppins">
     <h1>What is P2 ?</h1>
    </div>

    <!--  Carousel -->
    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="flex justify-center items-center">
        <div class="w-[90%] flex flex-col md:flex-row items-center md:h-[90vh]">
            <!-- Left side -->
            <div class="w-full md:w-1/2 h-auto flex justify-center">
                <img src="{{'storage/img/passport.jpg'}}" alt="Passport Image" class="w-full h-auto object-cover" />
            </div>

            <!-- Right side -->
            <div class="flex w-full md:w-1/2 h-auto justify-center md:justify-start">
                <div class="w-full h-auto flex flex-col justify-center overflow-hidden mt-6 mb-6 mx-6 md:mx-10">
                    <!-- Left mark -->
                    <div class="flex justify-start mt-2">
                        <img src="{{'storage/img/left_mark.svg'}}" alt="Left mark" class="w-9" />
                    </div>

                    <!-- Carousel -->
                    <div id="carousel" class="flex w-full h-auto mb-8 transition-transform duration-300 pt-5 font-content space-y-4 sm:space-y-8 md:space-y-10">
                        <!-- Carousel Item 1 -->
                        <div class="w-full shrink-0 h-auto flex items-center text-black text-base sm:text-base md:text-xl lg:text-xl px-4 leading-relaxed text-justify">
                            Prestige Passengers (P2) is a premium travel and service agency dedicated to making your journey smooth, safe, and stress-free.
                        </div>

                        <!-- Carousel Item 2 -->
                        <div class="w-full shrink-0 h-auto items-start text-black text-base sm:text-base md:text-xl lg:text-xl px-4 leading-relaxed text-justify">
                            <p>Based in Myanmar, P2 offers an all-in-one solution for travelers seeking support with</p>
                            <ul class="list-disc pl-5">
                                <li>Visa applications</li>
                                <li>Flight bookings</li>
                                <li>Hotel accommodations</li>
                                <li>Transportation services</li>
                                <li>International hospital connections</li>
                            </ul>
                        </div>

                        <!-- Carousel Item 3 -->
                        <div class="w-full shrink-0 h-auto justify-center items-center text-black text-base sm:text-base md:text-xl lg:text-xl px-4 leading-relaxed text-justify min-h-[200px]">
                            <p>Whether you're traveling for business, education, medical treatment, or vacation,</p>
                            <p>we’re here to guide you at every step with professional care and personalized service.</p>
                        </div>

                        <!-- Carousel Item 4 -->
                        <div class="w-full shrink-0 h-auto items-center text-black text-base sm:text-base md:text-xl lg:text-xl px-4 leading-relaxed text-justify">
                            At P2, we believe that travel should be easy, trustworthy, and tailored to you. That’s why we bring together essential travel services under one name — Prestige Passengers.
                        </div>
                    </div>

                    <!-- Right mark -->
                    <div class="flex justify-end mt-0">
                        <img src="{{'storage/img/right_mark.svg'}}" alt="Right mark" class="w-9" />
                    </div>

                    <!-- Indicators (visible on mobile too) -->
                    <div class="flex justify-center space-x-2 mt-4">
                        <div class="indicator w-6 h-2 hover:cursor-pointer bg-[var(--secondary-color)] rounded-lg transition-all duration-300" data-index="0"></div>
                        <div class="indicator w-3 h-2 hover:cursor-pointer bg-gray-400 rounded-full transition-all duration-300" data-index="1"></div>
                        <div class="indicator w-3 h-2 hover:cursor-pointer bg-gray-400 rounded-full transition-all duration-300" data-index="2"></div>
                        <div class="indicator w-3 h-2 hover:cursor-pointer bg-gray-400 rounded-full transition-all duration-300" data-index="3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Mission -->
    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="w-full h-auto flex flex-col mb-5 items-center pt-10 pb-5 md:pb-0">
        <h1 class="mb-2  text-4xl md:text-6xl text-[var(--secondary-color)] font-poppins font-bold justify-center">Our Mission</h1>
        <div class="w-[85%] h-[2px] bg-black mb-5"></div>


        <div class="w-[90%] font-content mx-auto my-10 grid grid-cols-1 md:grid-cols-3 gap-6 text-[var(--primary-color)]">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col gap-4 border-t-8 border-[var(--primary-color)]">
                <div class="flex items-center justify-center">
                    <img src="{{'storage/img/mission.png'}}" alt="Profile" class="w-14 h-14 rounded-full object-cover">
                </div>

                <p class="text-sm md:text-lg text-black text-center">
                    To simplify travel, visa, and essential service processes through expert guidance and dedicated support.

                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl font-content  shadow-lg p-6 flex flex-col gap-4 border-t-8 border-[var(--primary-color)]">
                <div class="flex items-center justify-center">
                    <img src="{{'storage/img/mission.png'}}" alt="Profile" class="w-14 h-14 rounded-full object-cover">
                </div>

                <p class="text-sm md:text-lg text-black text-center">
                    To offer comprehensive travel solutions—from flight and hotel bookings to medical and visa assistance—all under one roof.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl font-content shadow-lg p-6 flex flex-col gap-4 border-t-8 border-[var(--primary-color)]">
                <div class="flex items-center justify-center">
                    <img src="{{'storage/img/mission.png'}}" alt="Profile" class="w-14 h-14 rounded-full object-cover">
                </div>

                <p class="text-sm md:text-lg text-black text-center">
                    To ensure each customer receives exceptional care, convenience, and confidence in every step of their journey.

                </p>
            </div>
        </div>
    </div>

    <!-- Vision -->
    <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="w-full h-auto flex flex-col items-center pt-10 pb-5 md:pb-0">
        <h1 class="mb-2 text-4xl md:text-6xl text-[var(--secondary-color)] font-poppins font-bold text-center">Our Vision</h1>

        <div class="w-[85%] h-[2px] bg-black mb-6"></div>

        <div class="w-[85%] font-content md:w-[40%] mx-auto my-10 grid grid-cols-1 gap-6 text-[var(--primary-color)]">
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col gap-4 border-t-8 border-[var(--primary-color)]">
                <div class="flex items-center justify-center">
                    <img src="{{'storage/img/vision.png'}}" alt="Profile" class="w-14 h-14 rounded-full object-cover">
                </div>
                <p class="text-sm md:text-lg text-black text-center">
                    To become a trusted and leading travel and service partner in Myanmar and beyond, delivering smooth, personalized, and reliable experiences for every journey.
                </p>
            </div>
        </div>
    </div>

    <!-- Locations -->
    {{-- <div  data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="relative mt-8 py-8 lg:py-16 px-6 sm:px-8 mx-auto max-w-screen-xl">
        <h1 class="mb-6  text-4xl md:text-6xl text-[var(--secondary-color)] font-poppins font-bold text-center"> Locations </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-evenly">

            <div class="w-full max-w-lg rounded overflow-hidden shadow-lg bg-[var(--primary-color)]">
                <div class="relative z-10 flex flex-col items-center p-6">

                    <div class="px-6 py-4 text-[var(--secondary-color)]">
                        <div class="flex items-center gap-3">
                            <img src="{{'storage/img/location.svg'}}" alt="Myanmar Icon" class="w-8 h-8">
                            <p class="font-bold font-content">
                                Myanmar Branch
                            </p>
                        </div>

                        <p class="text-md flex justify-start mt-5 font-content text-white text-justify">
                            Lorem ipsum dolor sit amet, Yangon branch services, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore.
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-lg rounded overflow-hidden shadow-lg bg-[var(--primary-color)]">
                <div class="relative z-10 flex flex-col items-center p-6">

                    <div class="px-6 py-4 text-[var(--secondary-color)]">
                        <div class="flex items-center gap-3">
                            <img src="{{'storage/img/location.svg'}}" alt="Bangkok Icon" class="w-8 h-8">
                            <p class="font-bold font-content">
                                Bangkok Branch
                            </p>
                        </div>

                        <p class="text-md flex justify-start mt-5 font-content text-white text-justify">
                            Lorem ipsum dolor sit amet, Yangon branch services, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}




@endsection

@section('javascript')
<script>
    const carousel = document.getElementById("carousel");
    const indicators = document.querySelectorAll(".indicator");
    let activeIndex = 0;

    function getItemWidth() {
        return carousel.clientWidth;
    }

    function updateCarousel() {
        const translateX = -activeIndex * getItemWidth();
        carousel.style.transform = `translateX(${translateX}px)`;

        indicators.forEach((indicator, index) => {
            if (index === activeIndex) {
                indicator.classList.remove('w-3', 'bg-gray-400', 'rounded-full');
                indicator.classList.add('w-6', 'bg-[var(--secondary-color)]', 'rounded-lg');
            } else {
                indicator.classList.remove('w-6', 'bg-[var(--secondary-color)]', 'rounded-lg');
                indicator.classList.add('w-3', 'bg-gray-400', 'rounded-full');
            }
        });
    }

    indicators.forEach((indicator, index) => {
        indicator.addEventListener("click", () => {
            activeIndex = index;
            updateCarousel();
        });
    });

    // Optional: Handle window resize to maintain correct positioning
    window.addEventListener('resize', updateCarousel);

    updateCarousel(); // Initial update
</script>
@endsection
