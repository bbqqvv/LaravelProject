document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
    if(!button.classList.contains('loading')) {

        button.classList.add('loading');

        setTimeout(() => button.classList.remove('loading'), 3700);

    }
    e.preventDefault();
}));


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
