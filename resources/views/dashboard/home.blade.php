@extends('dashboard.layouts.dashboardmain')
@section('title', 'Home')
@section('content')
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4" data-tooltip-target="tooltip-userall">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    Total Users</p>
                                <h5 class="text-4xl font-bold dark:text-white counter"></h5>
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
        <div id="tooltip-userall" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Jumlah Semua User
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <!-- card2-->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4"
            data-tooltip-target="tooltip-usernotvote">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    User Verified</p>
                                <h5 class="text-4xl font-bold dark:text-white counter"></h5>
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
        <div id="tooltip-usernotvote" role="tooltip"
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
                                <h5 class="text-4xl font-bold dark:text-white counter"></h5>
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
            data-tooltip-target="tooltip-uservote">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    Product Ready</p>
                                <h5 class="text-4xl font-bold dark:text-white counter"></h5>
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
        <div id="tooltip-uservote" role="tooltip"
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
                    <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                        <tbody>
                            <tr>
                                <td
                                    class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-2 py-1">
                                        <div>
                                            <img src="../assets/img/icons/flags/US.png" alt="Country flag" />
                                        </div>
                                        <div class="ml-6">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Country:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">United States</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Sales:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">2500</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Value:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">$230,900</h6>
                                    </div>
                                </td>
                                <td
                                    class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Bounce:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">29.9%</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-2 py-1">
                                        <div>
                                            <img src="../assets/img/icons/flags/DE.png" alt="Country flag" />
                                        </div>
                                        <div class="ml-6">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Country:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Germany</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Sales:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">3.900</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Value:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">$440,000</h6>
                                    </div>
                                </td>
                                <td
                                    class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Bounce:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">40.22%</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-2 py-1">
                                        <div>
                                            <img src="../assets/img/icons/flags/GB.png" alt="Country flag" />
                                        </div>
                                        <div class="ml-6">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Country:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Great Britain</h6>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Sales:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">1.400</h6>
                                    </div>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Value:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">$190,700</h6>
                                    </div>
                                </td>
                                <td
                                    class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Bounce:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">23.44%</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-0 w-3/10 whitespace-nowrap">
                                    <div class="flex items-center px-2 py-1">
                                        <div>
                                            <img src="../assets/img/icons/flags/BR.png" alt="Country flag" />
                                        </div>
                                        <div class="ml-6">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Country:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Brasil</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                    <div class="text-center">
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Sales:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">562</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                    <div class="text-center">
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Value:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">$143,960</h6>
                                    </div>
                                </td>
                                <td
                                    class="p-2 text-sm leading-normal align-middle bg-transparent border-0 whitespace-nowrap">
                                    <div class="flex-1 text-center">
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                            Bounce:</p>
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">32.14%</h6>
                                    </div>
                                </td>
                            </tr>
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
