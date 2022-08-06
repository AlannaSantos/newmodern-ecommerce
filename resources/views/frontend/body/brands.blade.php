@foreach ($brands as $brand)
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
        <div class="logo-slider-inner">

            <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">

                <div class="item m-t-15"> <a href="#" class="image">
                        <img data-echo="{{ $brand->brand_image }}">



                </div>

            </div>

        </div>
    </div>
@endforeach
