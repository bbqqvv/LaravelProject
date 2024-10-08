<header class="bg-white shadow h-auto max-w-full sticky z-20 top-0">

    <div class="wrapper">
        <!-- Hotline -->
        <div class="top-bar flex justify-between p-1 flex-1/2">
            <div class="form-left">
                <div class="items-center space-x-2 hidden md:block">
                    <a href="tel:0867.576.697" class="text-black flex items-center">
                        <i class="fa fa-phone mr-2" aria-hidden="true"></i>
                        <span><b>Hotline: 0867.576.697</b></span>
                    </a>
                </div>
            </div>
            <!-- Search Bar -->
            <div class="form-right flex space-x-3 items-center">
                <form class="relative">
                    <input name="q" type="text" autocomplete="off"
                        class="w-[18rem] border border-black rounded-sm h-7 hidden md:block">
                    <button id="search-big" type="button" class="absolute top-0 right-0">
                        <i class="fa fa-search text-gray-500 mr-2 mt-1" aria-hidden="true"></i>
                    </button>
                </form>

                <script>
                    document.getElementById('search-big').addEventListener('click', function() {
                        const query = document.querySelector('input[name="q"]').value;
                        window.location.href = '/search?q=' + encodeURIComponent(query);
                    });

                    document.querySelector('input[name="q"]').addEventListener('keyup', function(e) {
                        if (e.keyCode === 13) {
                            const query = e.target.value;
                            window.location.href = '/search?q=' + encodeURIComponent(query);
                        }
                    });
                </script>


                <div class="hidden md:flex space-x-3">

                    @guest
                        <x-navbar-link class="text-black flex items-center text-sm font-medium" href="{{ route('login') }}"
                            :active="request()->is('login')"> <i class="fa fa-sign-in mr-1" aria-hidden="true"></i> Đăng
                            nhập</x-navbar-link>
                        <x-navbar-link class="text-black flex items-center text-sm font-medium"
                            href="{{ route('register') }}" :active="request()->is('register')"> <i class="fa fa-user-plus mr-1"
                                aria-hidden="true"></i> Đăng
                            kí</x-navbar-link>
                    @endguest
                    @auth
                        <x-navbar-link class="text-black flex items-center text-sm font-medium" href="{{ route('logout') }}"
                            :active="request()->is('logout')"> <i class="fa fa-sign-in mr-1" aria-hidden="true"></i> Đăng
                            xuất</x-navbar-link>
                    @endauth



                </div>
            </div>
        </div>
        <div class="bottom-bar flex items-center justify-between p-4 flex-1">
            <div class="md:hidden flex items-center">
                <button id="menu-toggle">
                    <i class="fa fa-bars text-gray-500 text-xl"></i>
                </button>
            </div>
            <div class="logi-box relative w-15 mx-auto md:mx-0 flex justify-center md:justify-start">
                <a href="/">
                    <img src="https://statics.pancake.vn/web-media/d7/bd/4b/fd/e5c0c941dfec8e6fc215b45fcdfb50919aba303f21da38ddbdaa214d.png"
                        class="max-h-[60px]" alt="logo Cheapstore">
                </a>
            </div>
            <div class="nav-b-right flex items-center space-x-5">
                {{-- Giỏ hàng --}}
                @auth
                    <div class="relative account-box flex flex-col items-center">
                        <button onclick="toggleDropdown()"
                            class="text-black flex flex-col items-center open-cart focus:outline-none">
                            <i class="fa-solid fa-user"></i>
                            <span class="text-[0.8rem] text-red-600 font-semibold">{{ Auth::user()->name }}</span>
                        </button>
                        <div id="accountDropdown"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 hidden">
                            <a href="{{ route('account.show') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Quản lý tài khoản</a>
                            <a href="/orders" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Quản lý đơn
                                hàng</a>
                            <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Đăng xuất</a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>

    <script>
        function toggleDropdown() {
            document.getElementById('accountDropdown').classList.toggle('hidden');
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.open-cart')) {
                const dropdowns = document.getElementsByClassName("accountDropdown");
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('hidden')) {
                        openDropdown.classList.add('hidden');
                    }
                }
            }
        }
    </script>


    <div id="mobile-menu" class="hidden md:hidden">
        <div class="flex flex-col space-y-3 p-4">
            <a href="/customer/login" class="text-black flex items-center text-sm font-medium">
                <i class="fa fa-sign-in mr-1" aria-hidden="true"></i> Đăng nhập
            </a>
            <a href="/customer/register" class="text-black flex items-center text-sm font-medium">
                <i class="fa fa-user-plus mr-1" aria-hidden="true"></i> Đăng kí
            </a>
        </div>
    </div>
</header>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>



<script>
    $(document).ready(function() {
        $("#search-big").click(function() {
            window.location.assign("/search?q=" + $(".search input").val())
        });

        $('.search input').bind("enterKey", function(e) {
            window.location.assign("/search?q=" + $(".search input").val())
        });

        $('.search input').keyup(function(e) {
            if (e.keyCode == 13) {
                $(this).trigger("enterKey");
            }
        });

        obj = JSON.parse(document.getElementById('login-logout').innerText);
        if (obj != null) {
            $('.sign').hide();
            $('.signout').show();
        } else {
            $('.signout').hide();
        }
    });
</script>

<script>
    $(document).ready(function() {
        $("#search-big").click(function() {
            window.location.assign("/search?q=" + $(".search input").val())
        });

        $('.search input').bind("enterKey", function(e) {
            window.location.assign("/search?q=" + $(".search input").val())
        });

        $('.search input').keyup(function(e) {
            if (e.keyCode == 13) {
                $(this).trigger("enterKey");
            }
        });

        obj = JSON.parse(document.getElementById('login-logout').innerText);
        if (obj != null) {
            $('.sign').hide();
            $('.signout').show();
        } else {
            $('.signout').hide();
        }
    });
</script>


{{-- 
   {{-- <div class="hidden w-full md:block md:w-auto" id="navbar-default">
             <ul
                 class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                 <x-navbar-link href="/" :active="request()->is('/')">Home</x-navbar-link>
                 <x-navbar-link href="/posts" :active="request()->is('posts')">Posts</x-navbar-link>
                 @if (Auth::check() && Auth::user()->is_admin)
                     <x-navbar-link href="/admin" :active="request()->is('admin')">Admin</x-navbar-link>
                 @endif
                 @guest
                     <x-navbar-link href="{{ route('login') }}" :active="request()->is('login')">Login</x-navbar-link>
                     <x-navbar-link href="{{ route('register') }}" :active="request()->is('register')">Register</x-navbar-link>
                 @endguest
                 @auth
                     <span class="text-blue-600 dark:text-blue-400 font-semibold">{{ Auth::user()->name }}</span>
                     <form method="POST" action="{{ route('logout') }}">
                         @csrf
                         <x-navbar-link href="{{ route('register') }}" :active="false"
                             onclick="event.preventDefault(); this.closest('form').submit();">Logout</x-navbar-link>
                     </form>
                 @endauth
             </ul>
         </div> --}}
