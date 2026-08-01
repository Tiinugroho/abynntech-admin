    <aside
        class="fixed top-0 left-0 h-screen bg-white border-r border-slate-100 z-40 transition-all duration-300 hidden lg:flex flex-col justify-between"
        :class="sidebarOpen ? 'w-[280px]' : 'w-[88px]'">
        <div class="relative h-full flex flex-col justify-between">
            <div>
                <div class="h-20 flex items-center px-6 border-b border-slate-50">
                    <div class="flex items-center gap-3 overflow-hidden">
                        <div
                            class="h-10 w-10 min-w-[40px] rounded-xl bg-[#2C5EAD] flex items-center justify-center text-white shadow-sm shadow-blue-200/50 overflow-hidden p-1.5 bg-white border border-slate-100">
                            <img src="assets/img/OIP.jpeg" alt="ABYNNTECH Logo" class="w-full h-full object-contain">
                        </div>
                        <span class="font-heading font-bold text-base tracking-tight text-slate-900 whitespace-nowrap"
                            x-show="sidebarOpen">
                            ABYNNTECH <span class="text-[#1591DC]">OS</span>
                        </span>
                    </div>
                </div>

                <nav class="p-4 space-y-1 overflow-y-auto max-h-[calc(100vh-220px)]">
                    <a href="#"
                        class="flex items-center gap-4 px-4 py-3 rounded-xl bg-[#C4E2F5]/50 text-[#2C5EAD] font-semibold transition-all">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V16zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V16z">
                            </path>
                        </svg>
                        <span class="text-sm tracking-wide whitespace-nowrap" x-show="sidebarOpen">Dashboard</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:bg-slate-50/80 hover:text-slate-900 transition-all">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                            </path>
                        </svg>
                        <span class="text-sm tracking-wide whitespace-nowrap" x-show="sidebarOpen">Accounts</span>
                    </a>

                    <div x-data="{ open: true }">
                        <button @click="open = !open"
                            class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-slate-500 hover:bg-slate-50/80 hover:text-slate-900 transition-all">
                            <div class="flex items-center gap-4">
                                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 012 2v1m-6-3a2 2 0 11-4 0h4v3">
                                    </path>
                                </svg>
                                <span class="text-sm tracking-wide whitespace-nowrap"
                                    x-show="sidebarOpen">Transactions</span>
                            </div>
                            <svg class="w-3 h-3 transition-transform text-slate-400" :class="open ? 'rotate-180' : ''"
                                x-show="sidebarOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open && sidebarOpen" x-transition class="pl-12 pr-4 py-1 space-y-1">
                            <a href="#" class="block py-1.5 text-sm text-[#1591DC] font-medium">History</a>
                            <a href="#"
                                class="block py-1.5 text-sm text-slate-400 hover:text-slate-900">Integration</a>
                            <a href="#"
                                class="block py-1.5 text-sm text-slate-400 hover:text-slate-900">Reports</a>
                        </div>
                    </div>

                    <a href="#"
                        class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:bg-slate-50/80 hover:text-slate-900 transition-all">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span class="text-sm tracking-wide whitespace-nowrap" x-show="sidebarOpen">Cash Flow</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:bg-slate-50/80 hover:text-slate-900 transition-all">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        <span class="text-sm tracking-wide whitespace-nowrap" x-show="sidebarOpen">Budget</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:bg-slate-50/80 hover:text-slate-900 transition-all">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 3.055A9.003 9.003 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>
                        <span class="text-sm tracking-wide whitespace-nowrap" x-show="sidebarOpen">Investments</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:bg-slate-50/80 hover:text-slate-900 transition-all">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                        </svg>
                        <span class="text-sm tracking-wide whitespace-nowrap" x-show="sidebarOpen">Learning
                            Center</span>
                    </a>
                </nav>
            </div>

            <div class="p-4 border-t border-slate-50 bg-slate-50/40">
                <div class="flex items-center transition-all duration-300"
                    :class="sidebarOpen ? 'gap-3 px-2 py-1' : 'justify-center'">
                    <div class="relative shrink-0">
                        <img src="{{ asset ('template/https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80') }}"
                            alt="User Profile" class="h-10 w-10 rounded-xl object-cover ring-2 ring-[#C4E2F5]">
                        <span
                            class="absolute -bottom-0.5 -right-0.5 h-3 w-3 rounded-full bg-emerald-500 ring-2 ring-white animate-pulse"></span>
                    </div>

                    <div class="min-w-0 flex-1" x-show="sidebarOpen"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-x-2">
                        <p class="text-xs font-semibold text-slate-900 truncate leading-none">Jati Nugroho</p>
                        <p class="text-[10px] text-emerald-600 font-medium mt-1 flex items-center gap-1">
                            <span class="h-1 w-1 rounded-full bg-emerald-500"></span> Active Session
                        </p>
                    </div>
                </div>
            </div>

            <button @click="sidebarOpen = !sidebarOpen"
                class="absolute top-7 -right-3.5 h-7 w-7 bg-white border border-slate-200 text-slate-500 hover:text-slate-900 rounded-full flex items-center justify-center shadow-sm hover:shadow transition-all cursor-pointer z-50"
                title="Toggle Sidebar Menu">
                <svg class="w-3.5 h-3.5 transition-transform duration-300" :class="!sidebarOpen ? 'rotate-180' : ''"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
        </div>
    </aside>