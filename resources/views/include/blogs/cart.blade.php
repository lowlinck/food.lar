<div class="blog__main cart">
    @foreach($blogs as $blog)
    <div class="blog__cart">
        <div class="blog_left">
            <div class="blog__picture">
                <picture>
                    <source media="(max-width: 1440px)" srcset="{{$blog->imageMd}}">
                    <source media="(max-width: 768px)" srcset="{{$blog->imageSd}}">
                    <img src="{{$blog->imageXl}}" alt="An image">
                  </picture>    
            </div>
        </div>
     
        <div class="blog__right">
            <div class="blog__title">{{$blog->title}}</div>
            <div class="blog__text">{{$blog->text}}
            </div>
            <div class="blog__button">
                <a href="#">read more </a>
                    <img src="images/icon/rightVector.svg" alt="" >
               
            </div>
        </div>
       
    </div>
    @endforeach
  
</div>