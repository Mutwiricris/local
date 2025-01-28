@extends('layouts.app')
@section('content')
    <div class="absolute top-4 right-4">
        <form method="GET" action="{{ route('switch-language') }}" class="inline-block">
            <select name="language" class="bg-white border border-gray-300 rounded-lg p-2" onchange="this.form.submit()">
                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                <option value="fr" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>Français</option>
                <option value="zh" {{ app()->getLocale() == 'zh' ? 'selected' : '' }}>中文</option>
            </select>
        </form>
    </div>

    <section class=" py-14 lg:pt-44 lg:pb-24 bg-indigo-50 -100">
        <div class="w-full max-w-7xl mx-auto px-4 lg:px-8">
            <div class="w-full max-w-4xl mx-auto sm:px-12 mb-10 lg:mb-20">
                <h1 class="font-manrope font-bold text-4xl leading-snug sm:text-5xl text-center mb-5 text-black">
                    Transform your stress into success by hiring a skilled essay writer!                </h1>
                <p class="text-xl font-medium leading-8 text-gray-400 text-center mb-14 max-w-xl mx-auto">
                    Count on an essay writing service that guarantees the quickest delivery time and top-notch, human-crafted content.

                </p>
                <div class="parent flex flex-col sm:flex-row items-center max-w-xl mx-auto justify-center gap-y-4 sm:justify-between pr-2 sm:pr-1 sm:bg-white rounded-full mb-5 relative group transition-all duration-500 border border-transparent hover:border-indigo-600 focus-within:border-indigo-600">
                    <input type="email" class="block w-full px-6 py-3.5 text-base max-sm:text-center font-normal shadow-xs max-sm:bg-white text-gray-900 bg-transparent border-none rounded-full placeholder-gray-400 focus:outline-none leading-normal" placeholder="What’s your work email?" required="">
                    <button class="py-3 px-6 max-sm:w-full  rounded-full bg-indigo-600 text-white text-sm leading-4 font-medium whitespace-nowrap transition-all duration-300 hover:bg-indigo-700 sm:absolute top-1.5 right-3">Get Started</button>
                </div>
                <p class="text-sm font-normal text-gray-500 text-center">
                    no personal credit checks or founder guarantee.
                </p>

            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl w-full px-4">
                <!-- Market Cap Section -->
                <div class="bg-indigo-200  shadow-sm bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 rounded-2xl p-6 flex items-center space-x-4 border border-white/40">
                    <div class="bg-indigo-100 p-3 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 9.75l-3 3m0 0l3 3m-3-3h8.25m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">Transform your stress into success!</p>
                        <p class="text-gray-900 text-xl font-semibold">Hire a skilled essay writer</p>
                    </div>
                </div>

                <!-- Currency Conversion Section -->
                <div class="bg-indigo-200 items-center shadow-sm bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 rounded-2xl p-6 text-white flex flex-col space-y-4 border border-white/40">
                    <div class="flex justify-between items-center">
                        <p>Quickest Delivery</p>
                        <p class="font-semibold">Fast Turnaround</p>
                    </div>
                    <div class="relative flex items-center justify-center">
        <span class="absolute bg-white text-indigo-500 p-2 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </span>
                    </div>
                    <div class="flex justify-between space-x-8">
                        <p>Top-Notch Content</p>
                        <p class="font-semibold">Human-Crafted</p>
                    </div>
                </div>

                <!-- Transaction History Section -->
                <div class="bg-indigo-200  shadow-sm bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 rounded-2xl p-6 flex flex-col space-y-4 border border-white/40">
                    <div class="flex items-center space-x-4">
                        <div class="bg-blue-100 p-3 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 10c-4.418 0-8-1.79-8-4m16 0c0 2.21-3.582 4-8 4z" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-gray-500 text-sm ">Guaranteed Support</p>
                            <p class="text-gray-900 text-xl font-semibold">No credit checks</p>
                        </div>
                        <p class="text-gray-400 text-sm">Hassle-Free</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="bg-yellow-100 p-3 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14m-6 0l-4.553 2.276A1 1 0 013 15.382V8.618a1 1 0 011.447-.894L9 10m6 0v4m-6-4v4" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Founder Guarantee</p>
                            <p class="text-gray-900 text-xl font-semibold">No personal risk</p>
                        </div>
                        <p class="text-gray-400 text-sm">Reliable</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
