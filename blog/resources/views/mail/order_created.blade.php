<p>Уважаемый {{ $name }}!</p>

<p>Ваш заказ на сумму {{ $fullSum }} создан.</p>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Название</th>
        <th>Кол-во</th>
        <th>Цена</th>
        <th>Стоимость</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order->products as $product)
        <tr>
            <td>
                <img height="56px" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                {{ $product->name }}
            </td>
            <td><span class="badge">{{$product->countInOrder}}</span></td>
            <td>{{ $product->price }} руб.</td>
            <td>{{ $product->getPriceForCount() }} руб.</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="3">Общая стоимость:</td>
        <td>{{ $order->getFullPrice() }} руб.</td>
    </tr>
    </tbody>
</table>
