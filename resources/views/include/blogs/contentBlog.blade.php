<div class="artical__container">
    <div class="artical__image">
        <img src="{{$articals->resizeimg1}}" alt="" srcset="">
    </div>
    <div class="artical__firstPart">
            {{$articals->firstPart}}
    </div>
    <div class="artical__flex">
        <div class="artical__flex_First">{{$articals->flex_First}}</div>
        <div class="artical__flex_Second"><img src="{{asset('images/artical/ArticalBackgroundImage.png')}}" alt="" srcset=""></div>
    </div>
    <div class="artical__therdPart">
    {{$articals->flex_therdPart}}
    </div>
    <div class="artical__video">

    </div>
    <div class="artical__fourPart">
    {{$articals->fourPart}}
    </div>
    <div class="artical__instagram"><img src="{{asset('images/artical/Instagram post.png')}}" alt="" srcset=""></div>
    <div class="artical__lastPart">{{$articals->lastPart}}</div>
    <button class="button">Back to Blog</button>

</div>