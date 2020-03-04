<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            @if($product->isNew())
                <span class="badge badge-success">Новинка</span>
            @endif
            @if($product->isHit())
                <span class="badge badge-warning">Хит продаж!</span>
            @endif
            @if($product->isRecommend())
                <span class="badge badge-danger">Рекомендуем</span>
            @endif
        </div>
        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} руб.</p>
            <div class="two_buttons">
                <form action="{{ route('basket-add', $product->id) }}" method="POST">
                    @csrf
                    @if($product->isAvailable())
                        <button type="submit" class="btn btn-info" role="button">В корзину</button>
                    @else
                        <button disabled class="btn btn-secondary" role="button">Нет в наличии</button>
                    @endif
                </form>
                <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}"
                   class="btn btn-default" role="button">Подробнее</a>
            </div>
        </div>
    </div>
</div>
