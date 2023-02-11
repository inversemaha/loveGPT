<!-- Carousel Slider -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" data-interval="500">

    <div class="container">

        <!-- Indicators/dots -->
        {{--<div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>--}}

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">

            @if(count($sliders)>0)
                <div class="carousel-item active">
                    <img src="{{$sliders[0]->featured_image}}" alt="Los Angeles" class="d-block w-100">
                </div>
            @endif
            @foreach($sliders as $slider)
                <div class="carousel-item">
                    <img src="{{$slider->featured_image}}" alt="Los Angeles" class="d-block w-100">
                </div>
            @endforeach

            {{--<div class="carousel-item">
                <img src="ny.jpg" alt="New York" class="d-block w-100">
            </div>--}}
        </div>

        <!-- Left and right controls/icons -->
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
             <span class="carousel-control-prev-icon"></span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
             <span class="carousel-control-next-icon"></span>
         </button>--}}
    </div>
</div>
