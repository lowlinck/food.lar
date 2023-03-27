<section>
    <div class="section1_content">
        <div class="hotTitle">
            <div class="hotTitle__titleText">Hot new</div>
            <div class="hotTitle__titleImage"> <img src="/images/icon/fire.png" alt="" srcset=""> </div>
        </div>
         @include('include.repit.titleBlock',['title'=> "restaurants"]) 

        <div class=" swiper swiper-container">
            <div class="swiper-wrapper ">
                @foreach ($sliderone as $item)
                <div class=" slider_image swiper-slide">
                    <img src="{{asset($item->image)}}" alt="" srcset="">
                    <div class="slider__title">{{$item->title}}</div>
                    <div class="slider__text">{{$item->text}}</div>
                </div>
                @endforeach          
            </div>         
            {{-- <div class="swiper-pagination"></div> --}}
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="button-next"></div>
        <div class="button-prev"></div>
    </div>
    
</section>
