<div class="sectionTwo">
@include('include.repit.titleBlock',['title'=> "Location"]) 
    <div class="main">  
        @foreach($location as $item)     
            <div class=" slider_images ">
                <picture>
                    <source media="(max-width: 1440px)" srcset="{{$item->imageMd}}">
                    <source media="(max-width: 768px)" srcset="{{$item->imageSd}}">
                    <img src="{{$item->imageXl}}" alt="An image">
                  </picture>  
                <div class="slider__titles">{{$item->title}}</div>
                <div class="slider__texts">{{$item->text}}</div>
            </div>
        @endforeach
    </div>   
</div>
