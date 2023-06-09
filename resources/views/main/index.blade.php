@extends('layouts.main')
@section('content')
<header class="header mainheader">
    <div class="header_container">
      <div class="circle">       
        <div  class="circle__item1"></div>      
        <div class="circle__item2"></div>    
        <div  class="circle__item3"></div>
        <div  class="circle__item4"></div>
        <div  class="circle__item5"></div>    
         <div class="circle__image">
        <div class="circle__image_1"></div>
        <div class="circle__image_2"></div>
        <div class="circle__image_3"></div>
        <div class="circle__image_4"></div>
        <div class="circle__image_5"></div>
        <div class="circle__image_6"></div>
        <div class="circle__image_7"></div>
        <div class="circle__image_8"></div>
        </div>        
        @include('include.header.menu')
        @include('include.header.mainTitle')
        @include('include.header.formHeader')
        @include('include.header.popup')
      </div>
    </div>
  </header>
  @include('include.sections.sectionOne')
  @include('include.sections.sectionTwo')
  @include('include.sections.sectionCuisine')
  @include('include.sections.sectionBlog')
  @include('include.sections.sectionSearch')
  @include('include.footer.footer')
@endsection