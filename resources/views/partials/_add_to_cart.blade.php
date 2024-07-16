<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include Vite resources -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/add-to-cart.css')
    @vite('resources/js/add-to-cart.js')

</head>

<body class="h-screen flex items-center justify-center">
    <div class="container text-center">
        <button id="openCartButton" class="button">
            <span >Thêm vào giỏ</span>
            <div class="cart">
                <svg viewBox="0 0 36 26" class="w-6 h-6">
                    <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5" class="fill-none stroke-current">
                    </polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5" class="fill-none stroke-current"></polyline>
                </svg>
            </div>
        </button>
        <div class="cd-cart__content">
            <!-- Overlay and Cart Layout -->
            <div id="cartOverlay" class=" overlay sticky">
                <div class="cd-cart__layout border flex flex-col relative">
                    <header class="cd-cart__header mb-4 flex justify-between border-b-[1px]">
                        <h2 class="text-xl font-bold">Giỏ hàng</h2>
                        <span id="closeCartButton" class="cd-cart__close">Đóng</span>
                    </header>

                    <div class="overflow-y-auto max-h-[20rem] p-5">
                        <div class="cd-cart__body flex flex-col items-center w-full">
                            <!-- Product items will be dynamically added here -->
                        </div>
                    </div>

                    <div class="cd-cart__footer flex justify-between mt-4 absolute bottom-0 right-0 w-full uppercase font-semibold">
                        <div class="bg-colorBtn w-5/6  rounded-lg">
                            <a href="#0" class="cd-cart__checkout text-white py-2 px-4 rounded">
                                <em class="flex items-center justify-center">Thanh toán - $<span>77.97</span>
                                    <svg class="icon icon--sm w-6 hidden ml-2" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor">
                                            <line stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                x1="3" y1="12" x2="21" y2="12"></line>
                                            <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                points="15,6 21,12 15,18 "></polyline>
                                        </g>
                                    </svg>
                                </em>
                            </a>
                        </div>
                        <div class="close-cart-btn w-1/6 bg-white rounded-lg">
                            <span>
                                <i class="fa-solid fa-xmark text-[4rem]"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Cart Flash -->
            @include('components.cart-flash')

        </div>
    </div>



</body>

</html>
