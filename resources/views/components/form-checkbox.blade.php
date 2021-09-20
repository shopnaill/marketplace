<div class="form-check">
    <input
        {!! $attributes !!}

        type="checkbox"

        value="{{ $value }}"

        name="{{ $name }}"
 
        @if($checked)
            checked="checked"
        @endif
    />

    <x-form-label :label="$label"  class="form-check-label" />

</div>