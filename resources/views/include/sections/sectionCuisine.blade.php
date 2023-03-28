<div class="sectionCuisine">
   @include('include.repit.titleBlock',['title'=> "Cuisine"]) 

    <div class="cousine__container">
      @foreach ($cuisinepart as $item)
      <div class=" cuisne_image">
        <picture>
            <source media="(max-width: 1440px)" srcset="{{$item->imageMd}}">
            <source media="(max-width: 768px)" srcset="{{$item->imageSd}}">
            <img src="{{$item->imageXl}}" alt="An image">
          </picture>                
        <div class="cuisine__title">{{$item->title}}</div>
      </div>
      @endforeach
            
         
    </div>
</div>