@php
    $tags_en = App\Models\Product::groupBy('product_tags_en')->select('product_tags_en')->get();
    $tags_ar = App\Models\Product::groupBy('product_tags_ar')->select('product_tags_ar')->get();
@endphp

<div class="product-widget mb-60 mt-30">
    <h3 class="title">Product Tags</h3>
    <ul class="product-tag d-flex flex-wrap">

        @if(session()->get('language') == 'arabic')
            @foreach($tags_ar as $tag)
                <li><a class="item active" title="Phone" href="{{ url('product/tag/'.$tag->product_tags_ar) }}">
                        {{ str_replace(',',' ',$tag->product_tags_ar)  }}</a>
                </li>

            @endforeach
        @else
            @foreach($tags_en as $tag)
                <li>
                    <a class="item active" title="Phone" href="{{ url('product/tag/'.$tag->product_tags_en) }}">
                        {{ str_replace(',',' ',$tag->product_tags_en)  }}
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</div>
