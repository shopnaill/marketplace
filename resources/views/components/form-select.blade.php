<div class="main-input">
    <select
        class="inputText"

        name="{{ $name }}"

        {!! $attributes !!}>

        @forelse($options as $key => $option)
            <option value="{{ $key }}">
                {{ $option }}
            </option>
        @empty
            {!! $slot !!}
        @endforelse
    </select>
         <x-form-label :label="$label" class="select-floating-label floating-label" />
</div>