@extends('dashboard.layouts.dashboardmain')
@section('title', 'Home')
@section('content')
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4"
            data-tooltip-target="tooltip-productall">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    Total users</p>
                                <h5 class="text-4xl font-bold dark:text-white counter">{{$totalUsers}}</h5>
                            </div>
                        </div>
                        <div class="px-3 text-right">
                            <div
                                class="inline-block w-16 h-16 text-center mt-1.5 rounded-circle bg-gradient-to-tl  from-red-600 to-orange-600">
                                <i class="relative text-3xl text-white fa-solid fa-users top-3.5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tooltip-productall" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Jumlah Semua User
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <!-- card2-->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4"
            data-tooltip-target="tooltip-userverif">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    user Verified</p>
                                <h5 class="text-4xl font-bold dark:text-white counter">{{$usersVerified}}</h5>
                            </div>
                        </div>
                        <div class="px-3 text-right">
                            <div
                                class="inline-block w-16 h-16 text-center mt-1.5 rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                <i class="relative text-3xl text-white fa-solid fa-user-check top-3.5 left-0.5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tooltip-userverif" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Jumlah User yang Sudah Terverifikasi
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4"
            data-tooltip-target="tooltip-candidate">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    Total Product</p>
                                <h5 class="text-4xl font-bold dark:text-white counter">{{$totalProducts}}</h5>
                            </div>
                        </div>
                        <div class="px-3 text-right">
                            <div
                                class="inline-block w-16 h-16 text-center mt-1.5 rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                <i class="relative text-3xl text-white fa-solid fa-boxes-stacked top-3.5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tooltip-candidate" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Jumlah Product
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>


        <!-- card4 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4"
            data-tooltip-target="tooltip-productvote">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    Product Ready</p>
                                <h5 class="text-4xl font-bold dark:text-white counter">{{$productsVerified}}</h5>
                            </div>
                        </div>
                        <div class="px-3 text-right">
                            <div
                                class="inline-block w-16 h-16 text-center mt-1.5 rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                <i class="relative text-3xl text-white fa-solid fa-gift top-3.5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tooltip-productvote" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Jumlah Produk yang Siap Dijual
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <!-- cards row 2 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 ">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 rounded-t-4">
                    <div class="flex justify-between">
                        <h6 class="mb-2 dark:text-white">Newest Product</h6>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                        <thead class="align-bottom">
                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    No
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Name</th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    PRICE</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    IMAGE</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    STATUS</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($products as $product)
                                <tr>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $loop->iteration }}</span>
                                    </td>

                                    <td
                                        class="p-2 text-sm text-left bg-transparent border-b align-center dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <div class="flex items-center justify-center">
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                {{ $product->name }}</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm text-left bg-transparent border-b align-center dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <div class="flex items-center justify-center">
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                {{ $product->price }}</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm text-left bg-transparent border-b align-center dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <div class="flex items-center justify-center">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                                class="w-20 h-20 rounded-lg">
                                        </div>
                                    </td>

                                    <td class="bg-transparent border-b align-center">
                                        @if ($product->status == 0)
                                            <span data-tooltip-target="tooltip-soldout{{ $product->id }}"
                                                class="bg-gradient-to-tl from-red-600 to-red-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Soldout</span>
                                            <div id="tooltip-soldout{{ $product->id }}" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                Soldout
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        @else
                                            <span data-tooltip-target="tooltip-ready{{ $product->id }}"
                                                class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Ready</span>
                                            <div id="tooltip-ready{{ $product->id }}" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                Ready
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    @include('dashboard.partials.footer')
@endsection
@push('customJS')
    {{-- countUp.js --}}
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
    <script>
        const counterUp = window.counterUp.default;

        const callback = entries => {
            entries.forEach(entry => {
                const el = entry.target;
                if (entry.isIntersecting && !el.classList.contains('is-visible')) {
                    counterUp(el, {
                        duration: 1000,
                        delay: 6,
                    });
                    el.classList.add('is-visible');
                }
            });
        };

        const IO = new IntersectionObserver(callback, {
            threshold: 1
        });

        // Mengamati setiap elemen dengan kelas 'counter'
        const elements = document.querySelectorAll('.counter');
        elements.forEach(el => {
            IO.observe(el);
        });
    </script>
@endpush
