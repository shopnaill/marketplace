@if($type === 'hidden') <div style="display: none"> @endif
     <div class="main-input"> 
        <input class="inputText"
            {{$attributes}}
            
            type="{{ $type }}"

            name="{{ $name }}"
            />
          <x-form-label :label="$label" class="floating-label" />
      </div>
@if($type === 'hidden') </div> @endif