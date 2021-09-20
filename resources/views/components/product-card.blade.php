<div {{ $attributes }}>
    <img src="{{$photo}}">
    <h1>{{$title}}</h1>
    <h4>
        @if ($promo!=null) 
        {{$promo}} - <strike>{{$price}}</strike>
         @else  
          {{$price}}
         @endif
        </h4>
    <a href="{{route('product',$id)}}" class="more-btn">{{'See Details'}}</a>
</div>