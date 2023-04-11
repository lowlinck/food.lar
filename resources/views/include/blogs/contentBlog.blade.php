<div class="artical__container">
    <div class="artical__image">
        <img src="{{$articals->resizeimg1}}" alt="" srcset="">
    </div>
    <div class="artical__firstPart">
            {{$articals->firstPart}}
    </div>
    <div class="artical__flex">
        <div class="artical__flex_First">{{$articals->flex_First}}</div>
        <div class="artical__flex_Second"><img src="{{$articals->resizeimg2}}" alt="" srcset=""></div>
    </div>
    <div class="artical__therdPart">
    {{$articals->flex_therdPart}}
    </div>
    <div class="artical__video">
        <div class="artical__video__poster"></div>
        {!! LaravelVideoEmbed::parse($url, $whitelist, $params, $attributes); !!}
    </div>

    <div class="artical__fourPart">
    {{$articals->fourPart}}
    </div>
    <div class="artical__instagram">{{-- <img src="{{$articals->resizeimg3}}" alt="" srcset=""> --}}
        {!!$articals->insta!!}
    </div>
    <div class="artical__lastPart">{{$articals->lastPart}}</div>
    <a class="" href="{{route('blogs.index')}}">
        <div class="button_blog">Back to Blog</div>
    </a>


</div>
