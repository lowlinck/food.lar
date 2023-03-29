@extends('layouts.main')
@section('content')
<<header class="header">
    <div class="header_container">
        <div class="headermen">
            @include('include.header.menu')
        </div>
        
         @include('include.repit.breadсrumbs',['main'=> "Main", 'second'=>'Blogs'])
         @include('include.repit.titleBlock',['title'=> "Blog"]) 
         @include('include.blogs.menublogs') 
         @include('include.blogs.cart') 

    </div>
</header>

@endsection