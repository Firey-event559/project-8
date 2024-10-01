<x-layout>

    <div class="cart-container">
        <h1>Winkelwagentje</h1>

        @if($cartitems->isEmpty())
            <p>Your cart is empty!</p>
        @else
            <table class="cart-table">
                <thead>
                    <tr>
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
                                {{ $item->name }}
                            </td>
                            <td>€{{ number_format($item->price, 2, ',', '.') }}</td>
                            <td>
                                <input type="number" value="{{ $item->quantity }}" min="1">
                            </td>
                            <td>€{{ number_format($item->quantity * $item->price, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button class="update-cart-btn">Update winkelwagen</button>

            <div class="coupon-section">
                <input type="text" placeholder="Waarde bon code">
                <button class="apply-coupon-btn">Waarde bon toepassen</button>
            </div>

            <div class="cart-totals">
                <h2>Totalen winkelwagen</h2>
                <div class="totals-item">
                    <span>Subtotaal</span>
                    <span>€{{ number_format(Cart::getSubTotal(), 2, ',', '.') }}</span>
                </div>
                <div class="totals-item">
                    <span>Verzending</span>
                    <div>
                        <input type="radio" name="shipping" value="6.50" checked> Vast tarief: €6,50<br>
                        <input type="radio" name="shipping" value="0"> Afhalen in Hofkwartier 30A, 2200 Herentals
                        <a href="#">Bereken verzendkosten</a>
                    </div>
                </div>
                <div class="totals-item">
                    <span>Totaal</span>
                    <span>€{{ number_format(Cart::getTotal(), 2, ',', '.') }}</span>
                </div>
            </div>

            <button class="checkout-btn">Doorgaan naar afrekenen</button>
        @endif
    </div>
</body>
</html>



</x-layout>