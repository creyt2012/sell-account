<div class="catalog-item">
    <span class="catalog-item__thumb"> 
        <img src="{{ getImage(getFilePath('product').'/'.$product->image,getFileSize('product')) }}" alt="@lang('image')">
    </span>
    <div class="catalog-item__content">
        <h6 class="catalog-item__title">
            @php $text = $product->name.' | '.strLimit(strip_tags($product->description), 270); @endphp
            <a href="{{ route('product.details', $product->id) }}" class="catalog-item__link">
                @php echo $text;  @endphp 
            </a>
        </h6>
        <div class="catalog-item__info d-flex align-items-center">
            <p class="catalog-item__instock">@lang('Còn lại'): <span class="pcs">{{ getAmount($product->in_stock) }} @lang('account').</span></p>
            <p class="catalog-item__price">
    @lang('Giá'): <span class="amount">{{ number_format($product->price, 0, ',', '.') }} {{ $general->cur_text }}</span>
</p>

            @if($product->in_stock)
                <button class="btn btn--base btn--sm purchaseBtn" 
                    data-text="{{ $text }}"
                    data-price="{{ showAmount($product->price).' '.$general->cur_text }}"
                    data-qty="{{ getAmount($product->in_stock).' qty' }}"
                    data-id="{{ $product->id }}"
                    data-amount="{{ getAmount($product->price) }}"
                >
                    <i class="las la-shopping-cart"></i> @lang('Mua')
                </button>
            @else 
                <button class="btn btn--base btn--sm no-drop" disabled>
                    <i class="las la-shopping-cart"></i> @lang('Mua')
                </button>
            @endif
        </div>
    </div>
</div>