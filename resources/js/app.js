import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    // Function to update the total price
    function updateTotal() {
        const subtotalText = document.getElementById('subtotal').innerText;

        // Parse subtotal
        const subtotal = parseFloat(subtotalText.replace('€', '').replace(/\./g, '').replace(',', '.'));

        if (isNaN(subtotal)) {
            console.error('Subtotal parsing error: ' + subtotalText);
            return;
        }

        // Get the selected shipping value
        const shippingOption = document.querySelector('input[name="delivery_options"]:checked');
        let shipping = 0; // Default to 0 if no option is selected
        if (shippingOption) {
            switch (shippingOption.value) {
                case 'DHL':
                    shipping = 9.00;
                    break;
                case 'UPS':
                    shipping = 8.00;
                    break;
                case 'HOMERR':
                    shipping = 7.00;
                    break;
                case 'Afhalen':
                    shipping = 0;
                    break;
                default:
                    console.error('Invalid shipping option selected');
            }
        } else {
            console.error('No shipping option selected');
        }

        // Calculate the total
        const total = subtotal + shipping;

        // Update the total price in the UI
        document.getElementById('total').innerText = '€' + total.toFixed(2).replace('.', ',');

        // Update the hidden shipping cost input
        document.getElementById('shipping_cost').value = shipping; // Update the hidden shipping cost
    }

    // Attach event listeners to all delivery option radio buttons
    const shippingOptions = document.querySelectorAll('input[name="delivery_options"]');
    shippingOptions.forEach(option => {
        option.addEventListener('change', function() {
            updateTotal(); // Update total on change
        });
    });

    // Initial total update to set correct values on page load
    updateTotal();
});



