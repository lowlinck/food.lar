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
            by: {{$articals->author}}
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

        
         
    </div>
</header>
@include('include.footer.footer')
@endsection