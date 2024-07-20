<x-adminbar>
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col">
            @if (session('status'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-md">
                    {{ session('status') }}
                </div>
            @endif

            <div class="bg-white shadow-md rounded-md overflow-hidden">
                <div class="px-4 py-3 bg-gray-100 border-b border-gray-200 flex justify-between items-center">
                    <h4 class="text-lg font-semibold">Danh sách sản phẩm</h4>
                    <a href="{{ route('products.create') }}" class="px-4 py-2 font-semibold">Thêm sản phẩm</a>
                </div>
                <div class="p-4">
                    <table class="w-full table-auto border-collapse">
                        <thead class="bg-gray-200 text-gray-600">
                            <tr>
                                <th class="py-2 px-4 border-b">Id</th>
                                <th class="py-2 px-4 border-b">Ảnh</th>
                                <th class="py-2 px-4 border-b">Tên</th>
                                <th class="py-2 px-4 border-b">Giá</th>
                                <th class="py-2 px-4 border-b">Trạng thái</th>
                                <th class="py-2 px-4 border-b">Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="product-list">
                            <!-- Placeholder for products fetched via API -->
                        </tbody>
                    </table>

                    {{-- {{ $product->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</x-adminbar>

@section('scripts')
    <script>
        // Function to fetch products from API and display them
        function fetchProducts() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://127.0.0.1:8000/api/products', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var products = JSON.parse(xhr.responseText).data;

                        var productList = document.getElementById('product-list');
                        productList.innerHTML = ''; // Clear previous content

                        products.forEach(function(product) {
                            var tr = document.createElement('tr');
                            tr.innerHTML = `
                            <td class="py-2 px-4 border-b">${product.id}</td>
                            <td class="py-2 px-4 border-b"><img src="${product.image}" alt="Product Image" class="w-16 h-16 object-cover"></td>
                            <td class="py-2 px-4 border-b">${product.name}</td>
                            <td class="py-2 px-4 border-b">${product.price}</td>
                            <td class="py-2 px-4 border-b">${product.status == 1 ? 'Còn hàng' : 'Hết hàng'}</td>
                            <td class="py-2 px-4 border-b space-x-2">
                                <a href="{{ url('product') }}/${product.id}/edit" class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600">Edit</a>
                                <a href="{{ url('product') }}/${product.id}" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Show</a>
                                <form action="{{ url('product') }}/${product.id}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                                </form>
                            </td>
                            `;
                            productList.appendChild(tr);
                        });
                    } else {
                        console.error('Failed to fetch products. Error:', xhr.status);
                    }
                }
            };
            xhr.send();
        }

        // Call fetchProducts function when the page loads
        document.addEventListener('DOMContentLoaded', fetchProducts);
    </script>
@endsection
