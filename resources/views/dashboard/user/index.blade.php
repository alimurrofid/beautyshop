@extends('dashboard.layouts.dashboardmain')
@section('title', 'user')
@section('content')
    <div class="flex flex-wrap -mx-3 overflow-hidden">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 flex justify-between">
                    <h5 class="mb-0 dark:text-white">Table user</h5>
                    <div class="flex">
                        <!-- Button Add user -->
                        <a href="{{ route('user.create') }}" type="button" data-tooltip-target="tooltip-adduser"
                            class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center m-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add
                            user</a>
                        <div id="tooltip-adduser" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Tambahkan User
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <!-- End Button Add user -->
                    </div>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table
                            class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        No</th>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Name</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Contact</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Email</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Role</th>
                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $loop->iteration }}</span>
                                        </td>
                                        <td
                                            class="p-2 text-sm text-left bg-transparent border-b align-center dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">{{ $user->name }}
                                                </h6>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 text-sm text-left bg-transparent border-b align-center dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                    {{ $user->phone_number }}</h6>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 text-sm text-left bg-transparent border-b align-center dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">{{ $user->email }}
                                                </h6>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 text-sm text-left bg-transparent border-b align-center dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <!-- Menampilkan role user -->
                                                <span
                                                    class="text-sm font-semibold dark:text-white">{{ $user->getRoleNames()->implode(', ') }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <!-- Button Edit user -->
                                                <a href="{{ route('user.edit', $user->id) }}" type="button"
                                                    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center m-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-400 dark:focus:ring-yellow-800">Edit</a>

                                                <!-- Button Delete user -->
                                                <a href="{{ route('user.destroy', $user->id) }}"
                                                    class="text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center m-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            @include('dashboard.partials.footer')
        </div>
    </div>
@endsection
@push('customCSS')
    <!-- filepond css -->
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/summernote-0.8.18/summernote-lite.css') }}">
@endpush
@push('customJS')
    <!-- Argon -->
    <script src="{{ asset('assets/js/sidenav-burger.js') }}"></script>
    <script src="{{ asset('assets/js/fixed-plugin.js') }}"></script>
    <script src="{{ asset('build/assets/app-af0b7264.js') }}"></script>
@endpush
