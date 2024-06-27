<div>
    <!-- Offcanvas para el carrito -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas" aria-labelledby="cartOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="cartOffcanvasLabel">Carrito de Compras</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @if(count($cartItems) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio Unitario</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $product)
                            <tr>
                                <td>{{ $product['name'] }}</td>
                                <td>${{ $product['price'] }}</td>
                                <td>
                                    <button wire:click="decrementQuantity('{{ $product['rowId'] }}')" class="btn btn-sm btn-secondary">-</button>
                                    {{ $product['qty'] }}
                                    <button wire:click="incrementQuantity('{{ $product['rowId'] }}')" class="btn btn-sm btn-primary">+</button>
                                </td>
                                <td>${{ $product['total'] }}</td>
                                <td><button wire:click="removeFromCart('{{ $product['rowId'] }}')" class="btn btn-sm btn-danger">Eliminar</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">Total:</td>
                            <td>${{ $total }}</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            @else
                <p>No hay productos en el carrito.</p>
            @endif
        </div>
    </div>
</div>