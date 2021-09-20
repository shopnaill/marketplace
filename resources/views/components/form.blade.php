<form method="{{$method }}"  {{ $attributes }} >
 @csrf
    {!! $slot !!}
</form>