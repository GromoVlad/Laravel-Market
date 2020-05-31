<div class="card">
    <div class="thumbnail">
        <div class="labels">
            @if($sku->product->isNew())
                <span class="badge badge-success">@lang('main.properties.new')</span>
            @endif
            @if($sku->product->isHit())
                <span class="badge badge-warning">@lang('main.properties.hit')</span>
            @endif
            @if($sku->product->isRecommend())
                <span class="badge badge-danger">@lang('main.properties.recommend')</span>
            @endif
        </div>
        <img src="{{ Storage::url($sku->product->image) }}" alt="{{ $sku->product->__('name') }}">
        <div class="caption">
            <h3>{{ $sku->product->__('name') }}</h3>
            @isset($sku->product->properties)
                @foreach($sku->propertyOptions as $propertyOption)
                    <h5>{{ $propertyOption->property->__('name') }}: {{ $propertyOption->__('name') }}</h5>
                @endforeach
            @endisset
            <h4><b>{{ number_format ($sku->price , 0 , "." , " " ) }} {{ $currencySymbol }}</b></h4>
            <h5>Количество: {{ $sku->count }}</h5>
        </div>
        <div class="two_buttons">
            <form action="{{ route('basket-add', $sku) }}" method="POST">
                @csrf
                @if($sku->isAvailable())
                    <button type="submit" class="btn btn-info" role="button">@lang('main.add_basket')</button>
                @else
                    <button disabled class="btn btn-secondary" role="button">@lang('main.not_available')</button>
                @endif
            </form>
            <a href="{{ route('sku', [isset($category) ? $category->code : $sku->product->category->code, $sku->product->code, $sku->id]) }}"
               class="btn btn-default" role="button">@lang('main.more_about')</a>
        </div>
    </div>
</div>
