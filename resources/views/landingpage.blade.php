@extends('user.layouts.usermain')
@section('title', 'Landingpage')
@section('usercontent')
    <!-- Hero Section -->
    <section id="home" class="pt-10">
        <div class="container lg:px-12">
            <div class="flex flex-wrap">
                <div class="self-center w-full px-4 md:w-1/2 md:ps-10 lg:ps-4">
                    <h1 class="mb-5 text-3xl font-bold uppercase text-neutral-700 lg:text-4xl">
                        Discover your inner beauty with our products
                    </h1>
                    <p class="mb-5 text-lg text-neutral-700 lg:text-2xl lg:mb-10">Great gift for yourself and loved ones</p>
                    <a href=""
                        class="px-8 py-2 text-lg font-semibold text-white rounded-lg bg-rose-300 lg:px-14 lg:py-3 lg:text-xl hover:bg-rose-400">Shop
                        Now</a>
                </div>
                <div class="self-end w-full px-8 md:w-1/2">
                    <div class="mt-10">
                        <img src="{{ asset('assets/images/hero.png') }}" alt="hero" class="max-w-full mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Product Section -->
    <section id="product" class="pt-16 pb-24">
        <div class="container mx-auto">
            <div class="w-full px-4 ">
                <div class="text-center ">
                    <h2 class="mb-12 text-xl font-bold uppercase text-slate-700">
                        New Arrivals
                    </h2>
                    <div class="flex flex-wrap items-center justify-center gap-7 mt-7">
                        <!-- Card Candidates -->
                        @foreach ($products as $product)
                        <div class="max-w-sm bg-white rounded-md shadow w-72">
                            <img class="object-cover object-center w-full rounded-t-md h-72"
                                src="{{ asset('storage/' . $product->image) }}" alt="Product Image" />
                            <div class="flex flex-col items-start mt-2 ms-3">
                                <span class="my-1 text-xl font-semibold text-black">{{$product->name}}</span>
                                <span class="mt-1 mb-4 text-base font-medium text-slate-600">Rp. {{$product->price}}</span>
                            </div>
                            <button class="px-20 py-1 mx-auto mb-6 font-bold border border-black rounded-lg hover:text-rose-400 hover:border-rose-400 hover:shadow-md">Add To
                                Cart</button>
                        </div>
                        @endforeach
                        <!-- End Card Candidates -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
