<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            @if($product->isNew())
                <span class="badge badge-success">@lang('main.properties.new')</span>
            @endif
            @if($product->isHit())
                <span class="badge badge-warning">@lang('main.properties.hit')</span>
            @endif
            @if($product->isRecommend())
                <span class="badge badge-danger">@lang('main.properties.recommend')</span>
            @endif
        </div>
        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->__('name') }}">
        <div class="caption">
            <h3>{{ $product->__('name') }}</h3>
            <p>{{ $product->price }} {{ $currencySymbol }}</p>
            <div class="two_buttons">
                <form action="{{ route('basket-add', $product->id) }}" method="POST">
                    @csrf
                    @if($product->isAvailable())
                        <button type="submit" class="btn btn-info" role="button">@lang('main.add_basket')</button>
                    @else
                        <button disabled class="btn btn-secondary" role="button">@lang('main.not_available')</button>
                    @endif
                </form>
                <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}"
                   class="btn btn-default" role="button">@lang('main.more_about')</a>
            </div>
        </div>
    </div>
</div>
