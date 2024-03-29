<div class='series-wrapper'>
    <div class=' font-fraunces text-3xl'>SERIES</div>
    <div class="swiper home-series relative">
        <div class="swiper-wrapper">
        @foreach($data['SERIES'] as $series)
            <div class="swiper-slide">
                <!--start here-->
                @include('partials.home.slidercomponent', ['component' => $series, 'logo' => 'series'])
                <!--end here--> 
            </div>
        @endforeach
        </div>
       
        @include('partials.home.arrowcomponent')
        
    </div>
</div>