@extends('user.layouts.usermain')
@section('title', 'Register')
@section('usercontent')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-10 h-10 mr-2" src="{{ asset('assets/images/beauty-logo.png') }}" alt="Beauty Shop">
                <span class="pr-1 text-rose-300">Beauty</span>Shop
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-rose-400 md:text-2xl dark:text-white">
                        Create and account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{route('signup')}}" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-rose-400 focus:border-rose-400 block w-full p-2.5 @error('name') is-invalid @enderror"
                                placeholder="Alimurrofid">
                            @error('name')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                phone_number</label>
                            <input type="text" name="phone_number" id="phone_number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-rose-400 focus:border-rose-400 block w-full p-2.5 @error('phone_number') is-invalid @enderror"
                                placeholder="08121XXXXXXX">
                            @error('phone_number')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-rose-400 focus:border-rose-400 block w-full p-2.5 @error('email') is-invalid @enderror"
                                placeholder="name@company.com">
                            @error('email')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-rose-600 focus:border-rose-600 block w-full p-2.5 @error('password') is-invalid @enderror"
                            >
                            @error('password')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-rose-600 focus:border-rose-600 block w-full p-2.5 @error('password_confirmation') is-invalid @enderror"
                            >
                            @error('password_confirmation')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-rose-400 hover:bg-rose-500 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-rose-400 dark:hover:bg-rose-400 dark:focus:ring-rose-400">Create
                            Account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="{{ route('login') }}"
                                class="font-medium text-rose-600 hover:underline dark:text-rose-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
