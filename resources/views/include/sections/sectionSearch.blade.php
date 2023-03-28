<div class="sectionSearch">
    <div class="search__title">
         @include('include.repit.blockSearch',['title'=> "Popular", 'second'=> "searches"]) 
    </div>
   <div class="button__group">
    @foreach( $searches as $search)
    <button class="button">{{$search->name}}</button>
    {{-- <button class="button">georgian cuisine</button>
    <button class="button">eastern euaropean cuisine</button>
    <button class="button">romantic dinner</button>
    <button class="button">fish</button>
    <button class="button">american cuisine</button>
    <button class="button">georgian cuisine</button>
    <button class="button">eastern euaropean cuisine</button>
    <button class="button">romantic dinner</button>
    <button class="button">fish</button>
    <button class="button">american cuisine</button>
    <button class="button">georgian cuisine</button>
    <button class="button">eastern euaropean cuisine</button>
    <button class="button">romantic dinner</button>
    <button class="button">fish</button> --}}
    @endforeach
   </div>
   
</div>