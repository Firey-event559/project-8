<x-layout>
    <div class="cart-container">
        <h1>Winkelwagentje</h1>

        @if($cartitems->isEmpty())
            <p class="text_empty_cart">Jouw winkelwagentje is leeg</p>
        @else
            <form action="cart_update" method="POST">
                @csrf
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
                                <td>{{ $item->name }}</td>
                                <td>€{{ number_format($item->price, 2, ',', '.') }}</td>
                                <td>
                                    <input type="hidden" name="product_id[]" value="{{ $item->id }}">
                                    <input type="number" name="quantity[]" value="{{ $item->quantity }}" min="1" style="width: 60px;">
                                </td>
                                <td>€{{ number_format($item->quantity * $item->price, 2, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <button type="submit" class="update-cart-btn">Winkelwagentje updaten</button>
            </form>

            <div class="cart-totals">
                <h2>Totalen winkelwagentje</h2>

                <div class="totals-item">
                    <span>Subtotaal</span>
                    <span>€{{ number_format(Cart::getSubTotal(), 2, ',', '.') }}</span>
                </div>
                <div class="totals-item">
                    <span>Verzending</span>
                    <div>
                        <input type="radio" name="shipping" value="9.00" checked> DHL Vast tarief: €9.00<br>
                        <input type="radio" name="shipping" value="8.00"> UPS Vast tarief: €8.00<br>
                        <input type="radio" name="shipping" value="7.00"> HOMERR Vast tarief: €7.00<br>
                        <input type="radio" name="shipping" value="0"> Afhalen bij winkel Zuidbaan 514, 2841MD Moordrecht<br>
                        <a href="#">Bereken verzendkosten</a>
                    </div>
                </div>
                <div class="totals-item">
                    <span>Totaal</span>
                    <span>€{{ number_format(Cart::getTotal(), 2, ',', '.') }}</span>
                </div>
            </div>

            <div class="button-container">
                <button class="checkout-btn">Doorgaan naar afrekenen</button>
            </div>
        @endif
    </div>
</x-layout>
