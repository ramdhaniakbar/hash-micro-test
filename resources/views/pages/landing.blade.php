@extends('layouts.app')

@section('title', 'Landing Page')
@section('content')
    <style>
        #navbar {
            position: relative;
            width: 100%;
            top: 0;
            z-index: 50;
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out, box-shadow 0.3s ease;
        }

        #navbar.fixed {
            position: fixed;
            top: 0;
        }
    </style>

    <div>
        <div class="w-full h-[420px] relative">
            <img src="{{ asset('assets/image/background-image.jpg') }}" class="w-full h-full object-cover"
                alt="Image Background">
            <div class="absolute inset-0 bg-gray-600 opacity-50"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50">
                <img src="{{ asset('assets/image/hashmicro.png') }}" class="w-[420px]" alt="Hash Micro">
                <div class="flex justify-center items-center mt-2">
                    <div
                        class="w-12 h-12 border-[2.5px] border-white rounded-full flex justify-center items-center cursor-pointer transition-all duration-300 hover:bg-white/20 active:bg-white/30 hover:scale-105 group">
                        <div
                            class="w-10 h-10 border-[1.5px] border-white rounded-full flex justify-center items-center transition-all duration-300 group-hover:scale-105">
                            <a href="https://web.facebook.com/hashmicro?_rdc=1&_rdr&checkpoint_src=any#" target="_blank"
                                class="flex justify-center items-center">
                                <i
                                    class="fa-brands fa-facebook-f text-white group-hover:text-xl transition-all duration-300 group-hover:text-blue-500"></i>
                            </a>
                        </div>
                    </div>
                    <div class="h-0.5 w-7 bg-white"></div>
                    <div
                        class="w-12 h-12 border-[2.5px] border-white rounded-full flex justify-center items-center cursor-pointer transition-all duration-300 hover:bg-white/20 active:bg-white/30 hover:scale-105 group">
                        <div
                            class="w-10 h-10 border-[1.5px] border-white rounded-full flex justify-center items-center transition-all duration-300 group-hover:scale-105">
                            <a href="https://x.com/hashmicro" target="_blank" class="flex justify-center items-center">
                                <i
                                    class="fa-brands fa-twitter text-white group-hover:text-xl transition-all duration-300 group-hover:text-sky-500"></i>
                            </a>
                        </div>
                    </div>
                    <div class="h-0.5 w-7 bg-white"></div>
                    <div
                        class="w-12 h-12 border-[2.5px] border-white rounded-full flex justify-center items-center cursor-pointer transition-all duration-300 hover:bg-white/20 active:bg-white/30 hover:scale-105 group">
                        <div
                            class="w-10 h-10 border-[1.5px] border-white rounded-full flex justify-center items-center transition-all duration-300 group-hover:scale-105">
                            <a href="https://id.pinterest.com" target="_blank" class="flex justify-center items-center">
                                <i
                                    class="fa-brands fa-pinterest text-white group-hover:text-xl transition-all duration-300 group-hover:text-red-500"></i>
                            </a>
                        </div>
                    </div>
                    <div class="h-0.5 w-7 bg-white"></div>
                    <div
                        class="w-12 h-12 border-[2.5px] border-white rounded-full flex justify-center items-center cursor-pointer transition-all duration-300 hover:bg-white/20 active:bg-white/30 hover:scale-105 group">
                        <div
                            class="w-10 h-10 border-[1.5px] border-white rounded-full flex justify-center items-center transition-all duration-300 group-hover:scale-105">
                            <a href="https://www.instagram.com/hashmicro" target="_blank"
                                class="flex justify-center items-center">
                                <i
                                    class="fa-brands fa-instagram text-white group-hover:text-xl transition-all duration-300 group-hover:text-pink-500"></i>
                            </a>
                        </div>
                    </div>
                    <div class="h-0.5 w-7 bg-white"></div>
                    <div
                        class="w-12 h-12 border-[2.5px] border-white rounded-full flex justify-center items-center cursor-pointer transition-all duration-300 hover:bg-white/20 active:bg-white/30 hover:scale-105 group">
                        <div
                            class="w-10 h-10 border-[1.5px] border-white rounded-full flex justify-center items-center transition-all duration-300 group-hover:scale-105">
                            <a href="https://www.hashmicro.com/id" target="_blank" class="flex justify-center items-center">
                                <i
                                    class="fa-solid fa-heart text-white group-hover:text-xl transition-all duration-300 group-hover:text-red-400"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="navbar" class="w-full drop-shadow-md bg-white">
            <ul class="flex justify-center items-center py-5 gap-10 relative z-10">
                <li>
                    <a href="#">HOME</a>
                </li>
                <li>
                    <a href="#">FEATURES</a>
                </li>
                <li>
                    <a href="#">LAYOUTS</a>
                </li>
                <li>
                    <a href="#">PAGES</a>
                </li>
                <li>
                    <a href="#">LIGHT VERSION</a>
                </li>
                <li>
                    <div class="flex items-center py-1 border-b-2 border-transparent focus-within:border-gray-500">
                        <input type="text" class="focus:outline-none" placeholder="Search and hit enter">
                        <i class="fa-solid fa-magnifying-glass text-gray-500 mr-2"></i>
                    </div>
                </li>
            </ul>
        </div>
        <div class="w-full bg-cover bg-center relative"
            style="height: fit-content; background-image: url('{{ asset('assets/image/background.svg') }}');">
            <div id="content" class="py-8">
                <div class="bg-white p-6 {{ count($dishes) > 0 ? 'grid grid-cols-3 gap-5' : '' }}">
                    @forelse ($dishes as $dish)
                        <div class="w-full relative">
                            <img src="{{ Storage::url('images/dishes/' . $dish->image) }}" class="w-full h-full object-cover"
                                alt="{{ $dish->name }}">
                            <div class="absolute inset-0">
                                <div class="absolute w-3/4 bottom-10 left-0 right-0 mx-auto">
                                    <div class="border-4 border-black p-2">
                                        <div class="bg-black flex flex-col justify-center items-center gap-2 p-6">
                                            <div class="flex items-center">
                                                @for ($i = 0; $i < $dish->stars; $i++)
                                                    <i class="fa-duotone fa-regular fa-star text-xs text-white"></i>
                                                @endfor
                                                <h2 class="text-white parisienne-regular mx-2">{{ $dish->type }}</h2>
                                                @for ($i = 0; $i < $dish->stars; $i++)
                                                    <i class="fa-duotone fa-regular fa-star text-xs text-white"></i>
                                                @endfor
                                            </div>
                                            <h1 class="text-white text-lg font-semibold uppercase">{{ $dish->name }}</h1>
                                            <span class="text-slate-400 text-sm charm-regular">{{ $dish->created_at->format('F j, Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center p-2">
                            <span class="font-semibold text-lg">No Data Available!</span>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center bg-white py-16 px-12 gap-48">
            <div class="flex flex-col gap-8">
                <img src="{{ asset('assets/image/hashmicro-logo.png') }}" class="w-64" alt="Hash Micro Logo">
                <div class="flex flex-col gap-4">
                    <div class="flex gap-4">
                        <i class="fa-solid fa-location-dot text-red-700 text-2xl"></i>
                        <p>Neo SOHO Podomoro City
                            Unit 37.09 - 37.10
                            Jalan Letjen S. Parman Kav. 28, RT.3/RW.5,
                            Tanjung Duren Selatan, Grogol Petamburan,
                            Jakarta Barat, 11470</p>
                    </div>
                    <div class="flex gap-4">
                        <i class="fa-solid fa-phone text-red-700 text-xl"></i>
                        <p>+62 878 8800 0015</p>
                    </div>
                    <div class="flex gap-4">
                        <i class="fa-solid fa-envelope text-red-700 text-xl"></i>
                        <p>hello@hashmicro.com</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-10 px-40">
                <p>Penyedia solusi ERP dengan rangkaian software terlengkap untuk berbagai jenis industri, yang dapat disesuaikan dengan kebutuhan setiap bisnis.</p>
                <div class="flex flex-col gap-4">
                    <p>Disini untuk Front End Web Developer Test 2. Masukkan email anda untuk melihat hasil dari EDM template
                        untuk HashMicro ERP System. Silahkan masukkan email anda untuk melihat
                        tampilannya.</p>
    
                    <div class="w-full">
                        <form action="#" method="POST" class="">
                            <input type="email" name="email" placeholder="Enter your email" required class="w-3/4 rounded-lg border p-2">
                            <button type="submit" class="w-2/12 bg-red-700 text-white px-4 py-2 rounded-lg">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            var navbar = $('#navbar');
            var originalOffset = navbar.offset().top;

            $(window).scroll(function() {
                var scrollPosition = $(window).scrollTop();

                if (scrollPosition > originalOffset) {
                    if (!navbar.hasClass('fixed')) {
                        navbar.addClass('fixed');
                        $('#content').addClass('mt-20');
                    }
                } else {
                    if (navbar.hasClass('fixed')) {
                        navbar.removeClass('fixed');
                        $('#content').removeClass('mt-20');
                    }
                }
            });
        });
    </script>
@endpush
