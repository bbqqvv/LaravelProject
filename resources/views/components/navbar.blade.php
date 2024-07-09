<header class="bg-white shadow h-auto max-w-full sticky z-50 top-0">
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
                <div class="hidden md:flex space-x-3">
                    <a href=" {{ route('login') }} " class="text-black flex items-center text-sm font-medium">
                        <i class="fa fa-sign-in mr-1" aria-hidden="true"></i> Đăng nhập
                    </a>
                    <a href="{{ route('register') }}" class="text-black flex items-center text-sm font-medium">
                        <i class="fa fa-user-plus mr-1" aria-hidden="true"></i> Đăng kí
                    </a>
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
            <div class="cart-box relative md:block hidden">
                <a href="/cart" class="text-black flex items-center">
                    <i class="fa fa-cart-arrow-down text-xl"></i>
                    <span
                        class="bg-black text-white rounded-full w-5 h-5 flex items-center justify-center mb-6">0</span>
                </a>
            </div>
        </div>
    </div>
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
