<div {{$attributes}} >
    <x-form-label :label="$label" />

    <div>
        {!! $slot !!}
    </div>

    {!! $help ?? null !!}

</div>