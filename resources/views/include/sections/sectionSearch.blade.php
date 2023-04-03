<div class="sectionSearch">
    <div class="search__title">
         @include('include.repit.blockSearch',['title'=> "Popular", 'second'=> "searches"])
    </div>
   <div class="button__group">
    @foreach( $searches as $search)
    <button class="button">{{$search->name}}</button>

    @endforeach
   </div>

</div>
