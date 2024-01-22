document.addEventListener("DOMContentLoaded", function () {
    // Fetch products from the server
    fetchProducts();

    // Initialize the cart
    initializeCart();
});

function fetchProducts() {
    // Simulated product data (replace this with data from your server)
    const products = [
        { id: 1, name: 'Product 1', price: 20 },
        { id: 2, name: 'Product 2', price: 30 },
        { id: 3, name: 'Product 3', price: 15 },
        { id: 4, name: 'Product 3', price: 19 },
    ];

    // Display products on the page
    const productList = document.getElementById("product-list");
    products.forEach(product => {
        const productElement = document.createElement("div");
        productElement.classList.add("product");
        productElement.innerHTML = `
            <p>${product.name} - $${product.price}</p>
            <button onclick="addToCart(${product.id})">Add to Cart</button>
        `;
        productList.appendChild(productElement);
    });
}

function initializeCart() {
    // Check if the cart exists in localStorage, create it if not
    if (!localStorage.getItem("cart")) {
        localStorage.setItem("cart", JSON.stringify([]));
    }

    // Display cart items on the page
    updateCart();
}

function addToCart(productId) {
    // Add the product to the cart in localStorage
    const cart = JSON.parse(localStorage.getItem("cart"));
    cart.push(productId);
    localStorage.setItem("cart", JSON.stringify(cart));

    // Update the displayed cart items
    updateCart();
}

function updateCart() {
    const cartItems = document.getElementById("cart-items");
    const cart = JSON.parse(localStorage.getItem("cart"));

    // Clear existing cart items
    cartItems.innerHTML = "";

    // Display the updated cart items
    cart.forEach(productId => {
        const cartItem = document.createElement("p");
        cartItem.textContent = `Product ${productId}`;
        cartItems.appendChild(cartItem);
    });
}

function checkout() {
    // Simulated checkout process
    alert("Checkout successful!");
    // You may want to implement a server-side checkout process here
    // and clear the cart after successful checkout
    localStorage.setItem("cart", JSON.stringify([]));
    updateCart();
}
