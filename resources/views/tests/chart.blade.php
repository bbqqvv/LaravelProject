<x-layout>
    @include('partials._scroll_to_top')

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
    <div class="wrapper">
        <div class="container">
            <form action="/add-cart" enctype="multipart/form-data" method="post" accept-charset="UTF-8">
                <input type="hidden" name="_csrf_token" value="fAwsMBotAzM0MzQyBAAnECocQw0lBy9_2fFqOCsjNdLbSElZyp-A_jpK">
                <input type="hidden" name="utf8" value="✓">

                <div class="product-template">
                    <div class="row flex">

                        <div class="w-1/2">
                            <div class="product-images flex">
                                <div class="vertical-slider w-1/4">
                                    <!-- Thumbnails sẽ được chèn vào đây -->
                                </div>

                                <!-- Phần hiển thị hình ảnh lớn -->
                                <div class="image-list-big relative w-3/4 cloud-zoom">
                                    <div class="item">
                                        <div class="big-image">
                                            <img id="large-image-display" src="" alt="Large Image">
                                            <span class="ribbon tag-sale z-0" id="discount-tag"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <style>
                            /* Add your custom styles here */
                        </style>

                        <script>
                            $(document).ready(function() {
                                // Gửi yêu cầu API để lấy dữ liệu sản phẩm
                                $.ajax({
                                    url: `/api/products`,
                                    method: 'GET',
                                    success: function(response) {
                                        // Giả sử response chứa danh sách sản phẩm
                                        var products = response.products; // Điều chỉnh theo cấu trúc dữ liệu của bạn

                                        // Cập nhật ảnh lớn đầu tiên và gắn thẻ giảm giá
                                        if (products.length > 0) {
                                            var firstProduct = products[0];
                                            var images = JSON.parse(firstProduct
                                            .images); // Chuyển đổi chuỗi JSON thành mảng
                                            var imageUrls = images.map(img =>
                                                `http://127.0.0.1:8000/storage/${img.replace('public/', '')}`);
                                            $('#large-image-display').attr('src', imageUrls[0]);
                                            $('#discount-tag').text(firstProduct.sale ? `-${firstProduct.sale}%` : '');
                                        }

                                        // Tạo HTML cho các ảnh nhỏ
                                        var thumbnailsHtml = '';
                                        products.forEach(function(product) {
                                            var images = JSON.parse(product
                                            .images); // Chuyển đổi chuỗi JSON thành mảng
                                            var imageUrls = images.map(img =>
                                                `http://127.0.0.1:8000/storage/${img.replace('public/', '')}`);
                                            imageUrls.forEach(function(image) {
                                                thumbnailsHtml += `
                                                    <div class="item">
                                                        <div class="image-item">
                                                            <img alt="${product.name}" class="cloudzoom-gallery"
                                                                src="${image}"
                                                                data-large-src="${image}">
                                                        </div>
                                                    </div>
                                                `;
                                            });
                                        });
                                        $('.vertical-slider').html(thumbnailsHtml);

                                        // Khởi tạo slider
                                        $('.vertical-slider').slick({
                                            vertical: true,
                                            slidesToShow: 3,
                                            slidesToScroll: 1,
                                            arrows: true,
                                            infinite: true,
                                            prevArrow: "<button type='button' class='slick-prev'><img src='https://statics.pancake.vn/web-icons/53/9d/00/22/298186597ece64c5e7a1790745bff003b927b4f19aff0af8919eba10.svg' width='20' height='30'></button>",
                                            nextArrow: "<button type='button' class='slick-next'><img src='https://statics.pancake.vn/web-icons/53/9d/00/22/298186597ece64c5e7a1790745bff003b927b4f19aff0af8919eba10.svg' width='20' height='30'></button>"
                                        });

                                        // Cập nhật ảnh lớn khi thay đổi slide
                                        $('.vertical-slider').on('afterChange', function(event, slick, currentSlide) {
                                            var largeSrc = $('.vertical-slider .slick-current img').data(
                                                'large-src');
                                            $('#large-image-display').attr('src', largeSrc);
                                        });

                                        // Cập nhật ảnh lớn khi nhấp vào thumbnail
                                        $('.vertical-slider .image-item img').on('click', function() {
                                            var largeSrc = $(this).data('large-src');
                                            $('#large-image-display').attr('src', largeSrc);
                                        });
                                    },
                                    error: function(error) {
                                        console.error('Error fetching products:', error);
                                    }
                                });
                            });
                        </script>
                        <div class="w-1/2 product-right">
                            <div class="product-name-detail">
                                <h2 class="uppercase product-name-product font-barlow font-semibold text-2xl">Sơ mi họa
                                    tiết hoa cúc</h2>
                                <div class="title-product-detail">Mã sản phẩm: <span class="color-primary font-semibold"
                                        id="sku">hoacuc1</span></div>
                                <!--<div class="color-primary fw-600 fs-20 pdtb-12">Giá: 199.000</div>-->

                                <div class="price-product-sale-sale flex space-x-3">
                                    <div class="product-sale-original-price text-2xl font-barlow text-colorText">
                                        280.000đ</div>
                                    <div class="product-product-sale-price text-[#5986BD] text-2xl font-semibold">
                                        199.000đ</div>
                                </div>


                                <div class="title-product-detail">Tình trạng: <span
                                        class="color-primary font-semibold">Hết hàng</span>
                                </div>
                                <hr>
                                <div class="product-description pt-5 pb-5">
                                    <div class="title-product-detail">Thông tin sản phẩm:</div>
                                </div>
                                <hr>
                                <div class="space-y-4">
                                    <div class="title-product-detail space-y-2 mt-2"
                                        id="3f1c42bb-9b68-4847-b202-d13cf247ae69">
                                        <div class="title-attributes">Màu sắc:</div>
                                        <div class="values-attributes flex space-x-2 text-center">
                                            <div class="valueChild active" data-attributes="Màu sắc" data-value="Đen"
                                                onclick="handleColorClick(this)">Đen</div>
                                            <div class="valueChild" data-attributes="Màu sắc" data-value="Trắng"
                                                onclick="handleColorClick(this)">Trắng</div>
                                            <div class="valueChild" data-attributes="Màu sắc" data-value="Be"
                                                onclick="handleColorClick(this)">Be</div>
                                            <div class="valueChild" data-attributes="Màu sắc" data-value="Nâu"
                                                onclick="handleColorClick(this)">Nâu</div>
                                            <div class="valueChild" data-attributes="Màu sắc" data-value="Xanh"
                                                onclick="handleColorClick(this)">Xanh</div>
                                            <div class="valueChild" data-attributes="Màu sắc" data-value="Cam Đất"
                                                onclick="handleColorClick(this)">Cam Đất</div>
                                        </div>
                                    </div>

                                    <div class="title-product-detail space-y-2 mt-2" <div
                                        id="6c418cc3-4c28-4ce0-a767-873e48569aac">
                                        <div class="title-attributes">Kích thước:</div>
                                        <div class="values-attributes flex space-x-2 text-center">
                                            <div class="valueChild active" data-attributes="Kích thước" data-value="M"
                                                onclick="handleClick(this)">M</div>
                                            <div class="valueChild" data-attributes="Kích thước" data-value="L"
                                                onclick="handleClick(this)">L</div>
                                            <div class="valueChild" data-attributes="Kích thước" data-value="XL"
                                                onclick="handleClick(this)">XL</div>
                                            <div class="valueChild" data-attributes="Kích thước" data-value="2XL"
                                                onclick="handleClick(this)">2XL</div>
                                        </div>
                                    </div>
                                </div>


                                <script>
                                    function handleColorClick(element) {
                                        // Xóa lớp 'active' khỏi tất cả các ô màu sắc
                                        const colorChildren = document.querySelectorAll('.valueChild[data-attributes="Màu sắc"]');
                                        colorChildren.forEach(child => {
                                            child.classList.remove('active');
                                        });

                                        // Thêm lớp 'active' vào ô màu sắc được chọn
                                        element.classList.add('active');

                                        // Lấy giá trị màu sắc được chọn
                                        const selectedColor = element.getAttribute('data-value');
                                        console.log('Màu sắc được chọn:', selectedColor);
                                    }


                                    function handleClick(element) {
                                        // Xóa lớp 'active' khỏi tất cả các ô kích thước
                                        const sizeChildren = document.querySelectorAll('.valueChild[data-attributes="Kích thước"]');
                                        sizeChildren.forEach(child => {
                                            child.classList.remove('active');
                                        });

                                        // Thêm lớp 'active' vào ô kích thước được chọn
                                        element.classList.add('active');

                                        // Lấy giá trị kích thước được chọn
                                        const selectedSize = element.getAttribute('data-value');
                                        console.log('Kích thước được chọn:', selectedSize);
                                    }
                                </script>

                                <!--hạnh thêm-->
                                <div class="is-flex">
                                    <div class="name title-product-detail">Số lượng có sẵn: <span
                                            class="color-primary font-semibold">0</span> sản phẩm
                                    </div>
                                    <div class="remain-quantity" id="remain-quantity"></div>
                                </div>
                                <!--hạnh thêm-->

                                <div
                                    class="product-quantity flex items-center title-product-detail space-y-2 mt-2 pb-5 gap-10">
                                    <div class="field title-product-detail">Số lượng: </div>
                                    <div class="product-quantity-input h-[2rem] flex items-center" id="5582542">
                                        <i class="fa fa-minus border incre cursor-pointer"
                                            onclick="decrementQuantity(this)"></i>
                                        <input type="number"
                                            class="quantity-display w-[26%] h-[2rem] rounded-lg border text-center mx-2"
                                            value="1" name="quantity" min="1">
                                        <i class="fa fa-plus border decre cursor-pointer"
                                            onclick="incrementQuantity(this)"></i>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="product-call-to-action mt-5 flex">
                                <input type="hidden" name="return_url" value="/cart">
                                <button
                                    class="default-btn btn-contract font-bold bg-[#5986BD] text-white w-[30%] h-[2rem] rounded-md"
                                    type="submit" name="checkout">
                                    <i class="fa fa-shopping-cart " aria-hidden="true"></i> Mua ngay
                                </button>
                                @include('partials._add_to_cart')
                                {{-- <button type="submit" name="submit" id="add-to-cart"
                                    class="default-btn btn-primary font-bold bg-[#1D2C3F] text-white w-[40%] h-[2rem] rounded-md">
                                    <i class="fa fa-shopping-bag " aria-hidden="true"></i> Thêm vào giỏ
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function incrementQuantity(element) {
                        // Tìm thẻ input bên cạnh nút incre
                        const input = element.previousElementSibling;
                        // Lấy giá trị hiện tại của input
                        let currentValue = parseInt(input.value);
                        // Tăng giá trị
                        currentValue++;
                        // Cập nhật giá trị mới cho input
                        input.value = currentValue;

                        console.log(currentValue);
                    }

                    function decrementQuantity(element) {
                        // Tìm thẻ input bên cạnh nút decre
                        const input = element.nextElementSibling;
                        // Lấy giá trị hiện tại của input
                        let currentValue = parseInt(input.value);
                        // Giảm giá trị nếu lớn hơn giá trị min (1)
                        if (currentValue > 1) {
                            currentValue--;
                            // Cập nhật giá trị mới cho input
                            input.value = currentValue;
                        }
                        console.log(currentValue);

                    }
                </script>
                <div class="wrapper-description font-barlow">
                    <div class="w-full max-w-3xl mx-auto">
                        <div class="product-additional">
                            <ul class="tabs tabs-title flex space-x-10 border-b-2">
                                <li class="tab-link current border-b-2 border-gray-600" data-tab="tab-1">
                                    <h3><span>Mô tả</span></h3>
                                </li>
                                <li class="tab-link" data-tab="tab-2">
                                    <h3><span>Chính sách bảo hành</span></h3>
                                </li>
                            </ul>

                            <div class="additional-info mt-5 tab-content pb-10" id="tab-1">
                                <div class="rte space-y-5">
                                    {{-- Nội dung mô tả sẽ ở đây --}}
                                </div>
                            </div>

                            <div class="comment mt-5 tab-content hidden pt-2 pb-10" id="tab-2">
                                <div class="page-content  space-y-5">
                                    {{-- Nội dung bảo hành ở đây --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        const tabs = document.querySelectorAll(".tab-link");
                        const contents = document.querySelectorAll(".tab-content");

                        tabs.forEach(tab => {
                            tab.addEventListener("click", () => {
                                const target = document.getElementById(tab.dataset.tab);

                                tabs.forEach(t => t.classList.remove("current", "border-b-2",
                                    "border-gray-600"));
                                contents.forEach(c => c.classList.add("hidden"));

                                tab.classList.add("current", "border-b-2", "border-gray-600");
                                target.classList.remove("hidden");
                            });
                        });
                    });
                </script>
        </div>
        </form>
    </div>
    </div>
</x-layout>
