<nav class="-mx-3 flex flex-1 justify-center">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="
                w-50
                block hover:bg-[#37208B] dark:hover:bg-[#37208B]
                bg-[#37208B] dark:bg-[#37208B]
                text-2xl
                rounded-md px-3 py-2 
                text-black ring-1 
                ring-transparent transition 
                hover:text-black/70 focus:outline-hidden 
                focus-visible:ring-[#37208B] 
                dark:text-white 
                dark:hover:text-white/800
                mx-5">
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="
                w-50
                block hover:bg-white dark:hover:bg-white
                bg-[#37208B] dark:bg-[#37208B]
                text-2xl
                rounded-md px-3 py-2 
                text-black ring-1 
                ring-transparent transition 
                hover:text-black/70 focus:outline-hidden 
                focus-visible:ring-[#37208B] 
                dark:text-white 
                dark:hover:text-white/800 
                mx-5">
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="
                w-50
                block hover:bg-white dark:hover:bg-white
                bg-[#37208B] dark:bg-[#37208B]
                text-2xl
                rounded-md px-3 py-2 
                text-black ring-1 
                ring-transparent transition 
                hover:text-black/70 focus:outline-hidden 
                focus-visible:ring-[#37208B] 
                dark:text-white 
                dark:hover:text-white/800
                mx-5">
            Register
            </a>
        @endif
    @endauth
</nav>
