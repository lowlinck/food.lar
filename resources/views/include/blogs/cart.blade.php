@foreach ($blogs as $blog)
    <div class="cart__blog">
        <div class="cart__image">
            <div class="">
               <img class="picture__image" src="{{ $blog->base64Image}}" alt="An image">
            </div>
        </div>

        <div class="cart__content">
            <div class="cart__by">by:<span class="cart__author"> Aaron</span></div>
            <div class="cart__category">FoodieGo BCtravel</div>
            <div class="cart__title">{{ $blog->title }}</div>
            <div class="cart__text_artical">{{Illuminate\Support\Str::limit($blog->text, $limit = 250 , $end ='...') }}
            </div>
            <div class="blog__button">
                <a href="{{route('artical.show',$blog->id)}}">read more </a>
                <img src="{{asset('images/icon/rightVector.svg')}}" alt="">

            </div>
        </div>
    </div>
@endforeach

{{-- {{ $paginator->links(['prev_text' => 'Previous', 'next_text' => 'Next']) }} --}}

