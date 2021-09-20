<button
    {!! $attributes->merge([
        'class' => 'btn btn-form mb-5',
        'type' => 'submit'
    ]) !!}
>
    {!! trim($slot) ?: __('Submit') !!}
</button>