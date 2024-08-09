@php
    use Illuminate\Support\Str;

    function generateSlug($name)
    {
        return Str::slug($name, '-');
    }
@endphp

<x-layout>
    @include('partials._scroll_to_top')
    @include('components.cart-flash')
    <section class="hero">
        <div class="owl-wrap-info">
            <div class="owl-banner-info owl-carousel owl-theme">
                <!-- Nội dung của owl-banner-info -->
            </div>
        </div>
        <div class="owl-banner owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item">
                        <a href="">
                            <img src="https://statics.pancake.vn/web-media/c1/6e/3f/b8/78f7ad395a972ba6eac89254f8163eb7f871c83da263d24404b7b301.jpg"
                                alt="banner" class="image-banner img-responsive center-block" width="100%"
                                height="100%">
                        </a>
                    </div>
                    <div class="owl-item">
                        <a href="">
                            <img src="https://statics.pancake.vn/web-media/c1/6e/3f/b8/78f7ad395a972ba6eac89254f8163eb7f871c83da263d24404b7b301.jpg"
                                alt="banner" class="image-banner img-responsive center-block" width="100%"
                                height="100%">
                        </a>
                    </div>
                    <div class="owl-item">
                        <a href="">
                            <img src="https://statics.pancake.vn/web-media/c1/6e/3f/b8/78f7ad395a972ba6eac89254f8163eb7f871c83da263d24404b7b301.jpg"
                                alt="banner" class="image-banner img-responsive center-block" width="100%"
                                height="100%">
                        </a>
                    </div>
                    <div class="owl-item">
                        <a href="">
                            <img src="https://statics.pancake.vn/web-media/c1/6e/3f/b8/78f7ad395a972ba6eac89254f8163eb7f871c83da263d24404b7b301.jpg"
                                alt="banner" class="image-banner img-responsive center-block" width="100%"
                                height="100%">
                        </a>
                    </div>
                    <div class="owl-item">
                        <a href="">
                            <img src="https://statics.pancake.vn/web-media/c1/6e/3f/b8/78f7ad395a972ba6eac89254f8163eb7f871c83da263d24404b7b301.jpg"
                                alt="banner" class="image-banner img-responsive center-block" width="100%"
                                height="100%">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="main mt-6 ">
        <div class="wrapper z-30">
            <div class="container justify-center mx-auto">


                <!-- Start featured collection -->
                <section class="featured-collections">
                    <div class="container">
                        <div class="font-barlow font-bold text-colorText text-center text-2xl uppercase">
                            Danh mục nổi bật
                        </div>
                        <div class="custom-cart-feature">
                            <div class="feature-category group">
                                <div class="product">
                                    <div class="product-image">
                                        <a class="product-image-img"
                                            href="{{ route('categories.show', ['category' => 'so-mi']) }}">
                                            <img src="https://statics.pancake.vn/web-media/ff/69/57/7b/807ff961cbc747d66525c56387f307f114431cd8e733f30f5e2a7de7.jpg"
                                                data-lazyload="https://statics.pancake.vn/web-media/ff/69/57/7b/807ff961cbc747d66525c56387f307f114431cd8e733f30f5e2a7de7.jpg"
                                                class="">
                                            {{-- <img src="https://statics.pancake.vn/web-media/ff/69/57/7b/807ff961cbc747d66525c56387f307f114431cd8e733f30f5e2a7de7.jpg"
                                                    data-lazyload="https://statics.pancake.vn/web-media/ff/69/57/7b/807ff961cbc747d66525c56387f307f114431cd8e733f30f5e2a7de7.jpg"
                                                    class="lazy img-responsive center-block img-second"> --}}
                                        </a>
                                        <div class="img-wrapper">
                                            <a href="" class="hover-img">
                                                <span>Xem Ngay</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-name">
                                            <a href="{{ route('categories.show', ['category' => 'so-mi']) }}"
                                                class="font-bold">Sơ
                                                mi</a>
                                        </div>
                                        <div class="product-name">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="feature-category group">
                                <div class="product">
                                    <div class="product-image">
                                        <a class="product-image-img" href="{{ route('categories.show') }}">
                                            <img src="https://statics.pancake.vn/web-media/57/13/69/02/d3caf34bfb778fec405c39e4a883588589acc3bf8769d0d30caedd58.jpg"
                                                data-lazyload="https://statics.pancake.vn/web-media/57/13/69/02/d3caf34bfb778fec405c39e4a883588589acc3bf8769d0d30caedd58.jpg"
                                                class="">
                                            {{-- <img src="https://statics.pancake.vn/web-media/57/13/69/02/d3caf34bfb778fec405c39e4a883588589acc3bf8769d0d30caedd58.jpg"
                                                    data-lazyload="https://statics.pancake.vn/web-media/57/13/69/02/d3caf34bfb778fec405c39e4a883588589acc3bf8769d0d30caedd58.jpg"
                                                    class="lazy img-responsive center-block img-second"> --}}
                                        </a>
                                        <div class="img-wrapper">
                                            <a href="" class="hover-img">
                                                <span>Xem Ngay</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-name">
                                            <a href="" class="font-bold">Áo polo</a>
                                        </div>
                                        <div class="product-name">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="feature-category group">
                                <div class="product">
                                    <div class="product-image">
                                        <a class="product-image-img" href="/categories/ao-phong">
                                            <img src="https://statics.pancake.vn/web-media/f1/90/b4/be/41cf0d74d4fd665f7b822f9b9fdf08736844945aab4211b005c47c3a.jpg"
                                                data-lazyload="https://statics.pancake.vn/web-media/f1/90/b4/be/41cf0d74d4fd665f7b822f9b9fdf08736844945aab4211b005c47c3a.jpg"
                                                class="">
                                            {{-- <img src="https://statics.pancake.vn/web-media/f1/90/b4/be/41cf0d74d4fd665f7b822f9b9fdf08736844945aab4211b005c47c3a.jpg"
                                                    data-lazyload="https://statics.pancake.vn/web-media/f1/90/b4/be/41cf0d74d4fd665f7b822f9b9fdf08736844945aab4211b005c47c3a.jpg"
                                                    class="lazy img-responsive center-block img-second"> --}}
                                        </a>
                                        <div class="img-wrapper">
                                            <a href="/categories/ao-phong" class="hover-img">
                                                <span>Xem Ngay</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-name">
                                            <a href="/categories/ao-phong" class="font-bold">Áo phông</a>
                                        </div>
                                        <div class="product-name">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="feature-category group">
                                <div class="product">
                                    <div class="product-image">
                                        <a class="product-image-img" href="/categories/quan">
                                            <img src="https://statics.pancake.vn/web-media/2d/15/fa/ba/eced24d90f3f96cb7482692c6426f37adda8cc4c94fd39a681ab2ef9.jpg"
                                                data-lazyload="https://statics.pancake.vn/web-media/2d/15/fa/ba/eced24d90f3f96cb7482692c6426f37adda8cc4c94fd39a681ab2ef9.jpg"
                                                class="">
                                            {{-- <img src="https://statics.pancake.vn/web-media/2d/15/fa/ba/eced24d90f3f96cb7482692c6426f37adda8cc4c94fd39a681ab2ef9.jpg"
                                                    data-lazyload="https://statics.pancake.vn/web-media/2d/15/fa/ba/eced24d90f3f96cb7482692c6426f37adda8cc4c94fd39a681ab2ef9.jpg"
                                                    class="lazy img-responsive center-block img-second"> --}}
                                        </a>
                                        <div class="img-wrapper">
                                            <a href="/categories/quan" class="hover-img">
                                                <span>Xem Ngay</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-name">
                                            <a href="/categories/quan" class="font-bold">Quần</a>
                                        </div>
                                        <div class="product-name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="feature-category group">
                                <div class="product">
                                    <div class="product-image">
                                        <a class="product-image-img" href="/categories/ao-khoac">
                                            <img src="https://statics.pancake.vn/web-media/73/36/74/6f/8679395c8185239968808f0e5cbb214cba7af916a839c462ec10db17.jpg"
                                                data-lazyload="https://statics.pancake.vn/web-media/73/36/74/6f/8679395c8185239968808f0e5cbb214cba7af916a839c462ec10db17.jpg"
                                                class="">
                                            {{-- <img src="https://statics.pancake.vn/web-media/73/36/74/6f/8679395c8185239968808f0e5cbb214cba7af916a839c462ec10db17.jpg"
                                                    data-lazyload="https://statics.pancake.vn/web-media/73/36/74/6f/8679395c8185239968808f0e5cbb214cba7af916a839c462ec10db17.jpg"
                                                    class="lazy img-responsive center-block img-second"> --}}
                                        </a>
                                        <div class="img-wrapper">
                                            <a href="/categories/ao-khoac" class="hover-img">
                                                <span>Xem Ngay</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-name">
                                            <a href="/categories/ao-khoac" class="font-bold">Áo khoác</a>
                                        </div>
                                        <div class="product-name">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="feature-category group">
                                <div class="product ">
                                    <div class="product-image">
                                        <a class="product-image-img" href="/categories/giay-andamp-dep">
                                            <img src="https://statics.pancake.vn/web-media/b0/ba/a2/a6/7bef877512e4c01bc4a99f978dcc44a879cc094f089222542d06f9bb.jpg"
                                                data-lazyload="https://statics.pancake.vn/web-media/b0/ba/a2/a6/7bef877512e4c01bc4a99f978dcc44a879cc094f089222542d06f9bb.jpg"
                                                class="">
                                            {{-- <img src="https://statics.pancake.vn/web-media/b0/ba/a2/a6/7bef877512e4c01bc4a99f978dcc44a879cc094f089222542d06f9bb.jpg"
                                                    data-lazyload="https://statics.pancake.vn/web-media/b0/ba/a2/a6/7bef877512e4c01bc4a99f978dcc44a879cc094f089222542d06f9bb.jpg"
                                                    class="lazy img-responsive center-block img-second"> --}}
                                        </a>
                                        <div class="img-wrapper">
                                            <a href="/categories/giay-andamp-dep" class="hover-img">
                                                <span>Xem Ngay</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-name">
                                            <a href="/categories/giay-andamp-dep" class="font-bold">Giày &amp;
                                                Dép</a>
                                        </div>
                                        <div class="product-name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End featured collection -->




                <!-- HTML cấu trúc -->
                <section class="collection mt-12">
                    <div class="container">
                        <div class="collection-title">
                            <a class="dash-collection" href="/san-pham-moi">
                                <span>Sản phẩm mới</span>
                            </a>
                            <div class="line-text"></div>
                        </div>
                        <div id="new-products-carousel"
                            class="owl-hot owl-carousel products owl-loaded owl-drag mt-10">
                            <div class="owl-stage-outer">
                                <div class="owl-stage flex">

                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev disabled"><span
                                        aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next disabled"><span
                                        aria-label="Next">›</span></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </section>

                <section class="collection mt-10">
                    <div class="container">
                        <div class="collection-title">
                            <a class="dash-collection" href="/hot-sale">Hot sale</a>
                            <div class="line-text"></div>
                        </div>
                        <div id="hot-sale-carousel" class="owl-hot owl-carousel products owl-loaded owl-drag mt-10">
                            <div class="owl-stage-outer">
                                <div class="owl-stage flex">

                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev disabled"><span
                                        aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next disabled"><span
                                        aria-label="Next">›</span></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </section>

                <style>

                </style>

                <script>
                    document.addEventListener('DOMContentLoaded', async function() {
                        // Khởi tạo Owl Carousel cho các carousel khác nhau
                        function initializeCarousel(selector, itemsCount) {
                            $(selector).owlCarousel({
                                loop: false, // Thay đổi tùy chọn loop nếu cần
                                margin: 10, // Loại bỏ khoảng cách giữa các ảnh
                                nav: false,
                                dots: false,
                                items: 1, // Số lượng phần tử hiển thị trong một lần cuộn
                                autoplay: true,
                                autoplayTimeout: 5000,
                                autoplayHoverPause: true,
                                navText: ["‹", "›"],
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    600: {
                                        items: 1
                                    },
                                    1000: {
                                        items: 2
                                    }
                                }
                            });
                        }

                        initializeCarousel('#new-products-carousel', 5);
                        initializeCarousel('#hot-sale-carousel', 5);

                        // Lấy dữ liệu sản phẩm từ API
                        async function fetchProducts() {
                            try {
                                let response = await fetch('http://127.0.0.1:8000/api/products');
                                let data = await response.json();
                                return data.products;
                            } catch (error) {
                                console.error('Error fetching products:', error);
                                return [];
                            }
                        }

                        const products = await fetchProducts();

                        if (products.length > 0) {
                            function generateCarouselHtml(products) {
                                return products.map(product => {
                                    const images = JSON.parse(product.images);
                                    const imageUrls = images.map(img =>
                                        `http://127.0.0.1:8000/storage/${img.replace('public/', '')}`);

                                    return `
                                        <div class="owl-item w-full">
                                            <div class="product group">
                                                <div class="product-image">
                                                    <a class="product-image-img" href="/products/${product.slug}">
                                                        <img data-lazyload="${imageUrls[0]}" class="lazy img-responsive center-block img-first" src="${imageUrls[0]}">
                                                        ${imageUrls[1] ? `<img data-lazyload="${imageUrls[1]}" class="lazy img-responsive center-block img-second" src="${imageUrls[1]}">` : ''}
                                                    </a>
                                                    <div class="img-wrapper">
                                                        <a href="/products/${product.slug}" class="hover-img">
                                                            <span class="color-unset">Xem Ngay</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-name"><a href="/products/${product.slug}">${product.name}</a></div>
                                                    <div class="price-sale-sale">
                                                        <div class="product-sale-original-price">${product.cost_origin}đ</div>
                                                        <div class="product-sale-price">${product.price}đ</div>
                                                    </div>
                                                </div>
                                                <span class="ribbon tag-sale">${product.sale}%</span>
                                            </div>
                                        </div>
                                    `;
                                }).join('');
                            }

                            const newProductsHtml = generateCarouselHtml(products);
                            $('#new-products-carousel .owl-stage').html(newProductsHtml);
                            $('#new-products-carousel').trigger('refresh.owl.carousel');

                            const hotSaleHtml = generateCarouselHtml(products);
                            $('#hot-sale-carousel .owl-stage').html(hotSaleHtml);
                            $('#hot-sale-carousel').trigger('refresh.owl.carousel');
                        }
                    });
                </script>





                <section class="collection pt-10 pb-10" id="seen-wrapper">
                    <div class="container ">
                        <div class="collection-title ">
                            <a class="dash-collection "><span class="color-unset">Sản
                                    phẩm đã xem</span></a>
                            <div class="line-text ">
                            </div>

                        </div>
                        <div class="owl-seen owl-carousel products" id="seen-products">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item">
                                        <div class="product">
                                            <div class="product-image">
                                                <a class="product-image-img" href="/products/hoa-tiet-dua-cay">
                                                    <img data-lazyload="https://statics.pancake.vn/web-media/ce/d9/9f/3f/b512bffad256cf7dd53a26d39b5b2de5a3201fa3862bc03add152cff.jpg"
                                                        class="lazy img-responsive center-block img-first"
                                                        src="https://statics.pancake.vn/web-media/ce/d9/9f/3f/b512bffad256cf7dd53a26d39b5b2de5a3201fa3862bc03add152cff.jpg">
                                                    <img data-lazyload="https://statics.pancake.vn/web-media/f1/e7/db/49/0f95c2640f1af79d85fb2e0b0633ac1d08354e6573834b4f1591f8e6.jpg"
                                                        class="lazy img-responsive center-block img-second"
                                                        src="https://statics.pancake.vn/web-media/f1/e7/db/49/0f95c2640f1af79d85fb2e0b0633ac1d08354e6573834b4f1591f8e6.jpg">
                                                </a>
                                                <div class="img-wrapper">
                                                    <a href="/products/hoa-tiet-dua-cay" class="hover-img">
                                                        <span>Xem Ngay</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-name"><a href="/products/hoa-tiet-dua-cay">Họa
                                                        tiết dừa cây</a></div>
                                                <div class="price-sale-sale">
                                                    <div class="product-sale-original-price">350.000đ</div>
                                                    <div class="product-sale-price">250.000đ</div>
                                                </div>
                                            </div>
                                            <span class="ribbon tag-sale">-29%</span>
                                        </div>
                                    </div>


                                    <div class="owl-item">
                                        <div class="product">
                                            <div class="product-image">
                                                <a class="product-image-img" href="/products/ao-polo-len-tron">
                                                    <img data-lazyload="https://statics.pancake.vn/web-media/cd/9c/87/1c/859e82e0ba6fef503eec6823b6373e91e2694bed8287029276f1f257.jpg"
                                                        class="lazy img-responsive center-block img-first"
                                                        src="https://statics.pancake.vn/web-media/cd/9c/87/1c/859e82e0ba6fef503eec6823b6373e91e2694bed8287029276f1f257.jpg">
                                                    <img data-lazyload="https://statics.pancake.vn/web-media/0e/35/f6/e8/455f76fbe86df00caa5dbc26fa09c776f6e1414c8c79dbd3697b6d10.jpg"
                                                        class="lazy img-responsive center-block img-second"
                                                        src="https://statics.pancake.vn/web-media/0e/35/f6/e8/455f76fbe86df00caa5dbc26fa09c776f6e1414c8c79dbd3697b6d10.jpg">
                                                </a>
                                                <div class="img-wrapper">
                                                    <a href="/products/ao-polo-len-tron" class="hover-img">
                                                        <span>Xem Ngay</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-name"><a href="">Áo polo
                                                        len trơn</a></div>
                                                <div class="price-sale-sale">
                                                    <div class="product-sale-original-price">350.000đ</div>
                                                    <div class="product-sale-price">299.000đ</div>
                                                </div>
                                            </div>
                                            <span class="ribbon tag-sale">-15%</span>
                                        </div>
                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            </section>


        </div>
    </div>
    </div>


    <script>
        $(document).ready(function() {
            $('.owl-banner').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                items: 1, // Số lượng phần tử hiển thị trong một lần cuộn
                autoplay: true, // Tự động cuộn
                autoplayTimeout: 3000, // Thời gian chờ giữa các lần cuộn (ms)
                autoplayHoverPause: true, // Tạm dừng khi di chuột qua
                navText: ["‹", "›"], // Nội dung của các nút "Previous" và "Next"
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.owl-hot').owlCarousel({
                loop: false,
                margin: 10,
                nav: false,
                dots: false,
                items: 1, // Số lượng phần tử hiển thị trong một lần cuộn
                autoplay: true, // Tự động cuộn
                autoplayTimeout: 5000, // Thời gian chờ giữa các lần cuộn (ms)
                autoplayHoverPause: true, // Tạm dừng khi di chuột qua
                navText: ["‹", "›"], // Nội dung của các nút "Previous" và "Next"
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>
</x-layout>
