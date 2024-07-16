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
            <span>Thêm vào giỏ</span>
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

                    <div class="cd-cart__footer flex justify-between mt-4 absolute bottom-0 right-0 w-full">
                        <div class="bg-red-600 w-5/6">
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
                        <div class="close-cart-btn w-1/6 bg-white">
                            <span>
                                <i class="fa-solid fa-xmark text-[4rem]"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Cart Flash -->
            <div class="cart-flash  float-end sticky" id="cartFlash">
                <a href="#0" class="cd-cart__trigger text-replace flex" id="cartTrigger">
                    <img class="w-28 " src="https://www.svgrepo.com/show/419033/cart-trolley-shop.svg"
                        alt="Cart Flash">
                    <ul
                        class="cd-cart__count absolute ml-[4.5rem] mt-7 bg-red-600 rounded-2xl w-6 text-colorbg font-bold">
                        <li id="cartCount">0</li>
                    </ul>
                </a>
            </div>
        </div>
    </div>
    <!-- Script to handle opening and closing cart -->
    <script>
        //cập nhật giá trị cartCount
        document.getElementById('openCartButton').addEventListener('click', function() {
            var cartCountElement = document.getElementById('cartCount');
            var currentCount = parseInt(cartCountElement.textContent, 10);
            cartCountElement.textContent = currentCount + 1;

            var cartFlash = document.getElementById('cartFlash');
            if (cartFlash.classList.contains('hidden')) {
                cartFlash.classList.remove('hidden');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const openCartButton = document.getElementById('openCartButton');
            const cartOverlay = document.getElementById('cartOverlay');
            const closeCartButton = document.getElementById('closeCartButton');
            const cartFlash = document.getElementById('cartFlash');
            const cartCount = document.getElementById('cartCount');
            const cartTrigger = document.getElementById('cartTrigger');
            const totalPriceElem = document.getElementById('totalPrice');
            let cartItems = [];

            openCartButton.addEventListener('click', function() {
                addProductToCart('Product Name', 25.99,
                    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXB_2Y4FuljYx6k5BN1uuPaVWgw97e8Ghiow&s'
                );
                updateCartFlash();
            });

            cartTrigger.addEventListener('click', function(event) {
                event.preventDefault();
                openCart();
            });

            closeCartButton.addEventListener('click', function() {
                closeCart();
            });

            cartOverlay.addEventListener('click', function(event) {
                if (event.target === cartOverlay) {
                    closeCart();
                }
            });

            function updateCartFlash() {
                cartFlash.classList.remove('hidden');
                cartCount.textContent = cartItems.length;
            }

            function openCart() {
                cartOverlay.style.display = 'flex';
                document.body.style.overflow = 'hidden'; // Prevent scrolling background
            }

            function closeCart() {
                cartOverlay.style.display = 'none';
                document.body.style.overflow = ''; // Re-enable scrolling
            }

            function addProductToCart(name, price, image) {
                const product = {
                    name,
                    price,
                    image
                };
                cartItems.push(product);
                updateCartBody();
                updateTotalPrice();
                updateCartFlash();
            }

            function updateCartBody() {
                const cartBody = document.querySelector('.cd-cart__body');
                cartBody.innerHTML = ''; // Clear the existing content

                cartItems.forEach((item, index) => {
                    const productHTML = `
                <div class="cd-cart__product flex w-full items-center mb-4">
                    <div class="cd-cart__image mr-4">
                        <a href="#0"><img src="${item.image}" alt="${item.name}" class="w-20 h-20 object-cover"></a>
                    </div>
                    <div class="cd-cart__details w-full">
                        <div class="flex justify-between mb-2">
                            <h3 class="truncate font-bold text-colorText"><a href="#0">${item.name}</a></h3>
                            <span class="cd-cart__price">$${item.price.toFixed(2)}</span>
                        </div>
                        <div class="cd-cart__actions flex justify-between">
                            <a href="#0" class="cd-cart__delete-item text-red-500" data-index="${index}">Delete</a>
                            <div class="cd-cart__quantity flex items-center">
                                <label for="cd-product-quantity-${index}" class="mr-2">Số lượng</label>
                                <select class="select-number-product border border-gray-300 rounded-md text-sm text-center" id="cd-product-quantity-${index}" name="quantity">
                                    ${[...Array(10).keys()].map(i => `<option value="${i + 1}">${i + 1}</option>`).join('')}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            `;

                    cartBody.innerHTML += productHTML;
                });

                // Add event listeners for delete buttons
                const deleteButtons = document.querySelectorAll('.cd-cart__delete-item');
                deleteButtons.forEach(button => {
                    button.addEventListener('click', function(event) {
                        event.preventDefault();
                        const index = this.dataset.index;
                        removeProductFromCart(index);
                    });
                });
            }

            function removeProductFromCart(index) {
                cartItems.splice(index, 1);
                updateCartBody();
                updateTotalPrice();
                updateCartFlash();
            }

            function updateTotalPrice() {
                const totalPrice = cartItems.reduce((sum, item) => sum + item.price, 0);
                totalPriceElem.textContent = totalPrice.toFixed(2);
            }
        });
    </script>


</body>

</html>
