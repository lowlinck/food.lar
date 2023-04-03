@section('content')
<header class="header">
    <div class="header_container">
        <div class="headermen">
            @include('include.header.menu')
        </div>
        @include('include.repit.titleBlock',['title'=> "Blog"])

        
         
    </div>
</header>
@include('include.footer.footer')
@endsection