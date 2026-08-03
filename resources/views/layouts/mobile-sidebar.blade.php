    <aside
        class="fixed top-0 left-0 h-screen w-[270px] bg-white border-r border-slate-100 z-50 flex flex-col justify-between transition-transform duration-300 transform lg:hidden shadow-xl"
        :class="mobileSidebarOpen ? 'translate-x-0' : '-translate-x-full'">
        <div>
            <div class="h-20 flex items-center px-6 border-b border-slate-50 justify-between">
                <div class="flex items-center gap-3">
                    <div
                        class="h-10 w-10 min-w-[40px] rounded-xl bg-[#2C5EAD] flex items-center justify-center text-white shadow-sm shadow-blue-200/50 overflow-hidden p-1.5 bg-white border border-slate-100">
                        <img src="{{ asset ('template/assets/img/OIP.jpeg') }}" alt="ABYNNTECH Logo" class="w-full h-full object-contain">
                    </div>
                    <span class="font-heading font-bold text-base tracking-tight text-slate-900">ABYNNTECH <span
                            class="text-[#1591DC]">OS</span></span>
                </div>
                <button @click="mobileSidebarOpen = false" class="text-slate-400 hover:text-slate-900 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <nav class="p-4 space-y-1">
                <a href="#"
                    class="flex items-center gap-4 px-4 py-2.5 rounded-xl bg-[#C4E2F5]/50 text-[#2C5EAD] font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V16zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V16z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>
            </nav>
        </div>
    </aside>