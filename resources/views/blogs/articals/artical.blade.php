@extends('layouts.main')
@section('content')
<header class="header">
    <div class="header_container">
        <div class="headermen">
            @include('include.header.menu')
        </div>
        @include('include.repit.breadсrumbs',['main'=> "Main", 'second'=>'Blogs'])
        <div class="article__title">
        @include('include.repit.titleBlock',['title'=> "$articals->title"])
        </div>
       <div class="writer">
            <div class="writer__artical">
            by:<span class="name_writer"> {{$articals->author}}</span>
            </div>
            <div class="writer__social">
                <ul>
                    <li><a href=""><img src="{{asset('images/icon/colorSocial/Instagram.png')}}" alt="" srcset=""></a></li>
                    <li><a href=""><img src="{{asset('images/icon/colorSocial/Tik Tok.png')}}" alt="" srcset=""></a></li>
                    <li><a href=""><img src="{{asset('images/icon/colorSocial/Twitter.png')}}" alt="" srcset=""></a></li>
                    <li><a href=""><img src="{{asset('images/icon/colorSocial/Youtube.png')}}" alt="" srcset=""></a></li>

                </ul>
            </div>
            <div class="writer__data">{{$data}}</div>

       </div>
       <div class="author__own">
        The opinions expressed in this article are the author’s own and do not necessarily reflect the views of FoodieGoLicious.
       </div>


    </div>

</header>
<div class="container">
    @include('include.blogs.contentBlog')
</div>

@include('include.footer.footer')
@endsection
