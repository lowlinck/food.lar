<div class="sectionBlog">
      @include('include.repit.titleBlock',['title'=> "Blog"]) 
<div class="blog__main">
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
            <div class="blog__title_main">{{$blog->title}}</div>
            <div class="blog__text_main">{{$blog->text}}
            </div>
            <div class="blog__button_main">
                <a href="{{route('artical.show',$blog->id)}}">read more </a>
                    <img src="{{asset('images/icon/rightVector.svg')}}" alt="" >
               
            </div>
        </div>
       
    </div>
    @endforeach
  
</div>
    
</div>