<x-layout>
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

            {{-- <!-- Start breadcrumb -->
            <div class="breadcrumb">
                <div class="wrapper">
                    <ul class="breadcrumb-ul">
                        <li><a href="/">Trang chủ</a><span><i class="fa fa-angle-right"></i></span></li>
                        <li><a href="/collections/all">Sản phẩm</a><span><i class="fa fa-angle-right"></i></span></li>
                        <li><a class="active" href="/products/so-mi-hoa-tiet-hoa-cuc">Sơ mi họa tiết hoa cúc</a></li>
                    </ul>
                </div>
            </div>
            <!-- End breadcrumb --> --}}
            <form action="/add-cart" enctype="multipart/form-data" method="post" accept-charset="UTF-8">
                <input type="hidden" name="_csrf_token" value="fAwsMBotAzM0MzQyBAAnECocQw0lBy9_2fFqOCsjNdLbSElZyp-A_jpK">
                <input type="hidden" name="utf8" value="✓">

                <div class="product-template">
                    <div class="row flex">

                        <div class="w-1/2">
                            <div class="product-images flex">
                                <!-- Các nút điều hướng -->
                                {{-- <span class="owl-carousel-nav owl-carousel-prev" id="button-slider-left">
                                    <img src="https://statics.pancake.vn/web-icons/53/9d/00/22/298186597ece64c5e7a1790745bff003b927b4f19aff0af8919eba10.svg"
                                        width="20" height="30">
                                </span>
                                <span class="owl-carousel-nav owl-carousel-next" id="button-slider-right">
                                    <img src="https://statics.pancake.vn/web-icons/53/9d/00/22/298186597ece64c5e7a1790745bff003b927b4f19aff0af8919eba10.svg"
                                        width="20" height="30">
                                </span> --}}

                                <!-- Owl Carousel cho hình ảnh nhỏ -->
                                <div class="vertical-slider w-1/4">
                                    <div class="item">
                                        <div class="image-item">
                                            <img alt="Image 1" class="cloudzoom-gallery"
                                                src="https://statics.pancake.vn/web-media/57/13/69/02/d3caf34bfb778fec405c39e4a883588589acc3bf8769d0d30caedd58.jpg"
                                                data-large-src="https://statics.pancake.vn/web-media/57/13/69/02/d3caf34bfb778fec405c39e4a883588589acc3bf8769d0d30caedd58.jpg">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-item">
                                            <img alt="Image 2" class="cloudzoom-gallery"
                                                src="https://statics.pancake.vn/web-media/71/37/48/94/14ac19c5691f16ecbe01db44f09c1a774d257faf719d8af87b95d6b6.jpg"
                                                data-large-src="https://statics.pancake.vn/web-media/71/37/48/94/14ac19c5691f16ecbe01db44f09c1a774d257faf719d8af87b95d6b6.jpg">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-item">
                                            <img alt="Image 3" class="cloudzoom-gallery"
                                                src="https://statics.pancake.vn/web-media/92/45/d5/02/6d65fcdef93c2f6170870e1911f77fc01c8f9706c492f1fa882521e2.jpg"
                                                data-large-src="https://statics.pancake.vn/web-media/92/45/d5/02/6d65fcdef93c2f6170870e1911f77fc01c8f9706c492f1fa882521e2.jpg">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-item">
                                            <img alt="Image 4" class="cloudzoom-gallery"
                                                src="https://statics.pancake.vn/web-media/42/27/0b/24/18c82dca2649192f652f6b7cb5afd8cdcbe5c1d5806ed1c6d832b5c3.jpg"
                                                data-large-src="https://statics.pancake.vn/web-media/42/27/0b/24/18c82dca2649192f652f6b7cb5afd8cdcbe5c1d5806ed1c6d832b5c3.jpg">
                                        </div>
                                    </div>
                                </div>

                                <!-- Phần hiển thị hình ảnh lớn -->
                                <div class="image-list-big relative w-3/4 cloud-zoom">
                                    <div class="item">
                                        <div class="big-image">
                                            <img id="large-image-display"
                                                src="https://statics.pancake.vn/web-media/57/13/69/02/d3caf34bfb778fec405c39e4a883588589acc3bf8769d0d30caedd58.jpg">
                                            <span class="ribbon tag-sale z-0">-21%</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <style>

                        </style>
                        <script>
                            $(document).ready(function() {
                                $('.vertical-slider').slick({
                                    vertical: true,
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                    arrows: true,
                                    infinite: true,
                                    prevArrow: "<button type='button' class='slick-prev'><img src='https://statics.pancake.vn/web-icons/53/9d/00/22/298186597ece64c5e7a1790745bff003b927b4f19aff0af8919eba10.svg' width='20' height='30'></button>",
                                    // nextArrow: "<button type='button' class='slick-next'><img src='https://statics.pancake.vn/web-icons/53/9d/00/22/298186597ece64c5e7a1790745bff003b927b4f19aff0af8919eba10.svg' width='20' height='30'></button>"
                                });

                                // Update large image on slider change
                                $('.vertical-slider').on('afterChange', function(event, slick, currentSlide) {
                                    var largeSrc = $('.vertical-slider .slick-current img').data('large-src');
                                    $('#large-image-display').attr('src', largeSrc);
                                });

                                // Update large image on thumbnail click
                                $('.vertical-slider .image-item img').on('click', function() {
                                    var largeSrc = $(this).data('large-src');
                                    $('#large-image-display').attr('src', largeSrc);
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
                                    <div
                                        class="product-product-sale-original-price text-2xl font-barlow text-colorText">
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
                            <div class="product-call-to-action mt-5">
                                <input type="hidden" name="return_url" value="/cart">
                                <button
                                    class="default-btn btn-contract font-bold bg-[#5986BD] text-white w-[30%] h-[2rem] rounded-md"
                                    type="submit" name="checkout">
                                    <i class="fa fa-shopping-cart " aria-hidden="true"></i> Mua ngay
                                </button>
                                <button type="submit" name="submit" id="add-to-cart"
                                    class="default-btn btn-primary font-bold bg-[#1D2C3F] text-white w-[40%] h-[2rem] rounded-md">
                                    <i class="fa fa-shopping-bag " aria-hidden="true"></i> Thêm vào giỏ
                                </button>
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
                                    <p class="irIKAp font-semibold">Chi tiết áo sơ mi Roway</p>
                                    <p class="irIKAp">- Chất vải: Lụa pha thoáng mát, mềm mịn</p>
                                    <p class="irIKAp">- Phom áo: Suông che khuyết điểm tốt và dễ dàng hoạt động</p>
                                    <p class="irIKAp">- Hoàn thiện: tỉ mỉ cao</p>
                                    <p class="irIKAp">&nbsp;</p>
                                    <p class="irIKAp font-semibold">Cách chọn size: Bạn nên Inbox, cung cấp chiều cao,
                                        cân nặng để shop tư vấn size chuẩn nhất</p>
                                    <p class="irIKAp font-semibold">- Bảng size mẫu Roway</p>
                                    <div class="irIKAp">
                                        <div>
                                            <div class="cxDtMn"><img class="_0O7Vlf bgImIg"
                                                    src="https://down-vn.img.susercontent.com/file/7bdcd9ed78181eba25b96371424cf228"
                                                    width="invalid-value" height="invalid-value"></div>
                                        </div>
                                    </div>
                                    <p class="irIKAp">&nbsp;</p>
                                    <p class="irIKAp font-semibold">Sản phẩm được đóng 2 lớp hộp để chống móp méo khi
                                        vận chuyển</p>
                                    <p class="irIKAp font-semibold">Là khách hàng Roway, chúng tôi cam kết bạn sẽ được:
                                    </p>
                                    <p class="irIKAp">1. Sản phẩm giống mô tả và hình ảnh thật 100% của Shop giữ bản
                                        quyền hình ảnh.</p>
                                    <p class="irIKAp">2. Đảm bảo vải chất lượng sản phẩm 100%</p>
                                    <p class="irIKAp">3. Cam kết được đổi trả hàng trong vòng 30 ngày.</p>
                                    <p class="irIKAp">4. Hoàn tiền nếu sản phẩm không giống với mô tả</p>
                                    <p class="irIKAp">+ Hàng phải còn mới đầy đủ tem mác và chưa qua sử dụng</p>
                                    <p class="irIKAp">+ Sản phẩm bị lỗi do vận chuyển và do nhà sản xuất</p>
                                    <p class="irIKAp">𝑯𝒖̛𝒐̛́𝒏𝒈 𝒅𝒂̂̃𝒏 𝒔𝒖̛̉ 𝒅𝒖̣𝒏𝒈 𝒔𝒂̉𝒏 𝒑𝒉𝒂̂̉𝒎 𝑨́𝒐
                                        𝑹𝒐𝒘𝒂𝒚</p>
                                    <p class="irIKAp">- Giặt ở nhiệt độ bình thường</p>
                                    <p class="irIKAp">- Không được dùng hóa chất tẩy.</p>
                                    <p class="irIKAp">Do màn hình và điều kiện ánh sáng khác nhau, màu sắc thực tế của
                                        sản phẩm có thể chênh lệch khoảng 3-5%</p>
                                </div>
                            </div>

                            <div class="comment mt-5 tab-content hidden pt-2 pb-10" id="tab-2">
                                <div class="page-content  space-y-5">
                                    <p class="p1 font-semibold">Những sản phẩm được đổi khi đảm bảo các điều kiện sau:
                                    </p>
                                    <p class="p1">-&nbsp;&nbsp; Thời gian đổi sản phẩm trong vòng 03 ngày (kể từ
                                        ngày xuất bán đối với mua trực tiếp hoặc kể từ ngày nhận được sản phẩm đối với
                                        mua hàng qua mạng)</p>
                                    <p class="p1">-&nbsp;&nbsp; Sản phẩm phải nguyên vẹn, còn nguyên tem mác như
                                        khi shop bàn giao.</p>
                                    <p class="p1">-&nbsp;&nbsp; Sản phẩm đổi phải ngang giá hoặc lớn hơn so với sản
                                        phẩm trả.</p>
                                    <p class="p1">-&nbsp;&nbsp; Tất cả các chi phí phát sinh khi đổi trả khách hàng
                                        phải chịu 100%.</p>
                                    <p class="p1">Những trường hợp được bảo hành, sửa chữa không tính phí:</p>
                                    <p class="p1">- Đối với các sản phẩm quần âu, áo sơ mi do shop sản xuất, khách
                                        hàng có nhu cầu lên gấu, bóp eo chỉnh sửa form dáng áo ,quần....</p>
                                    <p class="p1">- Đối với sản phẩm giày da, thắt lưng shop hiện không nhận bảo
                                        hành</p>
                                    <p class="p1">Những trường hợp bảo hành có tính phí:</p>
                                    <p class="p1">- Đối với các sản phẩm quần, áo mà khách hàng trong quá trình sử
                                        dụng bị rách, hỏng và có nhu cầu sửa chữa, cũng như shop có khả năng sửa chữa
                                        được.</p>
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
