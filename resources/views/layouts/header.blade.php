        <header
            class="sticky top-0 h-20 bg-white/80 backdrop-blur-md border-b border-slate-100 px-4 lg:px-8 flex items-center justify-between z-35">
            <div class="flex items-center gap-4 flex-1 max-w-xl">
                <button @click="mobileSidebarOpen = true"
                    class="lg:hidden p-2 text-slate-500 hover:text-slate-900 focus:outline-none cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div class="relative w-full hidden sm:block">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                    <input type="text" placeholder="Search systems, applicants, ledgers..."
                        class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-100/70 rounded-xl text-xs focus:outline-none focus:border-[#1591DC] focus:bg-white transition-all">
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button
                    class="hidden md:flex items-center gap-1.5 bg-[#2C5EAD] hover:bg-[#1591DC] text-white px-3.5 py-2 rounded-xl text-xs font-semibold shadow-sm transition-all cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                        </path>
                    </svg>
                    <span>Add Widget</span>
                </button>

                <div class="relative" @click.away="notificationDropdown = false">
                    <button @click="notificationDropdown = !notificationDropdown; profileDropdown = false"
                        class="h-10 w-10 rounded-xl bg-slate-50 border border-slate-100/70 text-slate-400 hover:text-slate-600 flex items-center justify-center relative focus:outline-none cursor-pointer group transition-colors">
                        <svg class="w-4.5 h-4.5 text-slate-500 group-hover:text-slate-800 transition-colors"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                            </path>
                        </svg>
                        <span
                            class="absolute top-2.5 right-2.5 h-2 w-2 rounded-full bg-rose-500 ring-2 ring-white"></span>
                    </button>

                    <div x-show="notificationDropdown" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 mt-3 w-80 bg-white rounded-2xl shadow-xl border border-slate-100 p-2 z-50 text-xs text-slate-600 space-y-1"
                        style="display: none;">
                        <div class="px-3 py-2 border-b border-slate-50 flex items-center justify-between mb-1">
                            <p class="font-bold text-slate-900 font-heading">Notifications</p>
                            <span
                                class="text-[10px] bg-blue-50 text-[#2C5EAD] px-2 py-0.5 rounded-full font-semibold">3
                                New</span>
                        </div>

                        <div
                            class="flex items-start gap-4 mb-5 p-3 hover:bg-slate-50 rounded-xl transition-all border-l-2 border-emerald-500 bg-emerald-50/20">
                            <div
                                class="h-7 w-7 rounded-lg bg-emerald-50 text-emerald-600 shrink-0 flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-slate-700 leading-normal"><span
                                        class="font-semibold text-slate-900">System Backup</span> executed cleanly to
                                    cloud storage server.</p>
                                <span class="text-[10px] text-slate-400 block mt-1">Just now</span>
                            </div>
                        </div>

                        <div
                            class="flex items-start gap-4 mb-5 p-3 hover:bg-slate-50 rounded-xl transition-all border-l-2 border-[#1591DC] bg-blue-50/20">
                            <div
                                class="h-7 w-7 rounded-lg bg-blue-50 text-[#1591DC] shrink-0 flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-slate-700 leading-normal">Batch registration payouts of <span
                                        class="font-semibold text-slate-900">$45,000</span> dispersed cleanly.</p>
                                <span class="text-[10px] text-slate-400 block mt-1">12 mins ago</span>
                            </div>
                        </div>

                        <div
                            class="flex items-start gap-4 mb-5 p-3 hover:bg-slate-50 rounded-xl transition-all border-l-2 border-amber-500 bg-amber-50/20">
                            <div
                                class="h-7 w-7 rounded-lg bg-amber-50 text-amber-600 shrink-0 flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                    </path>
                                </svg>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-slate-700 leading-normal">API gateway threshold matching latency spike
                                    noticed on webhook.</p>
                                <span class="text-[10px] text-slate-400 block mt-1">45 mins ago</span>
                            </div>
                        </div>

                        <div class="pt-1.5 border-t border-slate-50 text-center">
                            <a href="#"
                                class="block py-1.5 text-[11px] font-bold text-[#2C5EAD] hover:text-[#1591DC] transition-colors">View
                                All Clear Systems Log</a>
                        </div>
                    </div>
                </div>

                <div class="relative" @click.away="profileDropdown = false">
                    <button @click="profileDropdown = !profileDropdown; notificationDropdown = false"
                        class="flex items-center gap-2.5 border-l border-slate-100 pl-3 focus:outline-none cursor-pointer group">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80"
                            alt="Avatar"
                            class="h-9 w-9 rounded-xl object-cover ring-2 ring-[#C4E2F5] group-hover:ring-[#1591DC] transition-all">
                        <div class="hidden xl:block text-left">
                            <p class="text-xs font-semibold text-slate-900 leading-none">Jati Nugroho</p>
                            <p class="text-[10px] text-slate-400 mt-1 font-medium flex items-center gap-0.5">FullStack
                                Developer <svg class="w-2 h-2 text-slate-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></p>
                        </div>
                    </button>

                    <div x-show="profileDropdown" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 mt-3 w-52 bg-white rounded-2xl shadow-xl border border-slate-100 p-1.5 z-50 text-xs text-slate-600 space-y-0.5"
                        style="display: none;">
                        <div class="px-3 py-2 border-b border-slate-50 mb-1">
                            <p class="font-semibold text-slate-950">Signed in as</p>
                            <p class="text-[10px] text-slate-400 truncate">tiinugroho@superadmin.io</p>
                        </div>
                        <a href="#"
                            class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-slate-50 transition-all">
                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>My Profile</span>
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 px-3 py-2 rounded-xl hover:bg-slate-50 transition-all">
                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                            </svg>
                            <span>Settings</span>
                        </a>
                        <hr class="border-slate-50 my-1">
                        <a href="#"
                            class="flex items-center gap-2 px-3 py-2 rounded-xl text-rose-600 hover:bg-rose-50 font-semibold transition-all">
                            <svg class="w-3.5 h-3.5 text-rose-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 11-6 0v-1m6-3a2 2 0 11-4 0h4v3"></path>
                            </svg>
                            <span>Sign Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>