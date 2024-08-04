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
        <div class="category">
            <!-- Start category left -->
            <div class="category-left hidden-md" id="filters">
                <div class="container pd-14">
                    <div class="options-block pdtb-12 bor-b">
                        <div class="fw-400 uppercase mgb-10">Kích cỡ</div>
                        <ul class="options row size-pancake"></ul>
                    </div>
                    <div class="options-block pdtb-12 bor-b">
                        <div class="fw-400 uppercase mgb-10">Màu sắc</div>
                        <ul class="options row color-pancake"></ul>
                    </div>

                    <div class="pancake-ui-filter">
                        <p>
                            <label for="amount">KHOẢNG GIÁ:</label>
                        </p>
                        <ul class="options row price-pancake" id="price-pc">
                            <li class="col">
                                <a href="https://roway.vn/categories/giay-andamp-dep?filter={tag:'',price:'200000-450000'}&amp;sort_by="
                                    title="200000-450000">
                                    <label>
                                        <input type="checkbox" value="Dưới 500.000đ" data-price="0-499000"
                                            class="filled-in choosePrice" onclick="handleChooseSizeColor(this)">
                                        <span>Dưới 500.000đ</span>
                                    </label>
                                </a>
                            </li>
                            <li class="col">
                                <a href="https://roway.vn/categories/giay-andamp-dep?filter={tag:'',price:'500000-1000000'}&amp;sort_by="
                                    title="500000-1000000">
                                    <label>
                                        <input type="checkbox" value="500.000 ~ 1.000.000" data-price="500000-1000000"
                                            class="filled-in choosePrice" onclick="handleChooseSizeColor(this)">
                                        <span>Từ 500.000 - 1.000.000</span>
                                    </label>
                                </a>
                            </li>
                            <li class="col">
                                <a href="https://roway.vn/categories/giay-andamp-dep?filter={tag:'',price:'1000000-1500000'}&amp;sort_by="
                                    title="1000000-1500000">
                                    <label>
                                        <input type="checkbox" value="1.000.000 ~ 1.500.000"
                                            data-price="1000000-1500000" class="filled-in choosePrice"
                                            onclick="handleChooseSizeColor(this)">
                                        <span>Từ 1.000.000 - 1.500.000</span>
                                    </label>
                                </a>
                            </li>
                            <li class="col">
                                <a href="https://roway.vn/categories/giay-andamp-dep?filter={tag:'',price:'1500000-20000000'}&amp;sort_by="
                                    title="1500000-20000000">
                                    <label>
                                        <input type="checkbox" value="Trên 1.500.000đ" data-price="1500000-20000000"
                                            class="filled-in choosePrice" onclick="handleChooseSizeColor(this)">
                                        <span>Trên 1.500.000</span>
                                    </label>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End category left -->




            <div class="category-right">

                <!--<div class="category-name">-->
                <!--  Giày &amp; Dép-->
                <!--</div>-->
                <div class="wrapper-filter-mobile">
                    <div class="filter-mobile is-flex">
                        <div class="filter-mobile-btn" id="showFilterLeft">
                            <span>Sắp xếp</span>
                        </div>
                        <div class="filter-mobile-btn" id="showFilterRight">
                            <span>Lọc</span>
                        </div>
                    </div>
                    <div class="showFilter left ftab1">
                        <div class="body">
                            <div class="title"><span class="menuClose">Hủy</span></div>
                            <div class="item">
                                <div class="itemFil price" id="sortMobile">


                                    <a href="https://roway.vn/categories/giay-andamp-dep?filter={tag:'',price:''}&amp;sort_by=priceasc"
                                        title="priceasc"><i class="fa fa-square-o"></i> Giá tăng dần</a>
                                    <a href="https://roway.vn/categories/giay-andamp-dep?filter={tag:'',price:''}&amp;sort_by=pricedesc"
                                        title="pricedesc"><i class="fa fa-square-o"></i> Giá giảm dần</a>
                                    <a href="https://roway.vn/categories/giay-andamp-dep?filter={tag:'',price:''}&amp;sort_by=nameasc"
                                        title="nameasc"><i class="fa fa-square-o"></i> Tên A-Z</a>
                                    <a href="https://roway.vn/categories/giay-andamp-dep?filter={tag:'',price:''}&amp;sort_by=namedesc"
                                        title="namedesc"><i class="fa fa-square-o"></i> Tên Z-A</a>
                                    <a href="/categories/san-pham-ban-chay" title="san-pham-ban-chay"><i
                                            class="fa fa-square-o"></i> Sản phẩm bán chạy </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="showFilter ftab2">
                        <div class="body">
                            <div class="title">
                                <span class="menuClose">Hủy</span>
                            </div>
                            <div class="item"><span>Màu sắc</span>
                                <div class="itemFil attr" id="colorMobile">

                                    <a href="https://roway.vn/categories/giay-andamp-dep" title="All-color"
                                        style="height: 20px; width: 20px; background-image: url(https://statics.pancake.vn/web-media/40/b4/a4/7b/1cf644f68371f162a13e47aeccf93cc5f38c24b743b427c044b3c3b8.jpg);background-position: center;background-size: cover;"></a>
                                </div>
                            </div>
                            <div class="item"><span>Kích cỡ</span>
                                <div class="itemFil attr" id="sizeMobile">

                                </div>
                            </div>
                            <div class="item">
                                <span>Giá</span>
                                <div class="itemFil price">
                                    <!--<div id="filterPrice" data-max="12000000" data-l="3000000" data-r="8000000"></div>-->
                                    <!--<p class="cf showPrice is-flex"><span id="showPriceLeft">200.000 VND</span><span id="showPriceRight">3.000.000 VND</span></p>-->
                                    <span id="filter-price-mobile">


                                        <a class="price-mobile" data-price="0-499000" title="200000-450000"
                                            onclick="handleFilterMobile(this)"><i class="fa fa-square-o"></i> Dưới
                                            500.000</a>
                                        <a class="price-mobile" data-price="500000-1000000" title="500000-1000000"
                                            onclick="handleFilterMobile(this)"><i class="fa fa-square-o"></i> Từ
                                            500.000 - 1.000.000</a>
                                        <a class="price-mobile" data-price="1000000-1500000" title="1000000-1500000"
                                            onclick="handleFilterMobile(this)"><i class="fa fa-square-o"></i> Từ
                                            1.000.000 - 1.500.000</a>
                                        <a class="price-mobile" data-price="1500000-20000000"
                                            title="1500000-20000000" onclick="handleFilterMobile(this)"><i
                                                class="fa fa-square-o"></i> Trên 1.500.000</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="cc is-flex">
                    <div class="filter_content_left is-flex space-x-2">
                        <label class="label-sort">SẮP XẾP THEO </label>
                        <div class="relative inline-block w-full sm:w-auto">
                            <select name="orderby"
                                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-3 py-1 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline text-sm">
                                <option value="0" selected>Mới nhất</option>
                                <option value="sort_by=pricedesc">Giá: Giảm dần</option>
                                <option value="sort_by=priceasc">Giá: Tăng dần</option>
                                <option value="sort_by=nameasc">Tên: A-Z</option>
                                <option value="sort_by=namedesc">Tên: Z-A</option>
                                <option value="/">Mới nhất</option>
                                <option value="/categories/san-pham-ban-chay">Bán chạy nhất</option>
                            </select>
                        </div>
                    </div>
                    <div class="filter_content_mid is-flex space-x-2">
                        <label class="label-show">Hiển thị: </label>
                        <span id="fourty-eight">48</span>
                        <span> | </span>
                        <span id="one-twenty">120</span>
                    </div>
                    <div class="filter_content_right is-flex space-x-2">
                        <label class="label-sort label-page">Trang: </label>
                        <div class="relative inline-block w-full sm:w-auto">
                            <select name="orderby"
                                class="count mySelect select-page block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-3 py-1 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline text-sm"
                                onchange="location = this.value;" id="paginate-top">
                                <option value="/categories/giay-andamp-dep?&amp;page=1" selected="selected">
                                    1
                                </option>

                            </select>
                        </div>
                    </div>
                </div>
                <!-- Start Category Grid -->
                <div class="category-grid ">
                    <!-- Product 1 -->

                    <div class="">
                        <div class="product">
                            <div class="product-image">
                                <a href="{{ route('product.show', ['product' => 'name']) }}">
                                    <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lo8jp8vj0n0rfa"
                                        data-lazyload="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lo8jp8vj0n0rfa"
                                        class="lozad img-responsive center-block img-first" alt="Product Image">
                                </a>
                                <div class="img-wrapper outstock">
                                    <a href="/products/giay-derby" class="hover-img">
                                        <span>Hết hàng</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content p-4">
                                <div class="product-name">
                                    <a href="/products/giay-derby">Áo Khoác Dạ</a>
                                </div>
                                <div class="price-sale-sale mt-2">
                                    <div class="product-sale-original-price">400.000đ</div>
                                    <div class="product-sale-price">290.000đ</div>
                                </div>
                                <span
                                    class="ribbon tag-sale bg-red-500 text-white px-2 py-1 rounded absolute top-0 left-0">-21%</span>
                            </div>
                        </div>
                    </div>

            
                    <div class="">
                        <div class="product">
                            <div class="product-image">
                                <a href="{{ route('product.show', ['product' => 'name']) }}">
                                    <img src="https://vn-live-01.slatic.net/p/e6fd60fab11bbc490b2b9ee3e90c6ea3.jpg"
                                        data-lazyload="https://vn-live-01.slatic.net/p/e6fd60fab11bbc490b2b9ee3e90c6ea3.jpg"
                                        class="lozad img-responsive center-block img-first" alt="Product Image">
                                </a>
                                <div class="img-wrapper outstock">
                                    <a href="/products/giay-derby" class="hover-img">
                                        <span>Hết hàng</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content p-4">
                                <div class="product-name">
                                    <a href="/products/giay-derby">Áo Khoác dạ</a>
                                </div>
                                <div class="price-sale-sale mt-2">
                                    <div class="product-sale-original-price">750.000đ</div>
                                    <div class="product-sale-price">590.000đ</div>
                                </div>
                                <span
                                    class="ribbon tag-sale bg-red-500 text-white px-2 py-1 rounded absolute top-0 left-0">-21%</span>
                            </div>
                        </div>
                    </div>

                                
                    <div class="">
                        <div class="product">
                            <div class="product-image">
                                <a href="{{ route('product.show', ['product' => 'name']) }}">
                                    <img src="https://img.lazcdn.com/g/p/15978c93f9c35fe9e7074f2858cf03d8.jpg_720x720q80.jpg"
                                        data-lazyload="https://img.lazcdn.com/g/p/15978c93f9c35fe9e7074f2858cf03d8.jpg_720x720q80.jpg"
                                        class="lozad img-responsive center-block img-first" alt="Product Image">
                                </a>
                                <div class="img-wrapper outstock">
                                    <a href="/products/giay-derby" class="hover-img">
                                        <span>Hết hàng</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content p-4">
                                <div class="product-name">
                                    <a href="/products/giay-derby">Áo Mangto</a>
                                </div>
                                <div class="price-sale-sale mt-2">
                                    <div class="product-sale-original-price">1.050.000đ</div>
                                    <div class="product-sale-price">590.000đ</div>
                                </div>
                                <span
                                    class="ribbon tag-sale bg-red-500 text-white px-2 py-1 rounded absolute top-0 left-0">-21%</span>
                            </div>
                        </div>
                    </div>

                                
                    <div class="">
                        <div class="product">
                            <div class="product-image">
                                <a href="{{ route('product.show', ['product' => 'name']) }}">
                                    <img src="https://laz-img-sg.alicdn.com/p/16f056d971a49bbf536f71c61fa792af.jpg"
                                        data-lazyload="https://laz-img-sg.alicdn.com/p/16f056d971a49bbf536f71c61fa792af.jpg"
                                        class="lozad img-responsive center-block img-first" alt="Product Image">
                                </a>
                                <div class="img-wrapper outstock">
                                    <a href="/products/giay-derby" class="hover-img">
                                        <span>Hết hàng</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content p-4">
                                <div class="product-name">
                                    <a href="/products/giay-derby">Áo sơ mi hoạc tiết đen trắng</a>
                                </div>
                                <div class="price-sale-sale mt-2">
                                    <div class="product-sale-original-price">250.000đ</div>
                                    <div class="product-sale-price">150.000đ</div>
                                </div>
                                <span
                                    class="ribbon tag-sale bg-red-500 text-white px-2 py-1 rounded absolute top-0 left-0">-21%</span>
                            </div>
                        </div>
                    </div>

                                
                    <div class="">
                        <div class="product">
                            <div class="product-image">
                                <a href="{{ route('product.show', ['product' => 'name']) }}">
                                    <img src="https://vn-test-11.slatic.net/p/e6b05b4723dbba105d5421f14f09d812.jpg"
                                        data-lazyload="https://vn-test-11.slatic.net/p/e6b05b4723dbba105d5421f14f09d812.jpg"
                                        class="lozad img-responsive center-block img-first" alt="Product Image">
                                </a>
                                <div class="img-wrapper outstock">
                                    <a href="/products/giay-derby" class="hover-img">
                                        <span>Hết hàng</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content p-4">
                                <div class="product-name">
                                    <a href="/products/giay-derby">Áo sơ mi Roway họa tiết</a>
                                </div>
                                <div class="price-sale-sale mt-2">
                                    <div class="product-sale-original-price">250.000đ</div>
                                    <div class="product-sale-price">190.000đ</div>
                                </div>
                                <span
                                    class="ribbon tag-sale bg-red-500 text-white px-2 py-1 rounded absolute top-0 left-0">-21%</span>
                            </div>
                        </div>
                    </div>

                                
                    <div class="">
                        <div class="product">
                            <div class="product-image">
                                <a href="{{ route('product.show', ['product' => 'name']) }}">
                                    <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-ls6pw0f9t4ex0e"
                                        data-lazyload="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-ls6pw0f9t4ex0e"
                                        class="lozad img-responsive center-block img-first" alt="Product Image">
                                </a>
                                <div class="img-wrapper outstock">
                                    <a href="/products/giay-derby" class="hover-img">
                                        <span>Hết hàng</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content p-4">
                                <div class="product-name">
                                    <a href="/products/giay-derby">Áo sơ mi Roway</a>
                                </div>
                                <div class="price-sale-sale mt-2">
                                    <div class="product-sale-original-price">350.000đ</div>
                                    <div class="product-sale-price">290.000đ</div>
                                </div>
                                <span
                                    class="ribbon tag-sale bg-red-500 text-white px-2 py-1 rounded absolute top-0 left-0">-21%</span>
                            </div>
                        </div>
                    </div>

                    <!-- End Category Grid -->
                    <div class="pagination" id="pagination-bottom">
                        <nav aria-label="Page navigation example" id="pagination">
                            <ul class="pagination" id="pagination-content">

                            </ul>
                        </nav>
                    </div>
                    <!-- End category right -->
                </div>
            </div>
</x-layout>
