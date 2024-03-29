<div class='program-wrapper'>
    <div class=' font-fraunces text-3xl'>PROGRAMS</div>
    <div class="swiper home-programs relative">
        <div class="swiper-wrapper ">
       
        @foreach($data['PROGRAMS'] as $program)
            <div class="swiper-slide">
                <!--start here-->
                @include('partials.home.slidercomponent', ['component' => $program, 'logo' => 'program'])
                <!--end here--> 
            </div>
        @endforeach
        </div>
     
        @include('partials.home.arrowcomponent')
      
    </div>
</div>