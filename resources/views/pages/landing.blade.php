@extends('layouts.app')

@section('title', 'Landing Page')
@section('content')
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
        <div class="w-full relative" style="height: 120vh;">
            <img src="{{ asset('assets/image/background.svg') }}"
                class="absolute inset-0 w-full h-full object-cover opacity-50" alt="Background Image">
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
                    navbar.addClass('fixed top-0 z-50');
                    navbar.css('width', navbar.parent().width());
                } else {
                    navbar.removeClass('fixed top-0 z-50');
                    navbar.css('width', '');
                }
            });
        });
    </script>
@endpush
