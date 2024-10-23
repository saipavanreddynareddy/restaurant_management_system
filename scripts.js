// Cart functionality
let cart = [];
let total = 0;

function addToCart(name, price) {
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalContainer = document.getElementById('cart-total');

    cart.push({ name, price });
    total += price;

    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');
    cartItem.textContent = `${name} - $${price.toFixed(2)}`;

    cartItemsContainer.appendChild(cartItem);
    cartTotalContainer.innerText = total.toFixed(2);

    // Store cart data in localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
    localStorage.setItem('total', total.toFixed(2));
}

// Event listeners for "Add to Cart" buttons
document.querySelectorAll('.cart-btn').forEach(button => {
    button.addEventListener('click', (event) => {
        const name = event.target.dataset.name;
        const price = parseFloat(event.target.dataset.price);
        addToCart(name, price);
    });
});






// Load cart data from localStorage
document.addEventListener('DOMContentLoaded', () => {
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalContainer = document.getElementById('cart-total');

    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        total = parseFloat(localStorage.getItem('total'));

        cart.forEach(item => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;
            cartItemsContainer.appendChild(cartItem);
        });

        cartTotalContainer.innerText = total.toFixed(2);
    }
});

// Form submission handling
document.getElementById('cart-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const address = document.getElementById('address').value;
    const contact = document.getElementById('contact').value;
    const payment = document.getElementById('payment').value;

    const cartDataInput = document.getElementById('cart-data');
    cartDataInput.value = JSON.stringify(cart);

    alert(`Order placed!\n\nName: ${name}\nAddress: ${address}\nContact: ${contact}\nPayment Method: ${payment}\nTotal: $${total.toFixed(2)}`);

    // Here, you can submit the form or redirect the user to a confirmation page
    document.getElementById('cart-form').submit();
});

