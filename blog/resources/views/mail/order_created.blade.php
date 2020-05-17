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
    @foreach($order->skus as $sku)
        <tr>
            <td>
                <img height="56px" src="{{ Storage::url($sku->product->image) }}">
                {{ $sku->product->__('name') }}
            </td>
            <td><span class="badge">{{$sku->countInOrder}}</span></td>
            <td>{{ $sku->price }} руб.</td>
            <td>{{ $sku->getPriceForCount() }} руб.</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="3">Общая стоимость:</td>
        <td>{{ $order->getFullPrice() }} руб.</td>
    </tr>
    </tbody>
</table>
