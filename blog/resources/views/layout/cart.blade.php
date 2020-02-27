<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels"></div>
        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} руб.</p>
            <div class="two_buttons">
            <form action="{{ route('basket-add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-info" role="button">В корзину</button>
            </form>
            <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default" role="button">Подробнее</a>
            </div>
        </div>
    </div>
</div>
