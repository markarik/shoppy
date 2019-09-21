<div class="carousel-container">
    <div id="carouselExampleFade" class="carousel carousel-custom slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($couresels as $slider)

                <li data-target="#carouselExampleFade" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>

                @endforeach
        </ol>
        <div class="carousel-inner">
        @foreach($couresels as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{asset('/products/images/couresels/'.$slider->image)}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="couresel_style">{{$slider->description}}</h5>
                    </div>
                </div>
        @endforeach
        </div>
        <a href="#carouselExampleFade" class="carousel-control-prev-container">
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
        </a>
        <a href="#carouselExampleFade" class="carousel-control-next-container">
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </a>

    </div>
</div>

