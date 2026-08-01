<!DOCTYPE html>
<html lang="en"
    x-data="{ sidebarOpen: true, mobileSidebarOpen: false, profileDropdown: false, notificationDropdown: false, activeModal: null, selectedApplicant: {} }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AbynnTech Dashboard</title>

    <link rel="preconnect" href="{{ asset('template/https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('template/https://fonts.gstatic.com') }}" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('template/assets/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/buttons.dataTables.min.css') }}">
    <link rel="icon" type="image/x-icon" href="assets/icon/OIP.ico">
    <link rel="icon" type="image/png" href="assets/icon/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">

    <style>
        [x-cloak] {
            display: none !important;
        }

        body {
            opacity: 0;
            visibility: hidden;
        }

        body.ready {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.3s ease-in;
        }
    </style>
</head>

<body class="text-slate-700 antialiased overflow-x-hidden min-h-screen bg-[#f4f8fa]">
    <div class="hidden w-[280px] w-[88px] lg:pl-[280px] lg:pl-[88px]"></div>
    <div
        class="fixed top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-[#C4E2F5]/40 blur-[130px] pointer-events-none z-0">
    </div>
    <div
        class="fixed bottom-[-10%] right-[-10%] w-[40vw] h-[40vw] rounded-full bg-[#4BB8FA]/20 blur-[110px] pointer-events-none z-0">
    </div>

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- End Sidebar -->

    <!-- Mobile Sidebar -->
    <div x-show="mobileSidebarOpen" class="fixed inset-0 bg-slate-900/30 backdrop-blur-sm z-50 lg:hidden"
        @click="mobileSidebarOpen = false" x-transition style="display: none;"></div>

    @include('layouts.mobile-sidebar')
    <!-- End Mobile Sidebar -->

    <div class="flex-1 flex flex-col min-h-screen z-10 w-full transition-all duration-300 min-w-0"
        :class="sidebarOpen ? 'lg:pl-[280px]' : 'lg:pl-[88px]'">

        <!-- Header -->
        @include('layouts.header')
        <!-- End Header -->

        <div class="flex flex-col xl:flex-row flex-1 p-4 lg:p-8 gap-6 w-full max-w-[100vw]">
            <div class="flex-1 space-y-6 min-w-0 w-full">

                <!-- Content -->
                @yield('content')
                <!-- End Content -->

            </div>
        </div>
    </div>

    <div x-show="activeModal"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/30 backdrop-blur-sm"
        style="display: none;" x-transition>
        <div class="bg-white rounded-2xl shadow-xl border border-slate-100 max-w-sm w-full p-6 text-xs text-slate-600 relative"
            @click.away="activeModal = null">

            <div x-show="activeModal === 'view'">
                <h3 class="text-sm font-bold font-heading text-slate-900 mb-4 flex items-center gap-2">
                    <svg class="w-4 h-4 text-[#1591DC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                        </path>
                    </svg>
                    <span>Applicant Profile Data</span>
                </h3>
                <div class="space-y-2.5 bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <p class="text-[10px] text-slate-400">Registration ID: <span
                            class="text-slate-950 font-semibold block text-xs mt-0.5"
                            x-text="selectedApplicant.id"></span></p>
                    <p class="text-[10px] text-slate-400">Full Legal Name: <span
                            class="text-slate-950 font-semibold block text-xs mt-0.5"
                            x-text="selectedApplicant.name"></span></p>
                    <p class="text-[10px] text-slate-400">Assigned Faculty: <span
                            class="text-slate-950 font-semibold block text-xs mt-0.5"
                            x-text="selectedApplicant.faculty"></span></p>
                </div>
                <button @click="activeModal = null"
                    class="mt-4 w-full py-2 bg-[#2C5EAD] hover:bg-[#1591DC] text-white font-semibold rounded-xl transition-all cursor-pointer">Close
                    Profile Workspace</button>
            </div>

            <div x-show="activeModal === 'edit'">
                <h3 class="text-sm font-bold font-heading text-slate-900 mb-4 flex items-center gap-2">
                    <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
                    <span>Modification Matrix</span>
                </h3>
                <div class="space-y-3">
                    <div>
                        <label class="block text-[10px] font-semibold text-slate-400 mb-1">Applicant Name</label>
                        <input type="text"
                            class="w-full border border-slate-200 px-3 py-1.5 rounded-lg focus:outline-none focus:border-[#2C5EAD]"
                            :value="selectedApplicant.name">
                    </div>
                </div>
                <div class="flex gap-2 mt-5">
                    <button @click="activeModal = null"
                        class="flex-1 py-1.5 bg-slate-100 text-slate-600 font-medium rounded-lg hover:bg-slate-200 transition-all cursor-pointer">Cancel</button>
                    <button @click="activeModal = null"
                        class="flex-1 py-1.5 bg-[#2C5EAD] text-white font-semibold rounded-lg hover:bg-[#1591DC] transition-all cursor-pointer">Save
                        Updates</button>
                </div>
            </div>

            <div x-show="activeModal === 'delete'" class="text-center">
                <div
                    class="h-10 w-10 bg-rose-50 text-rose-600 rounded-full flex items-center justify-center mx-auto mb-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-sm font-bold font-heading text-slate-900 mb-1">Destructive Action Warning</h3>
                <p class="text-[11px] text-slate-400 leading-relaxed mb-4">Are you certain you want to remove <span
                        class="font-bold text-slate-900" x-text="selectedApplicant.name"></span>?</p>
                <div class="flex gap-2">
                    <button @click="activeModal = null"
                        class="flex-1 py-1.5 bg-slate-100 text-slate-600 font-medium rounded-lg hover:bg-slate-200 transition-all cursor-pointer">Cancel</button>
                    <button @click="activeModal = null"
                        class="flex-1 py-1.5 bg-rose-600 text-white font-semibold rounded-lg hover:bg-rose-700 transition-all cursor-pointer">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <script src=" {{ asset('template/assets/js/jquery.min.js') }}"></script>
    <script src=" {{ asset('template/assets/js/jquery.dataTables.min.js') }}"></script>
    <script defer src=" {{ asset('template/assets/js/alpine.min.js') }}"></script>
    <script src=" {{ asset('template/assets/js/dataTables.buttons.min.js') }}"></script>
    <script src=" {{ asset('template/assets/js/jszip.min.js') }}"></script>
    <script src=" {{ asset('template/assets/js/pdfmake.min.js') }}"></script>
    <script src=" {{ asset('template/assets/js/vfs_fonts.js') }}"></script>
    <script src=" {{ asset('template/assets/js/buttons.html5.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            var table = $('#recentApplicantsTable').DataTable({
                responsive: true,
                dom: 'lfrtip',
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records filter...",
                    paginate: {
                        next: '→',
                        previous: '←'
                    }
                }
            })
            new $.fn.dataTable.Buttons(table, {
                buttons: [{
                    extend: 'excelHtml5'
                },
                {
                    extend: 'pdfHtml5'
                }
                ]
            })
            $('#exportExcelBtn').on('click', function () {
                table.button('.buttons-excel').trigger();
            })
            $('#exportPdfBtn').on('click', function () {
                table.button('.buttons-pdf').trigger();
            })
            table.buttons().container().appendTo('#dtButtonsContainer')
        });
    </script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.body.classList.add('ready');
            }, 100);
        });
    </script>
</body>

</html>