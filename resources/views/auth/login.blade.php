<x-layout class="absolute">
    <x-header>
        <a href="{{ route('home') }}"><b>Trang chủ</b></a> >

        @php
            $segments = explode('/', basename(request()->path()));
            $currentPath = '';

            foreach ($segments as $segment) {
                $currentPath .= '/' . $segment;
                echo '<a href="register' . url($currentPath) . '"><b>' . ucfirst($segment) . '</b></a>';
            }
        @endphp
    </x-header>

    <div class="flex justify-center items-cente h-[30rem] mt-6">
        <div class="max-w-md w-full md:w-[28rem] p-4">
            <form method="POST" action="{{ route('login.store') }}">
                @csrf
                <div class="account-form">
                    <h3 class="font-barlow font-bold text-center text-lg mb-4">Đăng nhập tài khoản</h3>
                    <div class="form-item flex flex-col mb-4">
                        <label class="mb-2 font-barlow text-[0.9rem]">Email</label>
                        <input class="w-full p-2 border border-gray-300 rounded" placeholder="Email..." type="email"
                            aria-describedby="emailHelp" name="email" value="" required>
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-item flex flex-col mb-4">
                        <label class="mb-2 font-barlow text-[0.9rem]">Mật khẩu</label>
                        <input class="w-full p-2 border border-gray-300 rounded" type="password" placeholder="Mật khẩu"
                            name="password" value="" required>
                        @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-center mt-8">
                        <button type="submit"
                            class="bg-colorBtn w-[6.5rem] font-bold text-white py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 hover:bg-customHoverColor">Đăng
                            ký</button>
                        <span class="block mt-2">Quên mật khẩu?<a href="/customer/login" class="text-blue-600"> bấm vào
                                đây</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-layout>
