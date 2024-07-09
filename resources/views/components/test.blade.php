<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <style>
    /* Reset some default styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Roboto', Arial, sans-serif;
      background-color: #f7f7f7;
    }

    /* Cart button styles */
    .cart-btn {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      z-index: 100;
      transition: background-color 0.3s ease;
    }

    .cart-btn:hover {
      background-color: #45a049;
    }

    /* Cart container styles */
    .cart-container {
      position: fixed;
      top: 0;
      right: -400px;
      width: 400px;
      height: 100%;
      background-color: white;
      padding: 30px;
      box-sizing: border-box;
      transition: right 0.3s ease-in-out;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      z-index: 99;
    }

    .cart-container.open {
      right: 0;
    }

    .cart-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .cart-header h2 {
      font-size: 24px;
      font-weight: 700;
    }

    .cart-close-btn {
      background-color: transparent;
      border: none;
      font-size: 24px;
      cursor: pointer;
      color: #888;
      transition: color 0.3s ease;
    }

    .cart-close-btn:hover {
      color: #555;
    }

    .cart-items {
      list-style-type: none;
      padding: 0;
      margin: 0;
      max-height: calc(100% - 150px);
      overflow-y: auto;
    }

    .cart-items li {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      border-bottom: 1px solid #f0f0f0;
    }

    .cart-items li:last-child {
      border-bottom: none;
    }

    .cart-item-name {
      flex-grow: 1;
      margin-right: 10px;
      font-size: 16px;
      font-weight: 500;
    }

    .cart-item-price {
      font-size: 16px;
      font-weight: 700;
      color: #4CAF50;
    }

    .cart-item-quantity {
      display: flex;
      align-items: center;
      margin-right: 10px;
    }

    .cart-item-quantity button {
      background-color: #f0f0f0;
      border: none;
      padding: 5px 10px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .cart-item-quantity button:hover {
      background-color: #e0e0e0;
    }

    .cart-item-quantity input {
      width: 40px;
      text-align: center;
      border: none;
      font-size: 16px;
      margin: 0 5px;
    }

    .cart-item-remove {
      background-color: #f44336;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .cart-item-remove:hover {
      background-color: #e53935;
    }

    .cart-total {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
      font-size: 18px;
      font-weight: 700;
    }

    .cart-checkout-btn {
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 12px 20px;
      font-size: 16px;
      cursor: pointer;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease;
    }

    .cart-checkout-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <button class="cart-btn" id="cart-btn">Giỏ hàng</button>

  <div class="cart-container" id="cart-container">
    <div class="cart-header">
      <h2>Giỏ hàng</h2>
      <button class="cart-close-btn" id="cart-close-btn">&times;</button>
    </div>
    <ul class="cart-items" id="cart-items">
      <!-- Cart items will be added here -->
    </ul>
    <div class="cart-total">
      <span>Tổng cộng:</span>
      <span id="cart-total-amount">$0.00</span>
    </div>
    <button class="cart-checkout-btn" id="cart-checkout-btn">Thanh toán</button>
  </div>

  <script>
    const cartBtn = document.getElementById('cart-btn');
    const cartContainer = document.getElementById('cart-container');
    const cartCloseBtn = document.getElementById('cart-close-btn');
    const cartCheckoutBtn = document.getElementById('cart-checkout-btn');
    const cartTotalAmount = document.getElementById('cart-total-amount');

    let cart = [];
    let totalAmount = 0;

    cartBtn.addEventListener('click', () => {
      cartContainer.classList.add('open');
    });

    cartCloseBtn.addEventListener('click', () => {
      cartContainer.classList.remove('open');
    });

    cartCheckoutBtn.addEventListener('click', () => {
      // Add checkout functionality here
      alert('Thanh toán thành công!');
    });

    function addToCart(product) {
      const cartItems = document.getElementById('cart-items');
      const existingItem = cart.find(item => item.id === product.id);

      if (existingItem) {
        existingItem.quantity++;
      } else {
        const newItem = { ...product, quantity: 1 };
        cart.push(newItem);
      }

      updateCartUI();
    }

    function removeFromCart(productId) {
      const index = cart.findIndex(item => item.id === productId);
      if (index !== -1) {
        cart.splice(index, 1);
        updateCartUI();
      }
    }

    function updateCartQuantity(productId, quantity) {
      const item = cart.find(item => item.id === productId);
      if (item) {
        item.quantity = quantity;
        updateCartUI();
      }
    }

    function updateCartUI() {
      const cartItems = document.getElementById('cart-items');
      cartItems.innerHTML = '';

      totalAmount = 0;

      cart.forEach(item => {
        const li = document.createElement('li');
        li.innerHTML = `
          <div class="cart-item-name">${item.name}</div>
          <div class="cart-item-price">$${item.price.toFixed(2)}</div>
          <div class="cart-item-quantity">
            <button onclick="updateCartQuantity('${item.id}', ${item.quantity - 1})">-</button>
            <input type="number" value="${item.quantity}" onchange="updateCartQuantity('${item.id}', this.value)">
            <button onclick="updateCartQuantity('${item.id}', ${item.quantity + 1})">+</button>
          </div>
          <button class="cart-item-remove" onclick="removeFromCart('${item.id}')">Xóa</button>
        `;
        cartItems.appendChild(li);

        totalAmount += item.price * item.quantity;
      });

      cartTotalAmount.textContent = `$${totalAmount.toFixed(2)}`;
    }

    const products = [
      { id: '1', name: 'Sản phẩm 1', price: 10.99 },
      { id: '2', name: 'Sản phẩm 2', price: 15.99 },
      { id: '3', name: 'Sản phẩm 3', price: 8.99 }
    ];

    products.forEach(product => {
      addToCart(product);
    });
  </script>
</body>
</html>