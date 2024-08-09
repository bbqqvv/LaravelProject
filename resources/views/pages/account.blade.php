<x-layout>
    <h1 class="text-3xl font-bold mb-6 text-center">Quản Lý Tài Khoản</h1>
    <div class="container mx-auto px-4 py-6 flex justify-between space-x-5">

        <!-- Thông Báo -->
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 mb-4 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 mb-4 rounded-lg">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Thông Tin Cá Nhân -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6 w-1/2">
            <h2 class="text-2xl font-semibold mb-4">Thông Tin Cá Nhân</h2>

            <form action="/update-account" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Tên</label>
                    <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"
                        class="border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ Auth::user()->email }}"
                        class="border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="address" class="block text-gray-700 text-sm font-medium mb-2">Địa Chỉ Giao Hàng</label>
                    <input type="text" id="address" name="address" value="{{ Auth::user()->address }}"
                        class="border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="email_notifications" class="inline-flex items-center">
                        <input type="checkbox" id="email_notifications" name="email_notifications"
                            class="form-checkbox h-5 w-5 text-blue-600"
                            {{ Auth::user()->email_notifications ? 'checked' : '' }}>
                        <span class="ml-2 text-gray-700">Nhận thông báo qua email</span>
                    </label>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">Cập
                        Nhật</button>
                </div>
            </form>
        </div>

        <!-- Thay Đổi Mật Khẩu -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6 hover:shadow-lg transition-shadow duration-300 w-1/2">
            <h2 class="text-2xl font-semibold mb-4">Thay Đổi Mật Khẩu</h2>

            <form action="/update-password" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="current_password" class="block text-gray-700 text-sm font-medium mb-2">Mật Khẩu Hiện
                        Tại</label>
                    <input type="password" id="current_password" name="current_password"
                        class="border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="new_password" class="block text-gray-700 text-sm font-medium mb-2">Mật Khẩu Mới</label>
                    <input type="password" id="new_password" name="new_password"
                        class="border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="checkbox" id="show_new_password" class="mt-2"
                        onclick="togglePassword('new_password')">
                    <label for="show_new_password" class="text-gray-600 text-sm ml-2">Hiển Thị Mật Khẩu</label>
                </div>

                <div class="mb-4">
                    <label for="confirm_password" class="block text-gray-700 text-sm font-medium mb-2">Xác Nhận Mật Khẩu
                        Mới</label>
                    <input type="password" id="confirm_password" name="confirm_password"
                        class="border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="checkbox" id="show_confirm_password" class="mt-2"
                        onclick="togglePassword('confirm_password')">
                    <label for="show_confirm_password" class="text-gray-600 text-sm ml-2">Hiển Thị Mật Khẩu</label>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">Cập
                        Nhật Mật Khẩu</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword(id) {
            const passwordField = document.getElementById(id);
            const isPassword = passwordField.type === 'password';
            passwordField.type = isPassword ? 'text' : 'password';
        }
    </script>
</x-layout>
