@php
    $brands = \App\Models\Brand::latest()->get();
@endphp


<div class="brand-logo pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="heading-part mb-30">
                    <h2 class="main_title heading"><span>{{__('user.our_Brands')}} </span></h2>
                </div>
            </div>
        </div>
        <div class=" brand">
            <div class="row">
                <div id="brand-logo" class="owl-carousel align_center">
                    @foreach ($brands as $brand)
                    <div class="item"><a href="#"><img src="{{asset($brand->brand_image)}}" alt="{{$brand->brand_name_en}}" style="width: 50%"/></a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
