<!-- resources/views/user/orders.blade.php -->
<x-layout>
    <div class="max-w-6xl mx-auto p-6 bg-white shadow-md rounded">
        <h1 class="text-2xl font-bold mb-6">Quản Lý Đơn Hàng Của Tôi</h1>
        <div class="mb-6">
            <table class="min-w-full bg-white border">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border">Mã Đơn Hàng</th>
                        <th class="py-2 px-4 border">Địa Chỉ</th>
                        <th class="py-2 px-4 border">Số Điện Thoại</th>
                        <th class="py-2 px-4 border">Trạng Thái</th>
                        <th class="py-2 px-4 border">Chi Tiết</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border">{{ $order['id'] }}</td>
                            <td class="py-2 px-4 border">{{ $order['address'] }}</td>
                            <td class="py-2 px-4 border">{{ $order['phoneNumber'] }}</td>
                            <td class="py-2 px-4 border">{{ $order['status'] }}</td>
                            <td class="py-2 px-4 border">
                                <button data-modal-toggle="order-details-modal-{{ $order['id'] }}"
                                    class="bg-blue-500 text-white px-4 py-2 rounded">
                                    Xem Chi Tiết
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for Order Details -->
        @foreach ($orders as $order)
            <div id="order-details-modal-{{ $order['id'] }}"
                class="fixed inset-0 flex items-center justify-center z-50 hidden">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full relative">
                    <button data-modal-close="order-details-modal-{{ $order['id'] }}" class="absolute top-2 right-2">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <h2 class="text-xl font-bold mb-4">Chi Tiết Đơn Hàng</h2>
                    <p><strong>Mã Đơn Hàng:</strong> {{ $order['id'] }}</p>
                    <p><strong>Tên Khách Hàng:</strong> {{ $order['customerName'] }}</p>
                    <p><strong>Địa Chỉ:</strong> {{ $order['address'] }}</p>
                    <p><strong>Số Điện Thoại:</strong> {{ $order['phoneNumber'] }}</p>
                    <p><strong>Ghi Chú:</strong> {{ $order['notes'] }}</p>
                    <h3 class="text-lg font-bold mt-4">Sản Phẩm</h3>
                    <ul>
                        @foreach ($order['products'] as $product)
                            <li>{{ $product['name'] }} - {{ number_format($product['price'], 0, ',', '.') }} VND</li>
                        @endforeach
                    </ul>
                    <p class="mt-4"><strong>Trạng Thái:</strong> {{ $order['status'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        document.querySelectorAll('[data-modal-toggle]').forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-modal-toggle');
                document.getElementById(target).classList.remove('hidden');
            });
        });

        document.querySelectorAll('[data-modal-close]').forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-modal-close');
                document.getElementById(target).classList.add('hidden');
            });
        });
    </script>
</x-layout>
