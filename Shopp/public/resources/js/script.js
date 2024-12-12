

// Global variables to track cart state
let cartItems = [];
let currentImage = 'black3-png'; // Default image

// Function to handle quantity changes
function initializeQuantitySelectors() {
    const quantitySelectors = document.querySelectorAll('.quantity-selector');
    quantitySelectors.forEach(selector => {
        const input = selector.querySelector('input');
        const minusBtn = selector.querySelector('.quantity-btn:first-child');
        const plusBtn = selector.querySelector('.quantity-btn:last-child');

        minusBtn.addEventListener('click', () => {
            const currentValue = parseInt(input.value);
            if (currentValue > 1) {
                input.value = currentValue - 1;
            }
        });

        plusBtn.addEventListener('click', () => {
            input.value = parseInt(input.value) + 1;
        });
    });
}

// Function to update cart image
function updateCartImage(hasItems) {
    const blackImage = document.querySelector('.black3-image');
    const blueImage = document.querySelector('.blue3-image');

    if (hasItems) {
        blackImage.style.opacity = '0';
        blueImage.style.opacity = '1';
    } else {
        blackImage.style.opacity = '1';
        blueImage.style.opacity = '0';
    }
}

// Function to show notification
function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.textContent = message;
    document.body.appendChild(notification);

    // Style the notification
    notification.style.position = 'fixed';
    notification.style.top = '20px';
    notification.style.right = '20px';
    notification.style.backgroundColor = '#4CAF50';
    notification.style.color = 'white';
    notification.style.padding = '15px';
    notification.style.borderRadius = '4px';
    notification.style.zIndex = '1000';

    // Remove notification after 3 seconds
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Function to add items to cart
function addToCart(title, price, quantity = 1) {
    const item = {
        title,
        price,
        quantity
    };

    // Check if item already exists in cart
    const existingItemIndex = cartItems.findIndex(cartItem => cartItem.title === title);

    if (existingItemIndex !== -1) {
        cartItems[existingItemIndex].quantity += quantity;
    } else {
        cartItems.push(item);
    }

    // Update cart icon
    updateCartImage(true);

    // Show notification
    showNotification(`Added ${title} to cart`);

    // Store cart items in localStorage
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize quantity selectors
    initializeQuantitySelectors();

    // Load cart items from localStorage
    const savedCartItems = localStorage.getItem('cartItems');
    if (savedCartItems) {
        cartItems = JSON.parse(savedCartItems);
        updateCartImage(cartItems.length > 0);
    }

    // Add click handlers for Add to Cart buttons
    const addCartButtons = document.querySelectorAll('.add-cart');
    addCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const priceOption = button.closest('.price-option');
            const title = priceOption.querySelector('h3').textContent;
            const priceText = priceOption.querySelector('.price-tag').textContent;
            const price = priceText === 'FREE' ? 0 : parseInt(priceText.replace('Rp ', '').replace(',', ''));

            // Get quantity if it exists
            const quantityInput = priceOption.querySelector('.quantity-selector input');
            const quantity = quantityInput ? parseInt(quantityInput.value) : 1;

            addToCart(title, price, quantity);
        });
    });

    // Profile page redirect functionality
    const profileImages = document.querySelectorAll('.black2-image, .blue2-image');
    profileImages.forEach(img => {
        img.addEventListener('click', () => {
            window.location.href = 'profile';
        });
    });

    // Login message display
    function displayLoginMessage() {
        const isLoggedIn = localStorage.getItem('isLoggedIn');
        const userName = localStorage.getItem('userName');
        const loginMessage = document.getElementById('loginMessage');

        if (isLoggedIn === 'true' && loginMessage) {
            loginMessage.textContent = 'Logged in as ' + userName;
        } else if (loginMessage) {
            loginMessage.textContent = '';
        }
    }

    // Add login message display to profile images
    profileImages.forEach(img => {
        img.addEventListener('click', displayLoginMessage);
    });
});
