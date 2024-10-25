<?php

use Darryldecode\Cart\Facades\CartFacade as Cart;

?>
<x-layout>
    <div class="cart-container">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h1>Winkelwagentje</h1>



        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if($cartitems->isEmpty())
            <p class="text_empty_cart">Jouw winkelwagentje is leeg</p>
        @else
                <!-- Cart update form -->
                <form action="cart_update" method="POST">
                    @csrf
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Verwijder</th>
                                <th>Product</th>
                                <th>Prijs</th>
                                <th>Aantal</th>
                                <th>Subtotaal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartitems as $item)
                                <tr>
                                    <td>
                                        <button class="shoppingcard_delete_btn" type="submit" name="action" value="delete">
                                            <img src="{{ Vite::asset('resources/assets/trash3.svg') }}" alt="Delete button"><br>
                                        </button>
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>€{{ number_format($item->price, 2, ',', '.') }}</td>
                                    <td>
                                        <input type="hidden" name="product_id[]" value="{{ $item->id }}">
                                        <input type="number" name="quantity[]" value="{{ $item->quantity }}" min="1"
                                            style="width: 60px;">
                                    </td>
                                    <td>€{{ number_format($item->quantity * $item->price, 2, ',', '.') }}</td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <button type="submit" class="update-cart-btn">Winkelwagentje updaten</button>
                </form>

                <!-- Create Order Form -->
                <form action="Create_order" method="POST">
                    @csrf
                    <div class="cart-totals">
                        <h2>Totaal van het winkelwagentje</h2>

                        <div class="totals-item">
                            <span>Subtotaal</span>
                            <span id="subtotal">€{{ number_format(Cart::getSubTotal(), 2, ',', '.') }}</span>
                        </div>

                        <div class="totals-item">
                            <span>Verzending</span>
                            <div>
                                <input type="radio" name="delivery_options" value="DHL" id="dhl" required>
                                <label for="dhl">DHL Vast tarief: €9.00</label><br>

                                <input type="radio" name="delivery_options" value="UPS" id="ups" required>
                                <label for="ups">UPS Vast tarief: €8.00</label><br>

                                <input type="radio" name="delivery_options" value="HOMERR" id="homerr" required>
                                <label for="homerr">HOMERR Vast tarief: €7.00</label><br>

                                <input type="radio" name="delivery_options" value="Afhalen" id="afhalen" required>
                                <label for="afhalen">Afhalen bij winkel Zuidbaan 514, 2841MD Moordrecht</label><br>
                            </div>
                        </div>

                        <div class="totals-item">
                            <span>Totaal</span>
                            <input type="hidden" name="total" value="{{ Cart::getTotal() }}">
                            <input type="hidden" name="shipping_cost" id="shipping_cost" value="0">
                            <!-- Hidden input for shipping cost -->
                            <span id="total">€{{ number_format(Cart::getTotal(), 2, ',', '.') }}</span>
                        </div>

                        <!-- Include user_id as a hidden input -->
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                        <!-- Include all product IDs in the order form -->
                        @foreach($cartitems as $item)
                            <input type="hidden" name="product_id[]" value="{{ $item->id }}">
                            <input type="hidden" name="quantity[]" value="{{ $item->quantity }}">
                        @endforeach
                    </div>

                    <input class="checkout-btn" type="submit" value="Doorgaan naar afrekenen">
                </form>
            </div>
        @endif

    @vite(['resources/js/app.js'])

    <!-- Footer outside of the forms -->
    <footer>
        <p>© 2024 Jouw Bedrijf. Alle rechten voorbehouden.</p>
    </footer>
    </div>
</x-layout>